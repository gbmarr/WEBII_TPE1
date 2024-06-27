{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
<div class="col-6">
    <h3 class="my-4">
        {if $category}
            Editar categoría
        {else}
            Crear categoría
        {/if}
    </h3>
    <form class="container" action="
        {if isset($category)}
            {BASE_URL}/category/update/{$category->idcat}
        {else}
            {BASE_URL}/category/store
        {/if}" method="POST">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value={$category->name|default:""}>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {if $category}
                    Actualizar
                {else}
                    Crear
                {/if}
            </button>
        </div>
    </form>
</div>
{include '../layouts/footer.tpl'}