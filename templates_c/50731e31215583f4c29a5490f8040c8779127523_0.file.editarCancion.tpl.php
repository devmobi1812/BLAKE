<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:35:36
  from 'C:\xampp\htdocs\BLAKE\templates\admin\editarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716f3587bf1e0_29270523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50731e31215583f4c29a5490f8040c8779127523' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\admin\\editarCancion.tpl',
      1 => 1729557232,
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
function content_6716f3587bf1e0_29270523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:shared/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender('file:shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
