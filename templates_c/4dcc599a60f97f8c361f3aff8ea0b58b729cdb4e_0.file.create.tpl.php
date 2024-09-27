<?php
/* Smarty version 4.5.1, created on 2024-09-13 00:04:09
  from 'C:\xampp\htdocs\TAS\SEMINARIO\SEPTIEMBRE\05\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66e3655965fbd9_36745908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dcc599a60f97f8c361f3aff8ea0b58b729cdb4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS\\SEMINARIO\\SEPTIEMBRE\\05\\templates\\create.tpl',
      1 => 1726178647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66e3655965fbd9_36745908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Agregar tarea</h1>
        <form action="agregarTarea" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tarea:</label>
                <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción:</label>
                <input type="text" name="contenido" class="form-control" id="exampleInputPassword1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault1" value="Baja">
                    <label class="form-check-label" for="flexRadioDefault1">Baja</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault2" value="Media">
                    <label class="form-check-label" for="flexRadioDefault2">Media</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault3" value="Alta" checked>
                    <label class="form-check-label" for="flexRadioDefault3">Alta</label>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
