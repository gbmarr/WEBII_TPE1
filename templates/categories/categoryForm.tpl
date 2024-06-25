{include '../layouts/head.tpl'}
<div class="col 6">
    <h1 class="my-4">
        {if $category}
            Editar categoría
        {else}
            Crear categoría
        {/if}
    </h1>
    <!-- falta agregar redirecciones -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value="{$category->name|default:''}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {if $category}
                    Actualizar
                {else}
                    Crear
                {/if}
            </button>
    </form>
</div>
{include '../layouts/footer.tpl'}