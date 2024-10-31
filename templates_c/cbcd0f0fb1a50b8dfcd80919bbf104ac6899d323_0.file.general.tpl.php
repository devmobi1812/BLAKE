<?php
/* Smarty version 4.5.1, created on 2024-10-31 02:58:21
  from 'C:\xampp\htdocs\BLAKE\templates\error\general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6722e43da57d30_59125638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbcd0f0fb1a50b8dfcd80919bbf104ac6899d323' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\error\\general.tpl',
      1 => 1729790256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/head.tpl' => 1,
  ),
),false)) {
function content_6722e43da57d30_59125638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
