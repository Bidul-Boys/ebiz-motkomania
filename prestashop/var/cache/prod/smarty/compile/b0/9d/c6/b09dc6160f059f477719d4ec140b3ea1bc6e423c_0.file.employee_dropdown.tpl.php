<?php
/* Smarty version 3.1.48, created on 2024-11-18 19:11:38
  from '/var/www/html/admin123/themes/new-theme/template/components/layout/employee_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673b835ae35d19_11532662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b09dc6160f059f477719d4ec140b3ea1bc6e423c' => 
    array (
      0 => '/var/www/html/admin123/themes/new-theme/template/components/layout/employee_dropdown.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673b835ae35d19_11532662 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['employee']->value))) {?>
<div class="dropdown employee-dropdown">
  <div class="rounded-circle person" data-toggle="dropdown">
    <i class="material-icons">account_circle</i>
  </div>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="employee-wrapper-avatar">

      <span class="employee-avatar"><img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /></span>
      <span class="employee_profile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome back %name%','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['employee']->value->firstname),'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
      <a class="dropdown-item employee-link profile-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees',true,array(),array('id_employee'=>intval($_smarty_tpl->tpl_vars['employee']->value->id),'updateemployee'=>1)),'html','UTF-8' ));?>
">
      <i class="material-icons">edit</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your profile','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
    </a>
    </div>

    <p class="divider"></p>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/resources/documentations?utm_source=back-office&utm_medium=profile&utm_campaign=resources-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank" rel="noreferrer"><i class="material-icons">book</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resources','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=profile&utm_campaign=training-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank" rel="noreferrer"><i class="material-icons">school</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Training','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=profile&utm_campaign=expert-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank" rel="noreferrer"><i class="material-icons">person_pin_circle</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find an Expert','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://addons.prestashop.com?utm_source=back-office&utm_medium=profile&utm_campaign=addons-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank" rel="noreferrer"><i class="material-icons">extension</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop Marketplace','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.prestashop.com/en/contact?utm_source=back-office&utm_medium=profile&utm_campaign=help-center-en&utm_content=download17','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
" target="_blank" rel="noreferrer"><i class="material-icons">help</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help Center','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</a>
    <p class="divider"></p>
    <a class="dropdown-item employee-link text-center" id="header_logout" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_link']->value,'html','UTF-8' ));?>
">
      <i class="material-icons d-lg-none">power_settings_new</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
}
