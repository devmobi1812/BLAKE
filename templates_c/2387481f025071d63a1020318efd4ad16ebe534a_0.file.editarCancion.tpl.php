<?php
/* Smarty version 4.5.1, created on 2024-10-21 11:33:21
  from 'C:\xampp\htdocs\BLAKE\templates\editarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67161fe198ef64_25206910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2387481f025071d63a1020318efd4ad16ebe534a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\editarCancion.tpl',
      1 => 1729503198,
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
function content_67161fe198ef64_25206910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="contenedor">
        <h1>Editar Canción</h1>
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
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
