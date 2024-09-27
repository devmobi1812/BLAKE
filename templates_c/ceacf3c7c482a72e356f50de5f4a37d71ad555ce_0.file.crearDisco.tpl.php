<?php
/* Smarty version 4.5.1, created on 2024-09-27 02:18:42
  from 'C:\xampp\htdocs\BLAKE\templates\crearDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66f5f9e25cd017_59110939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceacf3c7c482a72e356f50de5f4a37d71ad555ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\crearDisco.tpl',
      1 => 1727384658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66f5f9e25cd017_59110939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<div class="contenedor">
    <h1>Crear Disco</h1>
    <form action="/blake/guardar-disco" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">

        <label for="">Año</label>
        <input type="number" name="anio">

        <label for="">Imagen</label>
        <input type="text" name="imagen" >
        
        <a id="btnCancelar" class="btn btn-primary" href="/blake/discos">Cancelar</a>
        <button class="btn btn-primary" type="submit">Crear</button>
    </form>
</div>
    


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
