{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
<!-- faltan redirecciones -->
    <h3 class="my-4">Categorías</h3>
        <div class="list-group">
        {foreach from=$categories item=$category}
            <div class="list-group-item">
                <h5>{$category->name}</h5>
                <a href="{BASE_URL}/category/edit/{$category->idcat}" class="btn btn-secondary">Editar</a>
                <a href="{BASE_URL}/category/delete/{$category->idcat}" class="btn btn-danger">Eliminar</a>
            </div>
        {/foreach}
        </div>
        <a href="{BASE_URL}/category/add" class="btn btn-primary mt-4">Agregar categoría</a>
{include '../layouts/footer.tpl'}