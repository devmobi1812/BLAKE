{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="contenedor">
        <h1>Editar Disco</h1>
        <form action="/blake/actualizar-disco" method="post">
            <input type="hidden" name="id" value="{$disco.id}">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{$disco.nombre}">

            <label for="">Año</label>
            <input type="number" name="anio" value="{$disco.anio}">

            <label for="">Imagen</label>
            <input type="text" name="imagen" value="{$disco.imagen}">
            
            <a id="btnCancelar" class="btn btn-primary" href="/blake/discos">Cancelar</a>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>
        
{include file='footer.tpl'}