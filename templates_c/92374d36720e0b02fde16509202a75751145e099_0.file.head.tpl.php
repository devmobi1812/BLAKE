<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:09:02
  from 'C:\xampp\htdocs\BLAKE\templates\shared\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716ed1e37e817_29596366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92374d36720e0b02fde16509202a75751145e099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\shared\\head.tpl',
      1 => 1729188788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6716ed1e37e817_29596366 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</title>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <link rel="stylesheet" href="/blake/resources/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="resources/js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/1037df0a4d.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head><?php }
}