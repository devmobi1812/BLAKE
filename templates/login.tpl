{include file='head.tpl'}  
<body>
    <main>
        <div id="login">
            <div class="login">
                <a href="/blake/inicio"><img src="/blake/resources/img/header/logo-blake-2024-70x.png" alt=""></a>
                <div class="contenedorFormulario">
                    <h1>Iniciar sesión</h2>
                        <form method="POST" action="/blake/validar">
                            <label for="">Nombre de usuario</label>
                            <input type="text" name="nombre">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" id="">
                            <button id="btn-login" type="submit" class="btn btn-primary">Acceder</button>
                        </form>
                </div>
            </div>
        </div>
    </main>
</body>

{include file='footer.tpl'}