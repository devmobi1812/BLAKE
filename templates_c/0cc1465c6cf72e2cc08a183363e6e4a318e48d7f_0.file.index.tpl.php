<?php
/* Smarty version 4.5.1, created on 2024-09-20 00:44:40
  from 'C:\xampp\htdocs\TAS\SEMINARIO\SEPTIEMBRE\19\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66eca9583aa2b2_43439755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc1465c6cf72e2cc08a183363e6e4a318e48d7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS\\SEMINARIO\\SEPTIEMBRE\\19\\templates\\index.tpl',
      1 => 1726781604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66eca9583aa2b2_43439755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    
    <h1>Lista de tareas</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tarea</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
$_smarty_tpl->tpl_vars['tarea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->do_else = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value->titulo;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value->contenido;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value->prioridad;?>
</td>
                  <td>
                    <a href="eliminarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
" class="btn btn-danger">🗑</a>
                    <a href="editarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
" class="btn btn-warning">✏</a>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!--<?php echo '<?php'; ?>

                foreach($tareas as $tarea){
                  echo "<tr>
                  <th scope='row'>".htmlspecialchars($tarea->id)."</th>
                  <td>".htmlspecialchars($tarea->titulo)."</td>
                  <td>".htmlspecialchars($tarea->contenido)."</td>
                  <td><a href='eliminarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
'>delete</a><td>
                  </tr>";
                }
              <?php echo '?>'; ?>
-->
            </tbody>
          </table>
          <a href="crear-tarea" class="btn btn-primary">Crear tarea</a>
          
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
