<section class="product__container">
<form class="form__product" action="{BASE_URL}/{if ($Producto)} edit {else if} add {/if}" method="POST">
                <div>
                    <label for="idProduct">Id:</label>
                    <input type="number" name="idProduct" readonly value={if ($Producto)} {$Producto->idProducto} {else if} {/if} />
                </div>
                <div>
                <label for="name">Nombre:</label> 
                    <input type="text" name="name" value={if ($Producto)} {$Producto->nombre} {else if} {/if} >
                </div>
                <div>
                    <label for="description">Descripción:</label>
                    <input type="text" name="description" value={if ($Producto)} {$Producto->descripcion} {else if} {/if} >
                </div>
                <div>
                <label for="category">Categoría:</label>
                <select name="category">
                {foreach from=$Categorias item=$categoria}
                    <option value={$categoria->idCat}
                {if ($Producto)} {if ({$categoria->descripcion} == {$Producto->categoria} )} selected {else if} {/if} {else if} {/if}>{$categoria->descripcion}</option>
                {/foreach}
                </select>
                </div>
                <div>
                <label for="stock">Stock:</label>
                <div class="div__radiobtn">
                    <div>
            <input type="radio" value="1" name="stock" {if ($Producto)} ({if {$Producto->stock} == 1} checked {else if} {/if}) {else if} {/if} ><p>Disponible</p>
                    </div>
                    <div>
                        <input type="radio" value="0" name="stock" {if ($Producto)} ({if {$Producto->stock} == 0} checked {else if} {/if}) {else if} {/if} ><p>No disponible</p>
                    </div>
                </div>
                </div>
                <div>
                <label for="price">Precio:</label>
                <input type="number" name="price" value="{if ($Producto)} {$Producto->precio} {else if} {/if}">
                </div>
                <div>
                <button type="submit" class="btn__insert">Guardar cambios</button>
                </div>
            </form>
        </section>