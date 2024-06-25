{include '../layouts/head.tpl'}
    <h1 class="my-4">{$product->name}</h1>
    <p>{$product->description}</p>
    <p>Precio: {$product->price}</p>
    <p>Categoría: {$product->idcategory}</p>
    {if $product->stock}
        <p>Stock: disponible</p>
    {else}
        <p>Stock: no disponible</p>
    {/if}
    <a href="{BASE_URL}/home" class="btn btn-secondary">Volver</a>
{include '../layouts/footer.tpl'}