<?php
/* Smarty version 4.5.1, created on 2024-10-21 12:11:18
  from 'C:\xampp\htdocs\BLAKE\templates\errorServidor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671628c6b48092_06019170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17346165c2676b622ad8e3572036d877d222ea66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\errorServidor.tpl',
      1 => 1729505475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_671628c6b48092_06019170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="error">
        <h1 >Error <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</h1>
        <p ><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</p>
        <a href="inicio" class="btnError">Ir a inicio</a>
    </div>
    
</body> <?php }
}
