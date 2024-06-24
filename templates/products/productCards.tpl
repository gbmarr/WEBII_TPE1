{include '../layouts/head.tpl'}

<div class="container mt-5">
<div class="row">
{if ($products != null && !empty($products))}
    {foreach $products as $item}
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="" class="card-img-top" alt="{$item->description}">
                <div class="card-body">
                    <h5 class="card-title">{$item->nombre}</h5>
                    <p class="card-text">Descripción: {$item->descripcion}</p>
                    <p class="card-text">Precio: {$item->precio}</p>
                    <a href="{$item->idProducto}" class="btn btn-primary">Detalle</a>
                </div>
            </div>
        </div>
    {/foreach}
{/if}
</div>

{include '../layouts/footer.tpl'}