<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Ps_checkout7363AdminContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = [];
        $this->normalizedIds = [
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\refund\\commandhandler\\refundpaypalcapturecommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\refund\\eventsubscriber\\paypalrefundeventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber',
        ];
        $this->methodMap = [
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler' => 'getRefundPayPalCaptureCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => 'getPayPalRefundEventSubscriberService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_checkout.adapter.language' => 'getPsCheckout_Adapter_LanguageService',
            'ps_checkout.builder.module_link' => 'getPsCheckout_Builder_ModuleLinkService',
            'ps_checkout.bus.command' => 'getPsCheckout_Bus_CommandService',
            'ps_checkout.cache.array.paypal.capture' => 'getPsCheckout_Cache_Array_Paypal_CaptureService',
            'ps_checkout.cache.array.paypal.order' => 'getPsCheckout_Cache_Array_Paypal_OrderService',
            'ps_checkout.cache.directory' => 'getPsCheckout_Cache_DirectoryService',
            'ps_checkout.cache.filesystem.paypal.capture' => 'getPsCheckout_Cache_Filesystem_Paypal_CaptureService',
            'ps_checkout.cache.filesystem.paypal.order' => 'getPsCheckout_Cache_Filesystem_Paypal_OrderService',
            'ps_checkout.cache.order' => 'getPsCheckout_Cache_OrderService',
            'ps_checkout.cache.paypal.capture' => 'getPsCheckout_Cache_Paypal_CaptureService',
            'ps_checkout.cache.paypal.order' => 'getPsCheckout_Cache_Paypal_OrderService',
            'ps_checkout.cache.pscheckoutcart' => 'getPsCheckout_Cache_PscheckoutcartService',
            'ps_checkout.checkout.checker' => 'getPsCheckout_Checkout_CheckerService',
            'ps_checkout.command.handler.checkout.cancel_checkout' => 'getPsCheckout_Command_Handler_Checkout_CancelCheckoutService',
            'ps_checkout.command.handler.checkout.save_checkout' => 'getPsCheckout_Command_Handler_Checkout_SaveCheckoutService',
            'ps_checkout.command.handler.checkout.save_paypal_order_status' => 'getPsCheckout_Command_Handler_Checkout_SavePaypalOrderStatusService',
            'ps_checkout.command.handler.order.add_order_payment' => 'getPsCheckout_Command_Handler_Order_AddOrderPaymentService',
            'ps_checkout.command.handler.order.create_order' => 'getPsCheckout_Command_Handler_Order_CreateOrderService',
            'ps_checkout.command.handler.order.matrice.update_order_matrice' => 'getPsCheckout_Command_Handler_Order_Matrice_UpdateOrderMatriceService',
            'ps_checkout.command.handler.order.update_order_status' => 'getPsCheckout_Command_Handler_Order_UpdateOrderStatusService',
            'ps_checkout.command.handler.paypal.order.capture_paypal_order' => 'getPsCheckout_Command_Handler_Paypal_Order_CapturePaypalOrderService',
            'ps_checkout.command.handler.paypal.order.create_paypal_order' => 'getPsCheckout_Command_Handler_Paypal_Order_CreatePaypalOrderService',
            'ps_checkout.command.handler.paypal.order.update_paypal_order' => 'getPsCheckout_Command_Handler_Paypal_Order_UpdatePaypalOrderService',
            'ps_checkout.configuration' => 'getPsCheckout_ConfigurationService',
            'ps_checkout.configuration.batch_processor' => 'getPsCheckout_Configuration_BatchProcessorService',
            'ps_checkout.configuration.options.resolver' => 'getPsCheckout_Configuration_Options_ResolverService',
            'ps_checkout.context.prestashop' => 'getPsCheckout_Context_PrestashopService',
            'ps_checkout.context.shop' => 'getPsCheckout_Context_ShopService',
            'ps_checkout.context.state.manager' => 'getPsCheckout_Context_State_ManagerService',
            'ps_checkout.env_loader' => 'getPsCheckout_EnvLoaderService',
            'ps_checkout.environment.payment' => 'getPsCheckout_Environment_PaymentService',
            'ps_checkout.event.dispatcher' => 'getPsCheckout_Event_DispatcherService',
            'ps_checkout.event.dispatcher.factory' => 'getPsCheckout_Event_Dispatcher_FactoryService',
            'ps_checkout.event.dispatcher.symfony' => 'getPsCheckout_Event_Dispatcher_SymfonyService',
            'ps_checkout.event.subscriber.checkout' => 'getPsCheckout_Event_Subscriber_CheckoutService',
            'ps_checkout.event.subscriber.order' => 'getPsCheckout_Event_Subscriber_OrderService',
            'ps_checkout.event.subscriber.paypal.capture' => 'getPsCheckout_Event_Subscriber_Paypal_CaptureService',
            'ps_checkout.event.subscriber.paypal.order' => 'getPsCheckout_Event_Subscriber_Paypal_OrderService',
            'ps_checkout.express_checkout.configuration' => 'getPsCheckout_ExpressCheckout_ConfigurationService',
            'ps_checkout.funding_source.collection' => 'getPsCheckout_FundingSource_CollectionService',
            'ps_checkout.funding_source.collection.builder' => 'getPsCheckout_FundingSource_Collection_BuilderService',
            'ps_checkout.funding_source.configuration' => 'getPsCheckout_FundingSource_ConfigurationService',
            'ps_checkout.funding_source.configuration.repository' => 'getPsCheckout_FundingSource_Configuration_RepositoryService',
            'ps_checkout.funding_source.eligibility_constraint' => 'getPsCheckout_FundingSource_EligibilityConstraintService',
            'ps_checkout.funding_source.presenter' => 'getPsCheckout_FundingSource_PresenterService',
            'ps_checkout.funding_source.provider' => 'getPsCheckout_FundingSource_ProviderService',
            'ps_checkout.funding_source.translation' => 'getPsCheckout_FundingSource_TranslationService',
            'ps_checkout.http.client' => 'getPsCheckout_Http_ClientService',
            'ps_checkout.http.client.checkout' => 'getPsCheckout_Http_Client_CheckoutService',
            'ps_checkout.http.client.configuration' => 'getPsCheckout_Http_Client_ConfigurationService',
            'ps_checkout.http.client.factory' => 'getPsCheckout_Http_Client_FactoryService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.configuration' => 'getPsCheckout_Logger_ConfigurationService',
            'ps_checkout.logger.directory' => 'getPsCheckout_Logger_DirectoryService',
            'ps_checkout.logger.factory' => 'getPsCheckout_Logger_FactoryService',
            'ps_checkout.logger.file.finder' => 'getPsCheckout_Logger_File_FinderService',
            'ps_checkout.logger.file.reader' => 'getPsCheckout_Logger_File_ReaderService',
            'ps_checkout.logger.filename' => 'getPsCheckout_Logger_FilenameService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.logger.handler.factory' => 'getPsCheckout_Logger_Handler_FactoryService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.module.version' => 'getPsCheckout_Module_VersionService',
            'ps_checkout.order.service.check_order_amount' => 'getPsCheckout_Order_Service_CheckOrderAmountService',
            'ps_checkout.order.state.service.order_state_mapper' => 'getPsCheckout_Order_State_Service_OrderStateMapperService',
            'ps_checkout.pay_later.configuration' => 'getPsCheckout_PayLater_ConfigurationService',
            'ps_checkout.paypal.builder.view_order_summary' => 'getPsCheckout_Paypal_Builder_ViewOrderSummaryService',
            'ps_checkout.paypal.capture.service.check_transition_paypal_capture_status' => 'getPsCheckout_Paypal_Capture_Service_CheckTransitionPaypalCaptureStatusService',
            'ps_checkout.paypal.configuration' => 'getPsCheckout_Paypal_ConfigurationService',
            'ps_checkout.paypal.order.presenter' => 'getPsCheckout_Paypal_Order_PresenterService',
            'ps_checkout.paypal.order.service.check_transition_paypal_order_status' => 'getPsCheckout_Paypal_Order_Service_CheckTransitionPaypalOrderStatusService',
            'ps_checkout.paypal.order.service.paypal_order_status' => 'getPsCheckout_Paypal_Order_Service_PaypalOrderStatusService',
            'ps_checkout.paypal.order.translations' => 'getPsCheckout_Paypal_Order_TranslationsService',
            'ps_checkout.paypal.provider.order' => 'getPsCheckout_Paypal_Provider_OrderService',
            'ps_checkout.prestashop.router' => 'getPsCheckout_Prestashop_RouterService',
            'ps_checkout.query.handler.checkout.update_payment_method_selected' => 'getPsCheckout_Query_Handler_Checkout_UpdatePaymentMethodSelectedService',
            'ps_checkout.query.handler.order.get_order_for_approval_reversed' => 'getPsCheckout_Query_Handler_Order_GetOrderForApprovalReversedService',
            'ps_checkout.query.handler.order.get_order_for_payment_completed' => 'getPsCheckout_Query_Handler_Order_GetOrderForPaymentCompletedService',
            'ps_checkout.query.handler.order.get_order_for_payment_denied' => 'getPsCheckout_Query_Handler_Order_GetOrderForPaymentDeniedService',
            'ps_checkout.query.handler.order.get_order_for_payment_pending' => 'getPsCheckout_Query_Handler_Order_GetOrderForPaymentPendingService',
            'ps_checkout.query.handler.order.get_order_for_payment_refunded' => 'getPsCheckout_Query_Handler_Order_GetOrderForPaymentRefundedService',
            'ps_checkout.query.handler.order.get_order_for_payment_reversed' => 'getPsCheckout_Query_Handler_Order_GetOrderForPaymentReversedService',
            'ps_checkout.query.handler.paypal.order.get_current_paypal_order_status' => 'getPsCheckout_Query_Handler_Paypal_Order_GetCurrentPaypalOrderStatusService',
            'ps_checkout.query.handler.paypal.order.get_paypal_order_for_cart_id' => 'getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForCartIdService',
            'ps_checkout.query.handler.paypal.order.get_paypal_order_for_checkout_completed' => 'getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForCheckoutCompletedService',
            'ps_checkout.query.handler.paypal.order.get_paypal_order_for_order_confirmation' => 'getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForOrderConfirmationService',
            'ps_checkout.repository.country' => 'getPsCheckout_Repository_CountryService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
            'ps_checkout.repository.prestashop.account' => 'getPsCheckout_Repository_Prestashop_AccountService',
            'ps_checkout.repository.pscheckoutcart' => 'getPsCheckout_Repository_PscheckoutcartService',
            'ps_checkout.sdk.paypal.configurationbuilder' => 'getPsCheckout_Sdk_Paypal_ConfigurationbuilderService',
            'ps_checkout.shop.provider' => 'getPsCheckout_Shop_ProviderService',
            'ps_checkout.step.live' => 'getPsCheckout_Step_LiveService',
            'ps_checkout.step.value' => 'getPsCheckout_Step_ValueService',
            'ps_checkout.store.module.configuration' => 'getPsCheckout_Store_Module_ConfigurationService',
            'ps_checkout.store.module.context' => 'getPsCheckout_Store_Module_ContextService',
            'ps_checkout.store.module.paypal' => 'getPsCheckout_Store_Module_PaypalService',
            'ps_checkout.store.store' => 'getPsCheckout_Store_StoreService',
            'ps_checkout.tactician.bus' => 'getPsCheckout_Tactician_BusService',
            'ps_checkout.tactician.bus.factory' => 'getPsCheckout_Tactician_Bus_FactoryService',
            'ps_checkout.translations.translations' => 'getPsCheckout_Translations_TranslationsService',
            'ps_checkout.validator.batch_configuration' => 'getPsCheckout_Validator_BatchConfigurationService',
            'ps_checkout.validator.front_controller' => 'getPsCheckout_Validator_FrontControllerService',
            'ps_checkout.validator.merchant' => 'getPsCheckout_Validator_MerchantService',
            'ps_checkout.webhook.handler' => 'getPsCheckout_Webhook_HandlerService',
            'ps_checkout.webhook.handler.event.configuration_updated' => 'getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService',
            'ps_checkout.webhook.service.secret_token' => 'getPsCheckout_Webhook_Service_SecretTokenService',
        ];
        $this->privates = [
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
        ];

        $this->aliases = [];
    }

    public function getRemovedIds()
    {
        return [
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler
     */
    protected function getRefundPayPalCaptureCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler(${($_ = isset($this->services['ps_checkout.http.client.checkout']) ? $this->services['ps_checkout.http.client.checkout'] : $this->getPsCheckout_Http_Client_CheckoutService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['ps_accounts.installer']) ? $this->services['ps_accounts.installer'] : ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'ps_checkout.adapter.language' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getPsCheckout_Adapter_LanguageService()
    {
        return $this->services['ps_checkout.adapter.language'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.builder.module_link' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder
     */
    protected function getPsCheckout_Builder_ModuleLinkService()
    {
        return $this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder();
    }

    /**
     * Gets the public 'ps_checkout.bus.command' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter
     */
    protected function getPsCheckout_Bus_CommandService()
    {
        return $this->services['ps_checkout.bus.command'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter(${($_ = isset($this->services['ps_checkout.tactician.bus']) ? $this->services['ps_checkout.tactician.bus'] : $this->getPsCheckout_Tactician_BusService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.cache.directory' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getPsCheckout_Cache_DirectoryService()
    {
        return $this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', false);
    }

    /**
     * Gets the public 'ps_checkout.cache.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_OrderService()
    {
        return $this->services['ps_checkout.cache.order'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ChainCache
     */
    protected function getPsCheckout_Cache_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.paypal.capture'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => ${($_ = isset($this->services['ps_checkout.cache.array.paypal.capture']) ? $this->services['ps_checkout.cache.array.paypal.capture'] : ($this->services['ps_checkout.cache.array.paypal.capture'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.cache.filesystem.paypal.capture']) ? $this->services['ps_checkout.cache.filesystem.paypal.capture'] : $this->getPsCheckout_Cache_Filesystem_Paypal_CaptureService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ChainCache
     */
    protected function getPsCheckout_Cache_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.paypal.order'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => ${($_ = isset($this->services['ps_checkout.cache.array.paypal.order']) ? $this->services['ps_checkout.cache.array.paypal.order'] : ($this->services['ps_checkout.cache.array.paypal.order'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.cache.filesystem.paypal.order']) ? $this->services['ps_checkout.cache.filesystem.paypal.order'] : $this->getPsCheckout_Cache_Filesystem_Paypal_OrderService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.cache.pscheckoutcart' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_PscheckoutcartService()
    {
        return $this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.checkout.checker' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker
     */
    protected function getPsCheckout_Checkout_CheckerService()
    {
        return $this->services['ps_checkout.checkout.checker'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker(${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.checkout.cancel_checkout' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Checkout_CancelCheckoutService()
    {
        return $this->services['ps_checkout.command.handler.checkout.cancel_checkout'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.checkout.save_checkout' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Checkout_SaveCheckoutService()
    {
        return $this->services['ps_checkout.command.handler.checkout.save_checkout'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.checkout.save_paypal_order_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Checkout_SavePaypalOrderStatusService()
    {
        return $this->services['ps_checkout.command.handler.checkout.save_paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.order.add_order_payment' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Order_AddOrderPaymentService()
    {
        return $this->services['ps_checkout.command.handler.order.add_order_payment'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler(${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.translation']) ? $this->services['ps_checkout.funding_source.translation'] : $this->getPsCheckout_FundingSource_TranslationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.order.create_order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Order_CreateOrderService()
    {
        return $this->services['ps_checkout.command.handler.order.create_order'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler(${($_ = isset($this->services['ps_checkout.context.state.manager']) ? $this->services['ps_checkout.context.state.manager'] : ($this->services['ps_checkout.context.state.manager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.state.service.order_state_mapper']) ? $this->services['ps_checkout.order.state.service.order_state_mapper'] : $this->getPsCheckout_Order_State_Service_OrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.service.check_order_amount']) ? $this->services['ps_checkout.order.service.check_order_amount'] : ($this->services['ps_checkout.order.service.check_order_amount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.order.matrice.update_order_matrice' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Order_Matrice_UpdateOrderMatriceService()
    {
        return $this->services['ps_checkout.command.handler.order.matrice.update_order_matrice'] = new \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler(${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.order.update_order_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Order_UpdateOrderStatusService()
    {
        return $this->services['ps_checkout.command.handler.order.update_order_status'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler(${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.paypal.order.capture_paypal_order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Paypal_Order_CapturePaypalOrderService()
    {
        return $this->services['ps_checkout.command.handler.paypal.order.capture_paypal_order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler(${($_ = isset($this->services['ps_checkout.http.client.checkout']) ? $this->services['ps_checkout.http.client.checkout'] : $this->getPsCheckout_Http_Client_CheckoutService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.paypal.order.create_paypal_order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Paypal_Order_CreatePaypalOrderService()
    {
        return $this->services['ps_checkout.command.handler.paypal.order.create_paypal_order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler(${($_ = isset($this->services['ps_checkout.http.client.checkout']) ? $this->services['ps_checkout.http.client.checkout'] : $this->getPsCheckout_Http_Client_CheckoutService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.command.handler.paypal.order.update_paypal_order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler
     */
    protected function getPsCheckout_Command_Handler_Paypal_Order_UpdatePaypalOrderService()
    {
        return $this->services['ps_checkout.command.handler.paypal.order.update_paypal_order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler(${($_ = isset($this->services['ps_checkout.http.client.checkout']) ? $this->services['ps_checkout.http.client.checkout'] : $this->getPsCheckout_Http_Client_CheckoutService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.event.dispatcher']) ? $this->services['ps_checkout.event.dispatcher'] : $this->getPsCheckout_Event_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPsCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(${($_ = isset($this->services['ps_checkout.configuration.options.resolver']) ? $this->services['ps_checkout.configuration.options.resolver'] : $this->getPsCheckout_Configuration_Options_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration.batch_processor' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor
     */
    protected function getPsCheckout_Configuration_BatchProcessorService()
    {
        return $this->services['ps_checkout.configuration.batch_processor'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration.options.resolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPsCheckout_Configuration_Options_ResolverService()
    {
        return $this->services['ps_checkout.configuration.options.resolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPsCheckout_Context_PrestashopService()
    {
        return $this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_checkout.context.shop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getPsCheckout_Context_ShopService()
    {
        return $this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext();
    }

    /**
     * Gets the public 'ps_checkout.context.state.manager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager
     */
    protected function getPsCheckout_Context_State_ManagerService()
    {
        return $this->services['ps_checkout.context.state.manager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager();
    }

    /**
     * Gets the public 'ps_checkout.env_loader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader
     */
    protected function getPsCheckout_EnvLoaderService()
    {
        return $this->services['ps_checkout.env_loader'] = new \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader();
    }

    /**
     * Gets the public 'ps_checkout.environment.payment' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\PaymentEnv
     */
    protected function getPsCheckout_Environment_PaymentService()
    {
        return $this->services['ps_checkout.environment.payment'] = new \PrestaShop\Module\PrestashopCheckout\Environment\PaymentEnv();
    }

    /**
     * Gets the public 'ps_checkout.event.dispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter
     */
    protected function getPsCheckout_Event_DispatcherService()
    {
        return $this->services['ps_checkout.event.dispatcher'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter(${($_ = isset($this->services['ps_checkout.event.dispatcher.symfony']) ? $this->services['ps_checkout.event.dispatcher.symfony'] : $this->getPsCheckout_Event_Dispatcher_SymfonyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.event.dispatcher.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory
     */
    protected function getPsCheckout_Event_Dispatcher_FactoryService()
    {
        return $this->services['ps_checkout.event.dispatcher.factory'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory(${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.event.subscriber.checkout' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber
     */
    protected function getPsCheckout_Event_Subscriber_CheckoutService()
    {
        return $this->services['ps_checkout.event.subscriber.checkout'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.event.subscriber.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber
     */
    protected function getPsCheckout_Event_Subscriber_OrderService()
    {
        return $this->services['ps_checkout.event.subscriber.order'] = new \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.event.subscriber.paypal.capture' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber
     */
    protected function getPsCheckout_Event_Subscriber_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.event.subscriber.paypal.capture'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.service.check_order_amount']) ? $this->services['ps_checkout.order.service.check_order_amount'] : ($this->services['ps_checkout.order.service.check_order_amount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.capture']) ? $this->services['ps_checkout.cache.paypal.capture'] : $this->getPsCheckout_Cache_Paypal_CaptureService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.state.service.order_state_mapper']) ? $this->services['ps_checkout.order.state.service.order_state_mapper'] : $this->getPsCheckout_Order_State_Service_OrderStateMapperService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.event.subscriber.paypal.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber
     */
    protected function getPsCheckout_Event_Subscriber_Paypal_OrderService()
    {
        return $this->services['ps_checkout.event.subscriber.paypal.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.checkout.checker']) ? $this->services['ps_checkout.checkout.checker'] : $this->getPsCheckout_Checkout_CheckerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status']) ? $this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status'] : ($this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.state.service.order_state_mapper']) ? $this->services['ps_checkout.order.state.service.order_state_mapper'] : $this->getPsCheckout_Order_State_Service_OrderStateMapperService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.express_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getPsCheckout_ExpressCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.express_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getPsCheckout_FundingSource_CollectionService()
    {
        return $this->services['ps_checkout.funding_source.collection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}->create());
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection.builder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getPsCheckout_FundingSource_Collection_BuilderService()
    {
        return $this->services['ps_checkout.funding_source.collection.builder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(${($_ = isset($this->services['ps_checkout.funding_source.configuration']) ? $this->services['ps_checkout.funding_source.configuration'] : $this->getPsCheckout_FundingSource_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.eligibility_constraint']) ? $this->services['ps_checkout.funding_source.eligibility_constraint'] : ($this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getPsCheckout_FundingSource_ConfigurationService()
    {
        return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration.repository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getPsCheckout_FundingSource_Configuration_RepositoryService()
    {
        return $this->services['ps_checkout.funding_source.configuration.repository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.eligibility_constraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getPsCheckout_FundingSource_EligibilityConstraintService()
    {
        return $this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.presenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getPsCheckout_FundingSource_PresenterService()
    {
        return $this->services['ps_checkout.funding_source.presenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['ps_checkout.funding_source.translation']) ? $this->services['ps_checkout.funding_source.translation'] : $this->getPsCheckout_FundingSource_TranslationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.country']) ? $this->services['ps_checkout.repository.country'] : ($this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getPsCheckout_FundingSource_ProviderService()
    {
        return $this->services['ps_checkout.funding_source.provider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.presenter']) ? $this->services['ps_checkout.funding_source.presenter'] : $this->getPsCheckout_FundingSource_PresenterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.translation' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getPsCheckout_FundingSource_TranslationService()
    {
        return $this->services['ps_checkout.funding_source.translation'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.http.client' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientInterface
     */
    protected function getPsCheckout_Http_ClientService()
    {
        return $this->services['ps_checkout.http.client'] = ${($_ = isset($this->services['ps_checkout.http.client.factory']) ? $this->services['ps_checkout.http.client.factory'] : ($this->services['ps_checkout.http.client.factory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory())) && false ?: '_'}->create(${($_ = isset($this->services['ps_checkout.http.client.configuration']) ? $this->services['ps_checkout.http.client.configuration'] : $this->getPsCheckout_Http_Client_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.http.client.checkout' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient
     */
    protected function getPsCheckout_Http_Client_CheckoutService()
    {
        return $this->services['ps_checkout.http.client.checkout'] = new \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient(${($_ = isset($this->services['ps_checkout.http.client']) ? $this->services['ps_checkout.http.client'] : $this->getPsCheckout_Http_ClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.http.client.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClientConfigurationBuilder
     */
    protected function getPsCheckout_Http_Client_ConfigurationService()
    {
        return $this->services['ps_checkout.http.client.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClientConfigurationBuilder(${($_ = isset($this->services['ps_checkout.environment.payment']) ? $this->services['ps_checkout.environment.payment'] : ($this->services['ps_checkout.environment.payment'] = new \PrestaShop\Module\PrestashopCheckout\Environment\PaymentEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.prestashop.router']) ? $this->services['ps_checkout.prestashop.router'] : ($this->services['ps_checkout.prestashop.router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.http.client.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory
     */
    protected function getPsCheckout_Http_Client_FactoryService()
    {
        return $this->services['ps_checkout.http.client.factory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory();
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ${($_ = isset($this->services['ps_checkout.logger.factory']) ? $this->services['ps_checkout.logger.factory'] : $this->getPsCheckout_Logger_FactoryService()) && false ?: '_'}->build(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getPsCheckout_Logger_ConfigurationService()
    {
        return $this->services['ps_checkout.logger.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.directory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getPsCheckout_Logger_DirectoryService()
    {
        return $this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html');
    }

    /**
     * Gets the public 'ps_checkout.logger.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getPsCheckout_Logger_FactoryService()
    {
        return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.logger.handler']) ? $this->services['ps_checkout.logger.handler'] : $this->getPsCheckout_Logger_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.finder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder
     */
    protected function getPsCheckout_Logger_File_FinderService()
    {
        return $this->services['ps_checkout.logger.file.finder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.reader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader
     */
    protected function getPsCheckout_Logger_File_ReaderService()
    {
        return $this->services['ps_checkout.logger.file.reader'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader();
    }

    /**
     * Gets the public 'ps_checkout.logger.filename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getPsCheckout_Logger_FilenameService()
    {
        return $this->services['ps_checkout.logger.filename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ${($_ = isset($this->services['ps_checkout.logger.handler.factory']) ? $this->services['ps_checkout.logger.handler.factory'] : $this->getPsCheckout_Logger_Handler_FactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.logger.handler.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getPsCheckout_Logger_Handler_FactoryService()
    {
        return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'}->getPath(), ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'}->get(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getMaxFiles(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getLevel());
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.module.version' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Version\Version
     */
    protected function getPsCheckout_Module_VersionService()
    {
        return $this->services['ps_checkout.module.version'] = \PrestaShop\Module\PrestashopCheckout\Version\Version::buildFromString(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version);
    }

    /**
     * Gets the public 'ps_checkout.order.service.check_order_amount' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount
     */
    protected function getPsCheckout_Order_Service_CheckOrderAmountService()
    {
        return $this->services['ps_checkout.order.service.check_order_amount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount();
    }

    /**
     * Gets the public 'ps_checkout.order.state.service.order_state_mapper' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper
     */
    protected function getPsCheckout_Order_State_Service_OrderStateMapperService()
    {
        return $this->services['ps_checkout.order.state.service.order_state_mapper'] = new \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.pay_later.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration
     */
    protected function getPsCheckout_PayLater_ConfigurationService()
    {
        return $this->services['ps_checkout.pay_later.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.builder.view_order_summary' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder
     */
    protected function getPsCheckout_Paypal_Builder_ViewOrderSummaryService()
    {
        return $this->services['ps_checkout.paypal.builder.view_order_summary'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.provider.order']) ? $this->services['ps_checkout.paypal.provider.order'] : $this->getPsCheckout_Paypal_Provider_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.prestashop.router']) ? $this->services['ps_checkout.prestashop.router'] : ($this->services['ps_checkout.prestashop.router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.order.translations']) ? $this->services['ps_checkout.paypal.order.translations'] : $this->getPsCheckout_Paypal_Order_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.capture.service.check_transition_paypal_capture_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService
     */
    protected function getPsCheckout_Paypal_Capture_Service_CheckTransitionPaypalCaptureStatusService()
    {
        return $this->services['ps_checkout.paypal.capture.service.check_transition_paypal_capture_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService();
    }

    /**
     * Gets the public 'ps_checkout.paypal.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPsCheckout_Paypal_ConfigurationService()
    {
        return $this->services['ps_checkout.paypal.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.paypal.code']) ? $this->services['ps_checkout.repository.paypal.code'] : ($this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.order.presenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder
     */
    protected function getPsCheckout_Paypal_Order_PresenterService()
    {
        return $this->services['ps_checkout.paypal.order.presenter'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.provider.order']) ? $this->services['ps_checkout.paypal.provider.order'] : $this->getPsCheckout_Paypal_Provider_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.prestashop.router']) ? $this->services['ps_checkout.prestashop.router'] : ($this->services['ps_checkout.prestashop.router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.order.translations']) ? $this->services['ps_checkout.paypal.order.translations'] : $this->getPsCheckout_Paypal_Order_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.order.service.check_transition_paypal_order_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService
     */
    protected function getPsCheckout_Paypal_Order_Service_CheckTransitionPaypalOrderStatusService()
    {
        return $this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService();
    }

    /**
     * Gets the public 'ps_checkout.paypal.order.service.paypal_order_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus
     */
    protected function getPsCheckout_Paypal_Order_Service_PaypalOrderStatusService()
    {
        return $this->services['ps_checkout.paypal.order.service.paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus();
    }

    /**
     * Gets the public 'ps_checkout.paypal.order.translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider
     */
    protected function getPsCheckout_Paypal_Order_TranslationsService()
    {
        return $this->services['ps_checkout.paypal.order.translations'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider(${($_ = isset($this->services['ps_checkout.translations.translations']) ? $this->services['ps_checkout.translations.translations'] : $this->getPsCheckout_Translations_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.translation']) ? $this->services['ps_checkout.funding_source.translation'] : $this->getPsCheckout_FundingSource_TranslationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.provider.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider
     */
    protected function getPsCheckout_Paypal_Provider_OrderService()
    {
        return $this->services['ps_checkout.paypal.provider.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.prestashop.router' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Routing\Router
     */
    protected function getPsCheckout_Prestashop_RouterService()
    {
        return $this->services['ps_checkout.prestashop.router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router();
    }

    /**
     * Gets the public 'ps_checkout.query.handler.checkout.update_payment_method_selected' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler
     */
    protected function getPsCheckout_Query_Handler_Checkout_UpdatePaymentMethodSelectedService()
    {
        return $this->services['ps_checkout.query.handler.checkout.update_payment_method_selected'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_approval_reversed' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForApprovalReversedService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_approval_reversed'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_payment_completed' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForPaymentCompletedService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_payment_completed'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_payment_denied' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForPaymentDeniedService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_payment_denied'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_payment_pending' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForPaymentPendingService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_payment_pending'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_payment_refunded' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForPaymentRefundedService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_payment_refunded'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.order.get_order_for_payment_reversed' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Order_GetOrderForPaymentReversedService()
    {
        return $this->services['ps_checkout.query.handler.order.get_order_for_payment_reversed'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.paypal.order.get_current_paypal_order_status' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Paypal_Order_GetCurrentPaypalOrderStatusService()
    {
        return $this->services['ps_checkout.query.handler.paypal.order.get_current_paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_cart_id' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForCartIdService()
    {
        return $this->services['ps_checkout.query.handler.paypal.order.get_paypal_order_for_cart_id'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->getPsCheckout_Repository_PscheckoutcartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_checkout_completed' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForCheckoutCompletedService()
    {
        return $this->services['ps_checkout.query.handler.paypal.order.get_paypal_order_for_checkout_completed'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_order_confirmation' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler
     */
    protected function getPsCheckout_Query_Handler_Paypal_Order_GetPaypalOrderForOrderConfirmationService()
    {
        return $this->services['ps_checkout.query.handler.paypal.order.get_paypal_order_for_order_confirmation'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.country' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getPsCheckout_Repository_CountryService()
    {
        return $this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.prestashop.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsCheckout_Repository_Prestashop_AccountService()
    {
        return $this->services['ps_checkout.repository.prestashop.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->getPsAccounts_FacadeService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.pscheckoutcart' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckout_Repository_PscheckoutcartService()
    {
        return $this->services['ps_checkout.repository.pscheckoutcart'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository(${($_ = isset($this->services['ps_checkout.cache.pscheckoutcart']) ? $this->services['ps_checkout.cache.pscheckoutcart'] : ($this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.sdk.paypal.configurationbuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder
     */
    protected function getPsCheckout_Sdk_Paypal_ConfigurationbuilderService()
    {
        return $this->services['ps_checkout.sdk.paypal.configurationbuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder(${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.pay_later.configuration']) ? $this->services['ps_checkout.pay_later.configuration'] : $this->getPsCheckout_PayLater_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.shop.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getPsCheckout_Shop_ProviderService()
    {
        return $this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'ps_checkout.step.live' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getPsCheckout_Step_LiveService()
    {
        return $this->services['ps_checkout.step.live'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.step.value' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner
     */
    protected function getPsCheckout_Step_ValueService()
    {
        return $this->services['ps_checkout.step.value'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getPsCheckout_Store_Module_ConfigurationService()
    {
        return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.pay_later.configuration']) ? $this->services['ps_checkout.pay_later.configuration'] : $this->getPsCheckout_PayLater_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.provider']) ? $this->services['ps_checkout.funding_source.provider'] : $this->getPsCheckout_FundingSource_ProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.context' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getPsCheckout_Store_Module_ContextService()
    {
        return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->module_key, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.step.live']) ? $this->services['ps_checkout.step.live'] : $this->getPsCheckout_Step_LiveService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.step.value']) ? $this->services['ps_checkout.step.value'] : $this->getPsCheckout_Step_ValueService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.translations.translations']) ? $this->services['ps_checkout.translations.translations'] : $this->getPsCheckout_Translations_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.builder.module_link']) ? $this->services['ps_checkout.builder.module_link'] : ($this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.paypal' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPsCheckout_Store_Module_PaypalService()
    {
        return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.store' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getPsCheckout_Store_StoreService()
    {
        return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ${($_ = isset($this->services['ps_checkout.store.module.context']) ? $this->services['ps_checkout.store.module.context'] : $this->getPsCheckout_Store_Module_ContextService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.store.module.paypal']) ? $this->services['ps_checkout.store.module.paypal'] : $this->getPsCheckout_Store_Module_PaypalService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ps_checkout.store.module.configuration']) ? $this->services['ps_checkout.store.module.configuration'] : $this->getPsCheckout_Store_Module_ConfigurationService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.tactician.bus.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory
     */
    protected function getPsCheckout_Tactician_Bus_FactoryService()
    {
        return $this->services['ps_checkout.tactician.bus.factory'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'}, ['PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\AddOrderPaymentCommand' => 'ps_checkout.command.handler.order.add_order_payment', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\CreateOrderCommand' => 'ps_checkout.command.handler.order.create_order', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\UpdateOrderStatusCommand' => 'ps_checkout.command.handler.order.update_order_status', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\Command\\UpdateOrderMatriceCommand' => 'ps_checkout.command.handler.order.matrice.update_order_matrice', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CreatePayPalOrderCommand' => 'ps_checkout.command.handler.paypal.order.create_paypal_order', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\UpdatePayPalOrderCommand' => 'ps_checkout.command.handler.paypal.order.update_paypal_order', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CapturePayPalOrderCommand' => 'ps_checkout.command.handler.paypal.order.capture_paypal_order', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\CancelCheckoutCommand' => 'ps_checkout.command.handler.checkout.cancel_checkout', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SaveCheckoutCommand' => 'ps_checkout.command.handler.checkout.save_checkout', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SavePayPalOrderStatusCommand' => 'ps_checkout.command.handler.checkout.save_paypal_order_status', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentCompletedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_completed', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentDeniedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_denied', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentPendingQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_pending', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentRefundedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_refunded', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentReversedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_reversed', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForApprovalReversedQuery' => 'ps_checkout.query.handler.order.get_order_for_approval_reversed', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCartIdQuery' => 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_cart_id', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetCurrentPayPalOrderStatusQuery' => 'ps_checkout.query.handler.paypal.order.get_current_paypal_order_status', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCheckoutCompletedQuery' => 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_checkout_completed', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForOrderConfirmationQuery' => 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_order_confirmation', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\UpdatePaymentMethodSelectedCommand' => 'ps_checkout.query.handler.checkout.update_payment_method_selected', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\Command\\RefundPayPalCaptureCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler']);
    }

    /**
     * Gets the public 'ps_checkout.translations.translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getPsCheckout_Translations_TranslationsService()
    {
        return $this->services['ps_checkout.translations.translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.validator.batch_configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator
     */
    protected function getPsCheckout_Validator_BatchConfigurationService()
    {
        return $this->services['ps_checkout.validator.batch_configuration'] = new \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator();
    }

    /**
     * Gets the public 'ps_checkout.validator.front_controller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator
     */
    protected function getPsCheckout_Validator_FrontControllerService()
    {
        return $this->services['ps_checkout.validator.front_controller'] = new \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator(${($_ = isset($this->services['ps_checkout.validator.merchant']) ? $this->services['ps_checkout.validator.merchant'] : $this->getPsCheckout_Validator_MerchantService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.pay_later.configuration']) ? $this->services['ps_checkout.pay_later.configuration'] : $this->getPsCheckout_PayLater_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.validator.merchant' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator
     */
    protected function getPsCheckout_Validator_MerchantService()
    {
        return $this->services['ps_checkout.validator.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.webhook.handler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler
     */
    protected function getPsCheckout_Webhook_HandlerService()
    {
        return $this->services['ps_checkout.webhook.handler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler(${($_ = isset($this->services['ps_checkout.webhook.service.secret_token']) ? $this->services['ps_checkout.webhook.service.secret_token'] : $this->getPsCheckout_Webhook_Service_SecretTokenService()) && false ?: '_'}, [0 => ${($_ = isset($this->services['ps_checkout.webhook.handler.event.configuration_updated']) ? $this->services['ps_checkout.webhook.handler.event.configuration_updated'] : $this->getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.webhook.handler.event.configuration_updated' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler
     */
    protected function getPsCheckout_Webhook_Handler_Event_ConfigurationUpdatedService()
    {
        return $this->services['ps_checkout.webhook.handler.event.configuration_updated'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.webhook.service.secret_token' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService
     */
    protected function getPsCheckout_Webhook_Service_SecretTokenService()
    {
        return $this->services['ps_checkout.webhook.service.secret_token'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber
     */
    protected function getPayPalRefundEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.service.check_order_amount']) ? $this->services['ps_checkout.order.service.check_order_amount'] : ($this->services['ps_checkout.order.service.check_order_amount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.capture']) ? $this->services['ps_checkout.cache.paypal.capture'] : $this->getPsCheckout_Cache_Paypal_CaptureService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.order.state.service.order_state_mapper']) ? $this->services['ps_checkout.order.state.service.order_state_mapper'] : $this->getPsCheckout_Order_State_Service_OrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.provider.order']) ? $this->services['ps_checkout.paypal.provider.order'] : $this->getPsCheckout_Paypal_Provider_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'ps_checkout.cache.array.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_Array_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.array.paypal.capture'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the private 'ps_checkout.cache.array.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_Array_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.array.paypal.order'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the private 'ps_checkout.cache.filesystem.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Filesystem_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.filesystem.paypal.capture'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-capture', 3600, ${($_ = isset($this->services['ps_checkout.cache.directory']) ? $this->services['ps_checkout.cache.directory'] : ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', false))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the private 'ps_checkout.cache.filesystem.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Filesystem_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.filesystem.paypal.order'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-orders', 3600, ${($_ = isset($this->services['ps_checkout.cache.directory']) ? $this->services['ps_checkout.cache.directory'] : ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', false))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the private 'ps_checkout.event.dispatcher.symfony' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcherInterface
     */
    protected function getPsCheckout_Event_Dispatcher_SymfonyService()
    {
        return $this->services['ps_checkout.event.dispatcher.symfony'] = ${($_ = isset($this->services['ps_checkout.event.dispatcher.factory']) ? $this->services['ps_checkout.event.dispatcher.factory'] : $this->getPsCheckout_Event_Dispatcher_FactoryService()) && false ?: '_'}->create([0 => ${($_ = isset($this->services['ps_checkout.event.subscriber.checkout']) ? $this->services['ps_checkout.event.subscriber.checkout'] : $this->getPsCheckout_Event_Subscriber_CheckoutService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.event.subscriber.order']) ? $this->services['ps_checkout.event.subscriber.order'] : $this->getPsCheckout_Event_Subscriber_OrderService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ps_checkout.event.subscriber.paypal.order']) ? $this->services['ps_checkout.event.subscriber.paypal.order'] : $this->getPsCheckout_Event_Subscriber_Paypal_OrderService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['ps_checkout.event.subscriber.paypal.capture']) ? $this->services['ps_checkout.event.subscriber.paypal.capture'] : $this->getPsCheckout_Event_Subscriber_Paypal_CaptureService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber'] : $this->getPayPalRefundEventSubscriberService()) && false ?: '_'}]);
    }

    /**
     * Gets the private 'ps_checkout.tactician.bus' shared service.
     *
     * @return \League\Tactician\CommandBus
     */
    protected function getPsCheckout_Tactician_BusService()
    {
        return $this->services['ps_checkout.tactician.bus'] = ${($_ = isset($this->services['ps_checkout.tactician.bus.factory']) ? $this->services['ps_checkout.tactician.bus.factory'] : $this->getPsCheckout_Tactician_Bus_FactoryService()) && false ?: '_'}->create();
    }
}
