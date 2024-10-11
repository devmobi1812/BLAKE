{include file='head.tpl'}  
{include file='header.tpl'} 

<div class="contenedor">
    <h1>Crear Disco</h1>
    <form action="guardar-disco" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">

        <label for="">Año</label>
        <input type="number" name="anio">

        <label for="">Imagen</label>
        <input type="text" name="imagen" >
        
        <a id="btnCancelar" class="btn btn-primary" href="discos">Cancelar</a>
        <button class="btn btn-primary" type="submit">Crear</button>
    </form>
</div>
    


{include file='footer.tpl'}