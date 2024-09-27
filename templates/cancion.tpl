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
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="{{$cancion.link}}"> ▶</a>
                        </td>
                    <td>{$cancion.nombre}</td>
                    <td>{$cancion.artista_nombre}</td>
                    <td>{$cancion.disco_nombre}</td>
                    <td>{$cancion.disco_anio}</td>
                    <td>{$cancion.duracion}</td>
                    
                    </tr>
                </tbody>
            </table>
    </div>

{include file='footer.tpl'}