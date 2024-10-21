{include file='head.tpl'}  
<body>
    <main>
        <div id="login">
            <div class="login">
                <a href="inicio"><img src="/blake/resources/img/header/logo-blake-2024-70x.png" alt=""></a>
                <div class="contenedorFormulario">
                    <h1>Registrar</h2>
                        <form method="POST" action="registrar/validar">
                            <label for="">Nombre de usuario *</label>
                            <input type="text" name="nombre">
                            <label for="">Contraseña *</label>
                            <input type="password" name="password" id="">
                            <label for="">Repetir contraseña *</label>
                            <input type="password" name="verificar-password" id="">
                            {if !empty($error)}
                                    <div class="area-error">{$error}</div>
                            {/if}
                            <button id="btn-login" type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                </div>
            </div>
        </div>
    </main>
</body>

{include file='footer.tpl'}