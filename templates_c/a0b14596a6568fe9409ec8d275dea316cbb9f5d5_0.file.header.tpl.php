<?php
/* Smarty version 4.5.1, created on 2024-10-17 15:00:27
  from 'C:\xampp\htdocs\BLAKE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67110a6b34fea3_53817465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b14596a6568fe9409ec8d275dea316cbb9f5d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\header.tpl',
      1 => 1729170016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67110a6b34fea3_53817465 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <header>  
        
        <a id="logo" href="inicio">
            <img class="logo" src="/blake/resources/img/header/logo-blake-2024-70x.png" alt="">
        </a>

        <ul class="lista-navegacion menu-oculto">
            <li><a href="inicio">Inicio</a></li>
            <li><a href="discos">Discos</a></li>
            
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                <li><a href="salir">Salir</a></li>
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable2 = ob_get_clean();
if (!$_prefixVariable2) {?>
                <li><a href="login">Iniciar sesión</a></li>
                <li><a href="registrar">Registrar</a></li>
            <?php }?>
            
        </ul>

    </header>

        <nav id="navegacion-movil">
            <ul class="navegacion-movil ocultar">
                <li><a href="inicio">Inicio</a></li>
                <li><a href="discos">Discos</a></li>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                    <li><a href="salir">Salir</a></li>
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable4 = ob_get_clean();
if (!$_prefixVariable4) {?>
                <li><a href="login">Iniciar sesión</a></li>
                    <li><a href="registrar">Registrar</a></li>
                <?php }?>
            </ul>
        </nav>
        
    <main>

    <?php }
}
