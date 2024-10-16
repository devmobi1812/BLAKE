{include file='head.tpl'}  
{include file='header.tpl'} 

    <div class="contenedor">
        <h1>Detalles de Canción</h1>
            <table class="table-dark">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Album</th>
                    <th scope="col">Año</th>
                    <th scope="col">Duracion</th>
                    {if {$esAdmin}}
                        <th scope="col">Acciones</th>
                    {/if}
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="{{$cancion.link}}"><i class="fa-solid fa-play"></i></a> <!--BOTON DE REPRODUCIR-->
                        </td>
                    <td>{$cancion.nombre}</td>
                    <td>{$cancion.artista_nombre}</td>
                    <td>{$cancion.disco_nombre}</td>
                    <td>{$cancion.disco_anio}</td>
                    <td>{$cancion.duracion}</td>
                    <td>
                        {if {$esAdmin}}
                            <a class="btn btn-primary" href="editar-cancion/{$cancion.id}"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                            <a class="btn btn-primary eliminar-cancion" href="eliminar-cancion/{$cancion.id}"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
                        {/if}
                    </td>
                    </tr>
                </tbody>
            </table>
    </div>

{include file='footer.tpl'}