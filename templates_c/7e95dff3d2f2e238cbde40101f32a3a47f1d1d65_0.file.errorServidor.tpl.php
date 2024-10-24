<?php
/* Smarty version 4.5.1, created on 2024-10-24 19:25:34
  from 'C:\xampp\htdocs\BLAKE\templates\error\errorServidor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a830e7a6bb0_04860527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e95dff3d2f2e238cbde40101f32a3a47f1d1d65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\error\\errorServidor.tpl',
      1 => 1729790256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/head.tpl' => 1,
  ),
),false)) {
function content_671a830e7a6bb0_04860527 (Smarty_Internal_Template $_smarty_tpl) {
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
