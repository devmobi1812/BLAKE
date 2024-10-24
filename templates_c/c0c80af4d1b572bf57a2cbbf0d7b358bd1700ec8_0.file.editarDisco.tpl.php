<?php
/* Smarty version 4.5.1, created on 2024-10-24 18:45:01
  from 'C:\xampp\htdocs\BLAKE\templates\admin\editarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a798de9cce1_21966518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c80af4d1b572bf57a2cbbf0d7b358bd1700ec8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\admin\\editarDisco.tpl',
      1 => 1729557239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/header.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_671a798de9cce1_21966518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:shared/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="contenedor">
        <h1>Editar disco</h1>
        <form action="disco/actualizar" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">
            <label for="">Nombre *</label>
            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
">

            <label for="">Año *</label>
            <input type="number" name="anio" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
">

            <label for="">Imagen</label>
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
            <a id="btnCancelar" class="btn btn-warning" href="discos">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
        
<?php $_smarty_tpl->_subTemplateRender('file:shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
