<?php
/* Smarty version 4.5.1, created on 2024-09-13 00:48:48
  from 'C:\xampp\htdocs\TAS\SEMINARIO\SEPTIEMBRE\05\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66e36fd0224b15_40742541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a943a8500c7665fd5b1aa8847fe0c2e2830842' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS\\SEMINARIO\\SEPTIEMBRE\\05\\templates\\edit.tpl',
      1 => 1726181322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66e36fd0224b15_40742541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <h1>Editar tarea</h1>
        <form action="../actualizarTarea" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tarea:</label>
                <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['tarea']->value->titulo;?>
">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción:</label>
                <input type="text" name="contenido" class="form-control" id="exampleInputPassword1" value="<?php echo $_smarty_tpl->tpl_vars['tarea']->value->contenido;?>
">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault1" value="Baja">
                    <label class="form-check-label" for="flexRadioDefault1">Baja</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault2" value="Media">
                    <label class="form-check-label" for="flexRadioDefault2">Media</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault3" value="Alta">
                    <label class="form-check-label" for="flexRadioDefault3">Alta</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
