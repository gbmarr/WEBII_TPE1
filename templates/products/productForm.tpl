{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
    <h3 class="my-4">
        {if $product}
            Editar producto
        {else}
            Crear producto
        {/if}
    </h3>
    <!-- falta action  dentro de la etiqueta form -->
    <form action="
        {if $product}
            {BASE_URL}/update/{$product->idproduct}
        {else}
            {BASE_URL}/store
        {/if}
    " method="POST" class="col-6">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" value="{$product->name|default:''}">
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" name="description" rows="5" >{$product->description|default:''}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" name="price" value="{$product->price|default:''}">
        </div>
        <div class="form-group">
            <label for="idcategory">Categoría:</label>
                <select name="idcategory" class="form-control">
                    {foreach from=$categories item=$category}
                        <option value={$category->idcat}
                            {if $product && $product->idcategory == $category->idcat}
                                selected
                            {/if}>
                        {$category->name}
                        </option>
                    {/foreach}
                </select>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
                <input type="checkbox" name="stock" value=
                {if ($product === null)}
                    false
                {else}
                    {$product->stock}
                {/if}
                {if $product && $product->stock}
                    checked
                {/if}
                />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
            {if $product}
                Actualizar
            {else}
                Crear
            {/if}
            </button>
        </div>
    </form>
{include '../layouts/footer.tpl'}