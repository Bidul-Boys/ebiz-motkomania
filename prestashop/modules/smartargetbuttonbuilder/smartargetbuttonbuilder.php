<?php
/**
 * This file provides the Smartarget Button Builder module for PrestaShop.
 *
 * @author Smartarget
 * @copyright Smartarget 2023
 * @license MIT
 */
use PrestaShop\ModuleLibServiceContainer\DependencyInjection\ServiceContainer;
use Prestashop\ModuleLibMboInstaller\DependencyBuilder;
use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;

if (!defined('_PS_VERSION_')) {
    exit;
}

$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

class SmartargetButtonBuilder extends Module
{
    /**
     * @var ServiceContainer
     */
    private $container;

    public function __construct()
    {
        $this->name = 'smartargetbuttonbuilder';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->module_key = 'd1559f64cfb11931c3bf104f0e8f72bf';
        $this->author = 'Smartarget';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
	    $this->php_versions_compliancy = [
		    'min' => '7.2',
	    ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Smartarget Button Builder');
        $this->description = $this->l('Build special button with action for your site.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

	    try {
		    $mboStatus = (new Prestashop\ModuleLibMboInstaller\Presenter())->present();
		    if (!$mboStatus['isInstalled']) {
			    $mboInstaller = new Prestashop\ModuleLibMboInstaller\Installer(_PS_VERSION_);
			    $mboInstaller->installModule();
		    }
	    } catch (Exception $e) {
		    $this->context->controller->errors[] = $e->getMessage();
	    }

	    if ($this->container === null) {
		    $this->container = new ServiceContainer(
			    $this->name,
			    $this->getLocalPath()
		    );
	    }
    }

    public function install()
    {
        parent::install();

	    if (version_compare(_PS_VERSION_, '8.0.0', '<')) {
		    if (!$this->registerHook('displayHeader')) {
			    return false;
		    }
	    }
		else
		{
			if (!$this->registerHook('header')) {
				return false;
			}
		}

        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminSmartargetCallButton';
        $tab->name = [];
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = 'Smartarget Button Builder';
        }

        // Set parent as the "Modules" section.
        $tab->id_parent = (int) Tab::getIdFromClassName('AdminParentModulesSf');
        $tab->module = $this->name;
        $tab->add();

        return true;
    }

    public function hookHeader()
    {
        $storefrontHash = sha1(sha1('prestashop_button_builder_' . preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', Tools::getShopDomain())) . '_script');
        $this->context->smarty->assign('storefrontHash', $storefrontHash);

        return $this->display(__FILE__, 'views/templates/hook/header.tpl');
    }

	public function hookDisplayHeader()
    {
        $storefrontHash = sha1(sha1('prestashop_button_builder_' . preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', Tools::getShopDomain())) . '_script');
        $this->context->smarty->assign('storefrontHash', $storefrontHash);

        return $this->display(__FILE__, 'views/templates/hook/header.tpl');
    }

    public function getContent()
    {
        $adminHash = sha1('prestashop_button_builder_' . preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', Tools::getShopDomain()));
        $this->context->smarty->assign('adminHash', $adminHash);
        $this->context->smarty->assign('storefrontDomain', Tools::getShopDomain());
        $this->context->smarty->assign('prestashopAccount', json_encode([]));
        $this->context->smarty->assign('module_dir', $this->_path);

	    # Load dependencies manager
	    $mboInstaller = new \Prestashop\ModuleLibMboInstaller\DependencyBuilder($this);

	    if( !$mboInstaller->areDependenciesMet() )
	    {
		    $dependencies = $mboInstaller->handleDependencies();

		    $this->smarty->assign('dependencies', $dependencies);

		    return $this->display(__FILE__, 'views/templates/admin/dependency_builder.tpl');
	    }
		
	    $moduleManager = ModuleManagerBuilder::getInstance()->build();

	    $accountsService = null;

        try {
            $accountsFacade = $this->getService('smartargetbuttonbuilder.ps_accounts_facade');
            $accountsService = $accountsFacade->getPsAccountsService();
        } catch (InstallerException $e) {
            $accountsInstaller = $this->getService('smartargetbuttonbuilder.ps_accounts_installer');
            $accountsInstaller->install();
            $accountsFacade = $this->getService('smartargetbuttonbuilder.ps_accounts_facade');
            $accountsService = $accountsFacade->getPsAccountsService();
        }

       try {
		    Media::addJsDef([
			    'contextPsAccounts' => $accountsFacade->getPsAccountsPresenter()
			                                          ->present($this->name),
		    ]);

		    // Retrieve Account CDN
		    $this->context->smarty->assign('urlAccountsCdn', $accountsService->getAccountsCdn());

	    } catch (Exception $e) {
		    $this->context->controller->errors[] = $e->getMessage();
		    return '';
	    }

	    if ($moduleManager->isInstalled("ps_eventbus")) {
		    $eventbusModule =  \Module::getInstanceByName("ps_eventbus");
		    if (version_compare($eventbusModule->version, '1.9.0', '>=')) {

			    $eventbusPresenterService = $eventbusModule->getService('PrestaShop\Module\PsEventbus\Service\PresenterService');

			    $this->context->smarty->assign('urlCloudsync', "https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js");

			    Media::addJsDef([
				    'contextPsEventbus' => $eventbusPresenterService->expose($this, ['info', 'modules', 'themes'])
			    ]);
		    }
	    }

        /**********************
         * PrestaShop Billing *
         * *******************/

        // Load the context for PrestaShop Billing
        $billingFacade = $this->getService('smartargetbuttonbuilder.ps_billings_facade');
        $partnerLogo = $this->getLocalPath() . 'logo.png';

        // PrestaShop Billing
        Media::addJsDef($billingFacade->present([
            'logo' => $partnerLogo,
            'tosLink' => 'https://smartarget.online/page_terms.html',
            'privacyLink' => 'https://smartarget.online/page_privacy.html',
            'emailSupport' => 'support@smartarget.online',
        ]));

        $this->context->smarty->assign('urlBilling', 'https://unpkg.com/@prestashopcorp/billing-cdc/dist/bundle.js');

        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output;
    }

    /**
     * Retrieve the service
     *
     * @param string $serviceName
     *
     * @return mixed
     */
    public function getService($serviceName)
    {
        return $this->container->getService($serviceName);
    }

    public function uninstall()
    {
        try {
            $tabId = (int) Tab::getIdFromClassName('AdminSmartargetButtonBuilder');
            if ($tabId) {
                $tab = new Tab($tabId);
                $tab->delete();
            }
        } catch (Exception $e) {
        }

        return parent::uninstall();
    }
}
