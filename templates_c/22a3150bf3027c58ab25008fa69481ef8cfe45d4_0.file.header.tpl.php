<?php
/* Smarty version 4.5.1, created on 2024-10-24 20:01:38
  from 'C:\xampp\htdocs\BLAKE\templates\components\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a8b82545da5_44547645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a3150bf3027c58ab25008fa69481ef8cfe45d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\components\\header.tpl',
      1 => 1729792609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671a8b82545da5_44547645 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <header>  
        
        <a id="logo" href="inicio">
            <img class="logo" src="/blake/resources/img/header/logo-blake-2024-70x.png" alt="">
        </a>

        <ul class="lista-navegacion menu-oculto">
            <li><a href="inicio" class="bold">Inicio</a></li>
            <li><a href="discos" class="bold">Discos</a></li>
            
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                <li><a href="salir" class="bold">Salir</a></li>
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable2 = ob_get_clean();
if (!$_prefixVariable2) {?>
                <li><a href="login" class="bold">Iniciar sesión</a></li>
                <li><a href="registrar" class="bold">Registrar</a></li>
            <?php }?>
            
        </ul>

    </header>

        <nav id="navegacion-movil">
            <ul class="navegacion-movil ocultar">
                <li><a href="inicio" class="bold">Inicio</a></li>
                <li><a href="discos" class="bold">Discos</a></li>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                    <li><a href="salir" class="bold">Salir</a></li>
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable4 = ob_get_clean();
if (!$_prefixVariable4) {?>
                <li><a href="login" class="bold">Iniciar sesión</a></li>
                    <li><a href="registrar" class="bold">Registrar</a></li>
                <?php }?>
            </ul>
        </nav>
        
    <main>

    <?php }
}
