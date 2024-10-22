{include file='shared/head.tpl'}  
{include file='shared/header.tpl'}   
    
    <div class="contenedor">
      <div class="encabezado">
        <h1>Canciones</h1>
        {if {$esAdmin}}
        <a class="btn btn-primary" href="cancion/crear"><i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> Crear canción</a>
        {/if}
      </div>
          <table class="table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Artista</th>
                  <th scope="col">Disco</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
      
                {foreach from=$canciones item=$cancion}
                  <tr>
                    <td>{$cancion->id}</td>
                    <td>{$cancion->nombre}</td>
                    <td>{$cancion->artista_nombre}</td>
                    <td>{$cancion->disco_nombre}</td>
                    <td>
                      <a class="btn btn-primary" href="cancion/ver/{$cancion->id}"><i class="fa-solid fa-eye"></i></a> <!--BOTON DE VER-->
                      {if {$esAdmin}}
                        <a class="btn btn-edit" href="cancion/editar/{$cancion->id}"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                        <a class="btn btn-warning eliminar-cancion" href="cancion/eliminar/{$cancion->id}"><i class="fa-solid fa-trash"></i></a><!--BOTON DE ELIMINAR-->
                      {/if}
                      
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
    </div>
          
          
{include file='shared/footer.tpl'}