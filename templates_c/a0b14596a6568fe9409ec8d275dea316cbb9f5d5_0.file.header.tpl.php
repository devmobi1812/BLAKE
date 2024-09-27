<?php
/* Smarty version 4.5.1, created on 2024-09-27 01:31:12
  from 'C:\xampp\htdocs\BLAKE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66f5eec0685146_43425554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b14596a6568fe9409ec8d275dea316cbb9f5d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\header.tpl',
      1 => 1727393466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f5eec0685146_43425554 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <header>  
        <a id="logo" href="/blake/inicio">
            <img class="logo" src="/blake/resources/img/header/logo-blake-2024-70x.png" alt="">
        </a>

        <ul class="lista-navegacion menu-oculto">
            <li><a href="/blake/inicio">Inicio</a></li>
            <li><a href="/blake/discos">Discos</a></li>
            <li><a href="/blake/iniciar"><?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</a></li>
            <li><a href="/blake/registrar">Registrar</a></li>
            <li><a href="/blake/salir">Salir</a></li>
            
        </ul>

    </header>

        <nav id="navegacion-movil">
            <ul class="navegacion-movil ocultar">
                <li><a href="/blake/inicio">Inicio</a></li>
                <li><a href="/blake/discos">Discos</a></li>
                <li><a href="/blake/iniciar"><?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a></li>
                <li><a href="/blake/registrar">Registrar</a></li>
                <li><a href="/blake/salir">Salir</a></li>
            </ul>
        </nav>
        
    <main>

    <?php }
}
