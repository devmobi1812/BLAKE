<?php
/* Smarty version 4.5.1, created on 2024-09-26 23:09:03
  from 'C:\xampp\htdocs\BLAKE\templates\crearCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66f5cd6f7c6f75_41279357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a97c7eabe94acded7ae356891b4d55780424af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\crearCancion.tpl',
      1 => 1727384626,
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
function content_66f5cd6f7c6f75_41279357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <div class="contenedor">
        <h1>Crear Canción</h1>
        <form action="/blake/guardar-cancion" method="post">
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            
            <label for="">Disco</label>
            <select name="disco" id="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opciones']->value, 'opcion');
$_smarty_tpl->tpl_vars['opcion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opcion']->value) {
$_smarty_tpl->tpl_vars['opcion']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['opcion']->value->nombre;?>
</option>  
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

            <label for="">Duración</label>
            <input type="text" name="duracion">

            <label for="">Link</label>
            <input type="text" name="link" >
            
            
            <a id="btnCancelar" class="btn btn-primary" href="/blake/canciones">Cancelar</a>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}