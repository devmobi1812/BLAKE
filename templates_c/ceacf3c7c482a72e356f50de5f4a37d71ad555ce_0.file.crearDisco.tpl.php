<?php
/* Smarty version 4.5.1, created on 2024-10-22 01:38:56
  from 'C:\xampp\htdocs\BLAKE\templates\crearDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716e61021e237_81128957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceacf3c7c482a72e356f50de5f4a37d71ad555ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\crearDisco.tpl',
      1 => 1729553469,
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
function content_6716e61021e237_81128957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<div class="contenedor">
    <h1>Crear disco</h1>
    <form action="disco/guardar" method="post">
        <label for="">Nombre *</label>
        <input type="text" name="nombre">

        <label for="">Año *</label>
        <input type="number" name="anio">

        <label for="">Imagen</label>
        <input type="text" name="imagen" >

        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>
        
        <a id="btnCancelar" class="btn btn-warning" href="discos">Cancelar</a>
        <button class="btn btn-primary" type="submit">Crear</button>
    </form>
</div>
    


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
