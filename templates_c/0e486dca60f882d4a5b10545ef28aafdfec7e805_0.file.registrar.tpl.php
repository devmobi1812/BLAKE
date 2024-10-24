<?php
/* Smarty version 4.5.1, created on 2024-10-24 19:21:15
  from 'C:\xampp\htdocs\BLAKE\templates\auth\registrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_671a820b0448c7_08539697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e486dca60f882d4a5b10545ef28aafdfec7e805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BLAKE\\templates\\auth\\registrar.tpl',
      1 => 1729790468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/head.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_671a820b0448c7_08539697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<body>
    <main>
        <div id="login">
            <div class="login">
                <a href="inicio"><img src="/blake/resources/img/header/logo-blake-2024-70x.png" alt=""></a>
                <div class="contenedorFormulario">
                    <h1 class="titulo">Registrar</h2>
                        <form method="POST" action="registrar/validar">
                            <label for="">Usuario *</label>
                            <input type="text" name="nombre">
                            <label for="">Contraseña *</label>
                            <input type="password" name="password" id="">
                            <label for="">Repetir contraseña *</label>
                            <input type="password" name="verificar-password" id="">
                            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                                    <div class="area-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                            <?php }?>
                            <button id="btn-login" type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
