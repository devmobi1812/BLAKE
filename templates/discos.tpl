{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="contenedor">
    <div class="encabezado">
        <h1>Discos</h1>
        {if {$esAdmin}}
        <a class="btn btn-primary" href="disco/crear">Crear Disco       <i class="fa-solid fa-plus"></i></a>
        {/if}
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
            {if {$esAdmin}}
            <div class="btnAcciones">
                <a class="btn btn-primary" href="disco/editar/{$disco->id}"><i class="fa-solid fa-pen-to-square"></i></a><!--BOTON DE EDITAR-->
                <a class="btn btn-primary eliminar-disco" href="disco/eliminar/{$disco->id}"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
            </div>
            {/if}
        </div>
        
        {/foreach}
    </div>
    
</div>

{include file='footer.tpl'}
