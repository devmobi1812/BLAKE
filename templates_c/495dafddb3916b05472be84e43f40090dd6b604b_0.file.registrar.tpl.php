<?php
/* Smarty version 4.5.1, created on 2024-09-27 00:25:27
  from 'C:\xampp\htdocs\BLAKE\templates\registrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66f5df575abc62_44865738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495dafddb3916b05472be84e43f40090dd6b604b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\registrar.tpl',
      1 => 1727389471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66f5df575abc62_44865738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<body>
    <main>
        <div id="login">
            <div class="login">
                <a href="/blake/inicio"><img src="/blake/resources/img/header/logo-blake-2024-70x.png" alt=""></a>
                <div class="contenedorFormulario">
                    <h1>Registrar</h2>
                        <form method="POST" action="/blake/registrado">
                            <label for="">Nombre de usuario</label>
                            <input type="text" name="nombre">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" id="">
                            <label for="">Repetir contraseña</label>
                            <input type="password" name="verificar-password" id="">
                            <button id="btn-login" type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}