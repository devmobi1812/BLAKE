<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:32:53
  from 'C:\xampp\htdocs\BLAKE\templates\user\discos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716f2b5d51d41_29997109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf838ad1c8db025b6aca3611cd5fd5f35384ed44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\user\\discos.tpl',
      1 => 1729557099,
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
function content_6716f2b5d51d41_29997109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:shared/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="contenedor">
    <div class="encabezado">
        <h1>Discos</h1>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <a class="btn btn-primary" href="disco/crear"><i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i>   Crear Disco</i></a>
        <?php }?>
    </div>
    <div class="discos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
        <div class="disco-botones">
            <a href="disco/ver/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
">
                <div class="disco">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['disco']->value->imagen;?>
" alt="">
                    <h3><?php echo $_smarty_tpl->tpl_vars['disco']->value->nombre;?>
 - <?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
</h3>
                </div>
            </a>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
            <div class="btnAcciones">
                <a class="btn btn-edit" href="disco/editar/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
"><i class="fa-solid fa-pen-to-square"></i></a><!--BOTON DE EDITAR-->
                <a class="btn btn-warning eliminar-disco" href="disco/eliminar/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
            </div>
            <?php }?>
        </div>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
