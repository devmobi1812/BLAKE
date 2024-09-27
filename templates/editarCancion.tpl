{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="contenedor">
        <h1>Editar Canción</h1>
        <form action="/blake/actualizar-cancion" method="post">
            <input type="hidden" name="id" value="{$cancion.id}">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{$cancion.nombre}">
            
            <label for="">Disco Actual</label>
            <input type="text" value="{$cancion.disco_nombre}" disabled>

            <label for="">Elegir disco nuevo</label>
            <select name="disco" id="">
                {foreach from=$opciones item=$opcion}
                <option value="{$opcion->id}">{$opcion->nombre}</option>  
                {/foreach}
            </select>

            <label for="">Duración</label>
            <input type="text" name="duracion" value="{$cancion.duracion}">

            <label for="">Link</label>
            <input type="text" name="link" value="{$cancion.link}">
            
            
            <a id="btnCancelar" class="btn btn-primary" href="/blake/canciones">Cancelar</a>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>
{include file='footer.tpl'}