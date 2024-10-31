<?php
/* Smarty version 4.5.1, created on 2024-10-31 03:01:22
  from 'C:\xampp\htdocs\BLAKE\templates\canciones\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6722e4f25f9e37_31865363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '231d31e14a5f8eb13d653e95f7213894475b5497' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\canciones\\editar.tpl',
      1 => 1729790208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/head.tpl' => 1,
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_6722e4f25f9e37_31865363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="contenedor">
        <h1>Editar canción</h1>
        <form action="cancion/actualizar" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['id'];?>
">
            <label for="">Nombre *</label>
            <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombre'];?>
">
            
            <label for="">Disco Actual</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['disco_nombre'];?>
" disabled>

            <label for="">Elegir disco nuevo *</label>
            <select name="disco" id="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opciones']->value, 'opcion');
$_smarty_tpl->tpl_vars['opcion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opcion']->value) {
$_smarty_tpl->tpl_vars['opcion']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['opcion']->value->nombre == $_smarty_tpl->tpl_vars['cancion']->value['disco_nombre']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['opcion']->value->nombre;?>
</option>  
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

            <label for="">Duración *</label>
            <input type="text" name="duracion" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['duracion'];?>
">

            <label for="">Link *</label>
            <input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['link'];?>
">
            
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                    <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            
            <a id="btnCancelar" class="btn btn-warning" href="canciones">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
