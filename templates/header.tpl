<body>
    <header>  
        <a id="logo" href="/blake/inicio">
            <img class="logo" src="/blake/resources/img/header/logo-blake-2024-70x.png" alt="">
        </a>

        <ul class="lista-navegacion menu-oculto">
            <li><a href="/blake/inicio">Inicio</a></li>
            <li><a href="/blake/discos">Discos</a></li>
            
            {if {$estaLogueado}}
                <li><a href="/blake/salir">Salir</a></li>
            {/if}
            {if !{$estaLogueado}}
                <li><a href="/blake/iniciar">Iniciar sesión</a></li>
                <li><a href="/blake/registrar">Registrar</a></li>
            {/if}
            
        </ul>

    </header>

        <nav id="navegacion-movil">
            <ul class="navegacion-movil ocultar">
                <li><a href="/blake/inicio">Inicio</a></li>
                <li><a href="/blake/discos">Discos</a></li>
                {if {$estaLogueado}}
                    <li><a href="/blake/salir">Salir</a></li>
                {/if}
                {if !{$estaLogueado}}
                <li><a href="/blake/iniciar">Iniciar sesión</a></li>
                    <li><a href="/blake/registrar">Registrar</a></li>
                {/if}
            </ul>
        </nav>
        
    <main>

    