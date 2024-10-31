<?php
/* Smarty version 4.5.1, created on 2024-10-31 02:58:15
  from 'C:\xampp\htdocs\BLAKE\templates\canciones\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6722e437520701_46774421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4a874288251a7536460d69b3be8faf4e75700b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\canciones\\canciones.tpl',
      1 => 1729790235,
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
function content_6722e437520701_46774421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    
    <div class="contenedor">
      <div class="encabezado">
        <h1>Canciones</h1>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <a class="btn btn-primary" href="cancion/crear"><i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> Crear canción</a>
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
                      <a class="btn btn-primary" href="cancion/ver/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
"><i class="fa-solid fa-eye"></i></a> <!--BOTON DE VER-->
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                        <a class="btn btn-edit" href="cancion/editar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                        <a class="btn btn-warning eliminar-cancion" href="cancion/eliminar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
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
          
          
<?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
