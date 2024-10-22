<?php
/* Smarty version 4.5.1, created on 2024-10-22 02:35:48
  from 'C:\xampp\htdocs\BLAKE\templates\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6716f364236814_31759460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43700581a457a553cddda7605947ea00cbfbc284' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\auth\\login.tpl',
      1 => 1729557207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_6716f364236814_31759460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:shared/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<body>
    <main>
        <div id="login">
            <div class="login">
                <a href="inicio"><img src="/blake/resources/img/header/logo-blake-2024-70x.png" alt=""></a>
                <div class="contenedorFormulario">
                    <h1>Iniciar sesión</h2>
                        <form method="POST" action="login/validar">
                            <label for="">Nombre de usuario</label>
                            <input type="text" name="nombre">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" id="">
                            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                                    <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                            <?php }?>
                            <button id="btn-login" type="submit" class="btn btn-primary">Acceder</button>
                        </form>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $_smarty_tpl->_subTemplateRender('file:shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}