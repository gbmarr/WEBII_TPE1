{include '../layouts/head.tpl'}
{include '../layouts/header.tpl'}
<h1 class="my-4">Iniciar Sesión</h1>
<div class="col 6">
    <form action="{BASE_URL}/auth" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
{include '../layouts/footer.tpl'}