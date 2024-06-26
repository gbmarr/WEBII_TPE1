{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
    <div class="card">
        <div class="card-header">
            <h3 class="my-4">{$product->name}</h3>
        </div>
        <div class="card-body">
            <p>{$product->description}</p>
            <p>Precio: {$product->price}</p>
            <p>Categoría: {$product->idcategory}</p>
            {if $product->stock}
                <p>Stock: disponible</p>
                {else}
                    <p>Stock: no disponible</p>
                {/if}
                <a href="{BASE_URL}/home" class="btn btn-secondary">Volver</a>
        </div>
    </div>
{include '../layouts/footer.tpl'}