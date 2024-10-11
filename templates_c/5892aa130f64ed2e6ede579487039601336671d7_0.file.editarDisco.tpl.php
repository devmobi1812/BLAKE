<?php
/* Smarty version 4.5.1, created on 2024-10-11 16:44:20
  from 'C:\xampp\htdocs\BLAKE\templates\editarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670939c4b07ca2_42518554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5892aa130f64ed2e6ede579487039601336671d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\editarDisco.tpl',
      1 => 1728657612,
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
function content_670939c4b07ca2_42518554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="contenedor">
        <h1>Editar Disco</h1>
        <form action="actualizar-disco" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
">

            <label for="">Año</label>
            <input type="number" name="anio" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
">

            <label for="">Imagen</label>
            <input type="text" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['imagen'];?>
">
            
            <a id="btnCancelar" class="btn btn-primary" href="discos">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
        
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
