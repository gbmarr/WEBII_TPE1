<section class="cardlist__container">
    {foreach from=$Productos item=$Producto}
            <div class="card__container">
                <h2 class="card__name">{$Producto->nombre}</h2>
                <div>
                    <label for="description">Descripción:</label>
                    <article class="card__description">{$Producto->descripcion}</article>
                </div>
                <div>
                    <label for="category">Categoría:</label>
                    <p class="card__category">{$Producto->categoria}</p>
                </div>
                <div>
                    <label for="stock">Stock disponible:</label>
                    {if ($Producto->stock == 1)}
                        <i class="bx bx-check-circle"></i>
                    {else if}
                        <i class="bx bx-x-circle"></i>
                    {/if}
                </div>
                <div class="card__btndetail__container">
                <a class="btn__detail" href="detail/{$Producto->idProducto}">Ver Detalle</a>
                <p class="card__price">{$Producto->precio}</p>
                </div>
            </div>
        {/foreach}
</section>