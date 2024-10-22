<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:09:02
  from 'C:\xampp\htdocs\BLAKE\templates\shared\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716ed1e3f43e3_19909578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4ee8cdce366f93cb6152f7c8873dd67cde831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\shared\\header.tpl',
      1 => 1729188788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6716ed1e3f43e3_19909578 (Smarty_Internal_Template $_smarty_tpl) {
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
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>
                <li><a href="salir">Salir</a></li>
            <?php }?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable5 = ob_get_clean();
if (!$_prefixVariable5) {?>
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
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6) {?>
                    <li><a href="salir">Salir</a></li>
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['estaLogueado']->value;
$_prefixVariable7 = ob_get_clean();
if (!$_prefixVariable7) {?>
                <li><a href="login">Iniciar sesión</a></li>
                    <li><a href="registrar">Registrar</a></li>
                <?php }?>
            </ul>
        </nav>
        
    <main>

    <?php }
}
