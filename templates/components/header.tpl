<body>
    <header>  
        
        <a id="logo" href="inicio">
            <img class="logo" src="/blake/resources/img/header/logo-blake-2024-70x.png" alt="">
        </a>

        <ul class="lista-navegacion menu-oculto">
            <li><a href="inicio" class="bold">Inicio</a></li>
            <li><a href="discos" class="bold">Discos</a></li>
            
            {if {$estaLogueado}}
                <li><a href="salir" class="bold">Salir</a></li>
            {/if}
            {if !{$estaLogueado}}
                <li><a href="login" class="bold">Iniciar sesión</a></li>
                <li><a href="registrar" class="bold">Registrar</a></li>
            {/if}
            
        </ul>

    </header>

        <nav id="navegacion-movil">
            <ul class="navegacion-movil ocultar">
                <li><a href="inicio" class="bold">Inicio</a></li>
                <li><a href="discos" class="bold">Discos</a></li>
                {if {$estaLogueado}}
                    <li><a href="salir" class="bold">Salir</a></li>
                {/if}
                {if !{$estaLogueado}}
                <li><a href="login" class="bold">Iniciar sesión</a></li>
                    <li><a href="registrar" class="bold">Registrar</a></li>
                {/if}
            </ul>
        </nav>
        
    <main>

    