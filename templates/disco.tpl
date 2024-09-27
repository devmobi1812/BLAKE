{include file='head.tpl'}  
{include file='header.tpl'}   
    
    <div class="contenedor">
        <h1>Canciones del Disco "{$discos[0]->disco_nombre}"</h1>
        
            <table class="table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
        
                {foreach from=$discos item=$disk}
                    <tr>
                    <td>{$disk->id}</td>
                    <td>{$disk->nombre}</td>
                    <td>{$disk->artista_nombre}</td>
                    <td>{$disk->duracion}</td>
                    <td>
                        <a class="btn btn-primary" href="/blake/cancion/{$disk->id}"> Ver 👁</a>
                    </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
    </div>
{include file='footer.tpl'}