<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:32:58
  from 'C:\xampp\htdocs\BLAKE\templates\user\cancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716f2ba8df658_17398265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8772148da924975fb6288fef8faafc5e987775b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\user\\cancion.tpl',
      1 => 1729555695,
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
function content_6716f2ba8df658_17398265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:shared/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <div class="contenedor">
        <a class="btn-volver" href="" id="btn-volver">Volver</a>
        <h1>Detalles de canción</h1>
            <table class="table-dark">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Album</th>
                    <th scope="col">Año</th>
                    <th scope="col">Duracion</th>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                        <th scope="col">Acciones</th>
                    <?php }?>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cancion']->value['link'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><i class="fa-solid fa-play"></i></a> <!--BOTON DE REPRODUCIR-->
                        </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['artista_nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['disco_nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['disco_anio'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['duracion'];?>
</td>
                    <td>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                            <a class="btn btn-edit" href="cancion/editar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['id'];?>
"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                            <a class="btn btn-warning eliminar-cancion" href="cancion/eliminar/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['id'];?>
"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
                        <?php }?>
                    </td>
                    </tr>
                </tbody>
            </table>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
