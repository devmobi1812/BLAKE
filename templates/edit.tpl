{include file='head.tpl'}  
{include file='header.tpl'}  
    <h1>Editar tarea</h1>
        <form action="../actualizarTarea" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tarea:</label>
                <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{$tarea->titulo}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción:</label>
                <input type="text" name="contenido" class="form-control" id="exampleInputPassword1" value="{$tarea->contenido}">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault1" value="Baja">
                    <label class="form-check-label" for="flexRadioDefault1">Baja</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault2" value="Media">
                    <label class="form-check-label" for="flexRadioDefault2">Media</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prioridad" id="flexRadioDefault3" value="Alta">
                    <label class="form-check-label" for="flexRadioDefault3">Alta</label>
                </div>
                <input type="hidden" name="id" value="{$tarea->id}">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

{include file='footer.tpl'}