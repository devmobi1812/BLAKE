<?php
/* Smarty version 4.5.1, created on 2024-10-24 20:45:18
  from 'C:\xampp\htdocs\BLAKE\templates\admin\crearCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a95be77bd04_12164102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75537f02f1ba254f5202871798885f3a2f690f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\admin\\crearCancion.tpl',
      1 => 1729790154,
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
function content_671a95be77bd04_12164102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <div class="contenedor">
        <h1>Crear canción</h1>
        <form action="cancion/guardar" method="post">
            <label for="">Nombre *</label>
            <input type="text" name="nombre">
            
            <label for="">Disco *</label>
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

            <label for="">Duración *</label>
            <input type="text" name="duracion">

            <label for="">Link *</label>
            <input type="text" name="link" >
            
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                    <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <a id="btnCancelar" class="btn btn-warning" href="canciones">Cancelar</a>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
