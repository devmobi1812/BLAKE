{include file='head.tpl'}  
{include file='header.tpl'}   
    
    <div class="contenedor">
      <div class="encabezado">
        <h1>Canciones</h1>
        {if {$esAdmin}}
        <a class="btn btn-primary" href="crear-cancion">Crear Canción</a>
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
                      <a class="btn btn-primary" href="cancion/{$cancion->id}">👁</a>
                      {if {$esAdmin}}
                        <a class="btn btn-primary" href="editar-cancion/{$cancion->id}">✏</a>
                        <a class="btn btn-primary eliminar-cancion" href="eliminar-cancion/{$cancion->id}">🗑</a>
                      {/if}
                      
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
    </div>
          
          
{include file='footer.tpl'}