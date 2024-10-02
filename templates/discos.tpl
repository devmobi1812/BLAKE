{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="contenedor">
    <div class="encabezado">
        <h1>Discos</h1>
        <a class="btn btn-primary" href="/blake/crear-disco">Crear Disco</a>
    </div>
    <div class="discos">
        {foreach from=$discos item=$disco}
        <div class="disco-botones">
            <a href="disco/{$disco->id}">
                <div class="disco">
                    <img src="{$disco->imagen}" alt="">
                    <h3>{$disco->nombre} - {$disco->anio}</h3>
                </div>
            </a>
            <div class="btnAcciones">
                <a class="btn btn-primary" href="editar-disco/{$disco->id}">✏</a>
                <a class="btn btn-primary" href="eliminar-disco/{$disco->id}">🗑</a>
            </div>
        </div>
        
        {/foreach}
    </div>
    
</div>

{include file='footer.tpl'}
