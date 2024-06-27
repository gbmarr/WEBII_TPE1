{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
<div class="container mt-5">
    <h3 class="my-4">Lista de productos</h3>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
            {if $admin}
                <th>Acciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$products item=$item}
            <tr>
                <td>{$item->name}</td>
                <td>{$item->description}</td>
                <td>{$item->catdescription}</td>
                <td>{$item->price}</td>
                <td>
                    {if $item->stock}
                        <i class="bx bx-check"></i>
                    {else}
                        <i class="bx bx-x"></i>
                    {/if}
                </td>
                {if $admin}
                <td>
                    <a href="{BASE_URL}/edit/{$item->idproduct}" class="btn btn-primary">Editar</a>
                    <a href="{BASE_URL}/delete/{$item->idproduct}" class="btn btn-danger">Eliminar</a>
                </td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
    </table>
    {if $admin}
        <a href="{BASE_URL}/add" class="btn btn-primary">Agregar</a>
    {/if}
</div>
{include '../layouts/footer.tpl'}