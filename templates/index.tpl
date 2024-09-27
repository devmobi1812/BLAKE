{include file='header.tpl'}   
    
    <div class="contenedor">
      <h1>Canciones</h1>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Artista</th>
                  <th scope="col">Album</th>
                  <th scope="col">Duracion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
      
                {foreach from=$tareas item=tarea}
                  <tr>
                    <td>{$tarea->id}</td>
                    <td>{$tarea->titulo}</td>
                    <td>{$tarea->contenido}</td>
                    <td>{$tarea->prioridad}</td>
                    <td>
                      <a href="eliminarTarea/{$tarea->id}" class="btn btn-danger">🗑</a>
                      <a href="editarTarea/{$tarea->id}" class="btn btn-warning">✏</a>
                    </td>
                  </tr>
                {/foreach}
                <!--<?php
                  foreach($tareas as $tarea){
                    echo "<tr>
                    <th scope='row'>".htmlspecialchars($tarea->id)."</th>
                    <td>".htmlspecialchars($tarea->titulo)."</td>
                    <td>".htmlspecialchars($tarea->contenido)."</td>
                    <td><a href='eliminarTarea/{$tarea->id}'>delete</a><td>
                    </tr>";
                  }
                ?>-->
              </tbody>
            </table>
            <a href="crear-tarea" class="btn btn-primary">Crear tarea</a>
    </div>
          
{include file='footer.tpl'}