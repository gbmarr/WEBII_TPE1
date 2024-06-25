{include '../layouts/head.tpl'}
<div class="container mt-5">
    <h1>Lista de productos</h1>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$products item=$item}
            <tr>
                <td>{$item->name}</td>
                <td>{$item->description}</td>
                <td>{$item->idcategory}</td>
                <td>{$item->price}</td>
                <td>
                    {if $item->stock}
                        <i class="bx bx-check"></i>
                    {else}
                        <i class="bx bx-x"></i>
                    {/if}
                </td>
                <td>
                    <a href="{BASE_URL}/edit/{$item->idproduct}" class="btn btn-primary">Editar</a>
                    <a href="{BASE_URL}/delete/{$item->idproduct}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
    </table>
</div>
{include '../layouts/footer.tpl'}