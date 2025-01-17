<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\Compiler;

use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\ContainerBuilder;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\EnvVarProcessor;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\EnvVarProcessorInterface;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\Reference;
use PrestaShop\Module\PsAccounts\Vendor\Symfony\Component\DependencyInjection\ServiceLocator;
/**
 * Creates the container.env_var_processors_locator service.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterEnvVarProcessorsPass implements CompilerPassInterface
{
    private static $allowedTypes = ['array', 'bool', 'float', 'int', 'string'];
    public function process(ContainerBuilder $container)
    {
        $bag = $container->getParameterBag();
        $types = [];
        $processors = [];
        foreach ($container->findTaggedServiceIds('container.env_var_processor') as $id => $tags) {
            if (!($r = $container->getReflectionClass($class = $container->getDefinition($id)->getClass()))) {
                throw new InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            } elseif (!$r->isSubclassOf(EnvVarProcessorInterface::class)) {
                throw new InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, EnvVarProcessorInterface::class));
            }
            foreach ($class::getProvidedTypes() as $prefix => $type) {
                $processors[$prefix] = new ServiceClosureArgument(new Reference($id));
                $types[$prefix] = self::validateProvidedTypes($type, $class);
            }
        }
        if ($bag instanceof EnvPlaceholderParameterBag) {
            foreach (EnvVarProcessor::getProvidedTypes() as $prefix => $type) {
                if (!isset($types[$prefix])) {
                    $types[$prefix] = self::validateProvidedTypes($type, EnvVarProcessor::class);
                }
            }
            $bag->setProvidedTypes($types);
        }
        if ($processors) {
            $container->register('container.env_var_processors_locator', ServiceLocator::class)->setPublic(\true)->setArguments([$processors]);
        }
    }
    private static function validateProvidedTypes($types, $class)
    {
        $types = \explode('|', $types);
        foreach ($types as $type) {
            if (!\in_array($type, self::$allowedTypes)) {
                throw new InvalidArgumentException(\sprintf('Invalid type "%s" returned by "%s::getProvidedTypes()", expected one of "%s".', $type, $class, \implode('", "', self::$allowedTypes)));
            }
        }
        return $types;
    }
}
