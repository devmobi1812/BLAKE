{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="contenedor">
        <h1>Editar Disco</h1>
        <form action="disco/actualizar" method="post">
            <input type="hidden" name="id" value="{$disco.id}">
            <label for="">Nombre *</label>
            <input type="text" name="nombre" value="{$disco.nombre}">

            <label for="">Año *</label>
            <input type="number" name="anio" value="{$disco.anio}">

            <label for="">Imagen</label>
            {if {{$disco.imagen}!={"/blake/resources/img/discogenerico.png"}}}
                <input type="text" name="imagen" value="{$disco.imagen}">
            {else}
                <input type="text" name="imagen" value="">
            {/if}

            {if !empty($error)}
                    <div class="area-error">{$error}</div>
            {/if}
            <a id="btnCancelar" class="btn btn-warning" href="discos">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
        
{include file='footer.tpl'}