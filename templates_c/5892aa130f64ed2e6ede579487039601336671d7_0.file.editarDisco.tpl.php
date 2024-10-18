<?php
/* Smarty version 4.5.1, created on 2024-10-18 01:59:49
  from 'C:\xampp\htdocs\BLAKE\templates\editarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6711a4f555a588_30604749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5892aa130f64ed2e6ede579487039601336671d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\editarDisco.tpl',
      1 => 1729197519,
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
function content_6711a4f555a588_30604749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="contenedor">
        <h1>Editar Disco</h1>
        <form action="disco/actualizar" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">
            <label for="">Nombre *</label>
            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
">

            <label for="">Año *</label>
            <input type="number" name="anio" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
">

            <label for="">Imagen *</label>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['disco']->value['imagen'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo "/blake/resources/img/discogenerico.png";
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_prefixVariable1 != $_prefixVariable2;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                <input type="text" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['imagen'];?>
">
            <?php } else { ?>
                <input type="text" name="imagen" value="">
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                    <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <a id="btnCancelar" class="btn btn-primary" href="discos">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
        
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
