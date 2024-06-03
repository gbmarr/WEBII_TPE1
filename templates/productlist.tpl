<section class="listproduct__container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    {* {if({$admin} == 1)} *}
                        <th>Acciones</th>
                    {* {/if} *}
                </tr>
            </thead>
            <tbody>
                {foreach from=$Productos item=$Producto}
                    <tr>
                        <td>{$Producto->idProducto}</td>
                        <td>{$Producto->nombre}</td>
                        <td>{$Producto->descripcion}</td>
                        <td>{$Producto->categoria}</td>
                        {if ($Producto->stock == 1)}
                            <td><i class="bx bx-check-circle"></i></td>
                        {else if}
                            <td><i class="bx bx-x-circle"></i></td>
                        {/if}
                        <td>{$Producto->precio}</td>
                        {* {if ($admin === 1)} *}
                            <td class="listproduct__btncontainer">
                            <a class="btn__edit" href="productform/{$Producto->idProducto}">Editar</a>
                            <a class="btn__delete" href="delete/{$Producto->idProducto}">Eliminar</a>
                            </td>
                        {* {/if} *}
                    </tr>
                    {/foreach}
            </tbody>
        </table>
        {* {if ($admin == 1)} *}
            <a class="btn__insert" href="{BASE_URL}/productform">Agregar producto</a>
        {* {/if} *}
</section>