<?php return array (
  'imports' => 
  array (
    0 => 
    array (
      'resource' => 'set_parameters.php',
    ),
    1 => 
    array (
      'resource' => 'security.yml',
    ),
    2 => 
    array (
      'resource' => 'services.yml',
    ),
    3 => 
    array (
      'resource' => 'addons/*.yml',
    ),
    4 => 
    array (
      'resource' => 'doctrine.yml',
    ),
  ),
  'parameters' => 
  array (
    'env(PS_THEME_NAME)' => 'classic',
    'AdapterSecurityAdminClass' => 'PrestaShop\\PrestaShop\\Adapter\\Security\\Admin',
    'translator.class' => 'PrestaShopBundle\\Translation\\Translator',
    'translator.data_collector' => 'PrestaShopBundle\\Translation\\DataCollectorTranslator',
    'admin_page' => '%kernel.root_dir%/../src/PrestaShopBundle/Resources/views/Admin',
    'env(PS_LOG_OUTPUT)' => '%kernel.logs_dir%/%kernel.environment%.log',
    'mail_themes_uri' => '/mails/themes',
    'mail_themes_dir' => '%kernel.project_dir%%mail_themes_uri%',
    'modules_translation_paths' => 
    array (
    ),
  ),
  'services' => 
  array (
    'PrestaShopBundle\\Controller\\' => 
    array (
      'resource' => '%kernel.root_dir%/../src/PrestaShopBundle/Controller/*',
      'exclude' => '%kernel.root_dir%/../src/PrestaShopBundle/Controller/Api',
      'tags' => 
      array (
        0 => 'controller.service_arguments',
        1 => NULL,
      ),
    ),
  ),
  'framework' => 
  array (
    'assets' => 
    array (
      'version' => NULL,
    ),
    'secret' => '%secret%',
    'translator' => 
    array (
      'fallbacks' => 
      array (
        0 => 'default',
      ),
      'paths' => '%modules_translation_paths%',
    ),
    'router' => 
    array (
      'resource' => '%kernel.root_dir%/config/routing.yml',
      'strict_requirements' => NULL,
    ),
    'form' => NULL,
    'csrf_protection' => NULL,
    'validation' => 
    array (
      'enable_annotations' => true,
    ),
    'serializer' => 
    array (
      'enable_annotations' => true,
    ),
    'templating' => 
    array (
      'engines' => 
      array (
        0 => 'twig',
      ),
    ),
    'default_locale' => '%locale%',
    'trusted_hosts' => NULL,
    'session' => 
    array (
      'handler_id' => NULL,
    ),
    'fragments' => NULL,
    'http_method_override' => true,
  ),
  'monolog' => 
  array (
    'handlers' => 
    array (
      'main' => 
      array (
        'type' => 'stream',
        'path' => '%env(PS_LOG_OUTPUT)%',
        'level' => 'notice',
      ),
      'legacy' => 
      array (
        'type' => 'service',
        'id' => 'prestashop.handler.log',
        'level' => 'warning',
        'channels' => 
        array (
          0 => 'app',
        ),
      ),
    ),
  ),
  'twig' => 
  array (
    'autoescape' => 'name',
    'debug' => '%kernel.debug%',
    'strict_variables' => '%kernel.debug%',
    'form_themes' => 
    array (
      0 => 'PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig',
    ),
    'paths' => 
    array (
      '%admin_page%/Product' => 'Product',
      '%admin_page%/TwigTemplateForm' => 'Twig',
      '%admin_page%/Common' => 'Common',
      '%admin_page%/Configure/AdvancedParameters' => 'AdvancedParameters',
      '%admin_page%/Configure/ShopParameters' => 'ShopParameters',
      '%kernel.root_dir%/../modules' => 'Modules',
      '%mail_themes_dir%' => 'MailThemes',
    ),
    'globals' => 
    array (
      'webpack_server' => false,
      'multistore_field_prefix' => NULL,
    ),
  ),
  'swiftmailer' => 
  array (
    'transport' => '%mailer_transport%',
    'host' => '%mailer_host%',
    'username' => '%mailer_user%',
    'password' => '%mailer_password%',
    'spool' => 
    array (
      'type' => 'memory',
    ),
  ),
  'csa_guzzle' => 
  array (
    'profiler' => 
    array (
      'enabled' => '%kernel.debug%',
    ),
    'cache' => 
    array (
      'enabled' => true,
      'adapter' => 'guzzle.cache',
    ),
    'clients' => 
    array (
      'addons_api' => 
      array (
        'config' => 
        array (
          'base_url' => 'https://api-addons.prestashop.com',
          'defaults' => 
          array (
            'timeout' => '5.0',
          ),
          'headers' => 
          array (
            'Accept' => 'application/json',
          ),
          'curl' => 
          array (
            'forbid_reuse' => true,
            'fresh_connect' => true,
          ),
        ),
      ),
    ),
  ),
  'prestashop' => 
  array (
    'addons' => 
    array (
      'prestatrust' => 
      array (
        'enabled' => true,
      ),
      'api_client' => 
      array (
        'ttl' => 7200,
      ),
    ),
  ),
);
