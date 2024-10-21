<?php
/* Smarty version 4.5.1, created on 2024-10-21 14:50:27
  from 'C:\xampp\htdocs\BLAKE\templates\disco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67164e1369fad1_87553749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76524d01c4f2c54d02060f9e700d02b51edc9c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\disco.tpl',
      1 => 1729515020,
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
function content_67164e1369fad1_87553749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    
    <div class="contenedor">
        <a class="btn-volver" href="" id="btn-volver">Volver</a>
        <h1>Canciones del Disco "<?php echo $_smarty_tpl->tpl_vars['discos']->value[0]->disco_nombre;?>
"</h1>
        
            <table class="table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
        
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disk');
$_smarty_tpl->tpl_vars['disk']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disk']->value) {
$_smarty_tpl->tpl_vars['disk']->do_else = false;
?>
                    <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['disk']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['disk']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['disk']->value->artista_nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['disk']->value->duracion;?>
</td>
                    <td>
                        <a class="btn btn-primary" href="cancion/ver/<?php echo $_smarty_tpl->tpl_vars['disk']->value->id;?>
"><i class="fa-solid fa-eye"></i></a> <!--BOTON DE VER-->
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                            <a class="btn btn-edit" href="cancion/editar/<?php echo $_smarty_tpl->tpl_vars['disk']->value->id;?>
"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                            <a class="btn btn-warning eliminar-cancion" href="cancion/eliminar/<?php echo $_smarty_tpl->tpl_vars['disk']->value->id;?>
"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
                        <?php }?>
                    </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
