<?php
/* Smarty version 4.5.1, created on 2024-09-26 23:15:11
  from 'C:\xampp\htdocs\BLAKE\templates\cancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66f5cedf21a9d2_44900710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc7d1c8a48a1606479840737ce0b95ac100037e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\cancion.tpl',
      1 => 1727384640,
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
function content_66f5cedf21a9d2_44900710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <div class="contenedor">
        <h1>Detalles de Canción</h1>
            <table class="table-dark">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Album</th>
                    <th scope="col">Año</th>
                    <th scope="col">Duracion</th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cancion']->value['link'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"> ▶</a>
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
                    
                    </tr>
                </tbody>
            </table>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
