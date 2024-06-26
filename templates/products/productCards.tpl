{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
<div class="container mt-5">
<div class="row">
{if ($products != null && !empty($products))}
    {foreach $products as $item}
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{$item->name}</h5>
                    <p class="card-text">Descripción: {$item->description}</p>
                    <p class="card-text">Precio: {$item->price}</p>
                        {if $item->stock}
                            <p><i class='bx bx-check'></i></p>
                        {else}
                            <p><i class='bx bx-x'></i></p>
                        {/if}
                    <a href="{BASE_URL}/detail/{$item->idproduct}" class="btn btn-primary">Detalle</a>
                </div>
            </div>
        </div>
    {/foreach}
{/if}
</div>

{include '../layouts/footer.tpl'}