<section class="article__container">
        <h2 class="article__name">{$Producto->nombre}</h2>
        <article class="article__description">{$Producto->descripcion}</article>
        <div class="article__category__container">
            <label for="category">Categoría:</label>
            <p class="article__category">{$Producto->categoria}</p>
        </div>
        <div class="article__stock__container">
            <label for='stock'>Stock:</label>
            {if ($Producto->stock == 1)}
                <i class='bx bx-check-circle'></i>
            {else if}
                <i class='bx bx-x-circle'></i>
            {/if}
        </div>
        <p class="article__price">{$Producto->precio}</p>
    </section>