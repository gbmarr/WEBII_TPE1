{include '../layouts/head.tpl'}
<!-- faltan redirecciones -->
    <h1 class="my-4">Categorías</h1>
        <div class="list-group">
        {foreach from=$categories item=$category}
            <div class="list-group-item">
                <h5>{$category->name}</h5>
                <a href="" class="btn btn-secondary">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </div>
        {/foreach}
        </div>
        <a href="" class="btn btn-primary mt-4">Agregar categoría</a>
{include '../layouts/footer.tpl'}