<?php
/* Smarty version 4.5.1, created on 2024-10-03 22:37:42
  from 'C:\xampp\htdocs\BLAKE\templates\discos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66ff009676b7d2_32703350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a793abb70d124c046cbd39a6710bb884cab7b68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\discos.tpl',
      1 => 1727987860,
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
function content_66ff009676b7d2_32703350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="contenedor">
    <div class="encabezado">
        <h1>Discos</h1>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <a class="btn btn-primary" href="/blake/crear-disco">Crear Disco</a>
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
            <a href="disco/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
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
                <a class="btn btn-primary" href="editar-disco/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
">✏</a>
                <a class="btn btn-primary" href="eliminar-disco/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
">🗑</a>
            </div>
            <?php }?>
        </div>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
