{include file='head.tpl'}  
{include file='header.tpl'} 

    <div class="contenedor">
        <h1>Crear Canción</h1>
        <form action="cancion/guardar" method="post">
            <label for="">Nombre *</label>
            <input type="text" name="nombre">
            
            <label for="">Disco *</label>
            <select name="disco" id="">
                {foreach from=$opciones item=$opcion}
                <option value="{$opcion->id}">{$opcion->nombre}</option>  
                {/foreach}
            </select>

            <label for="">Duración *</label>
            <input type="text" name="duracion">

            <label for="">Link *</label>
            <input type="text" name="link" >
            
            {if !empty($error)}
                    <div class="area-error">{$error}</div>
            {/if}
            <a id="btnCancelar" class="btn btn-warning" href="canciones">Cancelar</a>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>

{include file='footer.tpl'}