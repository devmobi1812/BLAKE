<?php
/* Smarty version 4.5.1, created on 2024-10-17 13:08:23
  from 'C:\xampp\htdocs\BLAKE\templates\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6710f0276ecb98_08655105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db7cda038154191a74695d2da632d27fb0575c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\canciones.tpl',
      1 => 1729163300,
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
function content_6710f0276ecb98_08655105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    
    <div class="contenedor">
      <div class="encabezado">
        <h1>Canciones</h1>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <a class="btn btn-primary" href="cancion/crear">Crear Canción</a>
        <?php }?>
      </div>
          <table class="table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Artista</th>
                  <th scope="col">Disco</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
      
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->artista_nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->disco_nombre;?>
</td>
                    <td>
                      <a class="btn btn-primary" href="cancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
"><i class="fa-solid fa-eye"></i></a> <!--BOTON DE VER-->
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                        <a class="btn btn-primary" href="cancion/editar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                        <a class="btn btn-primary eliminar-cancion" href="cancion/eliminar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
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
