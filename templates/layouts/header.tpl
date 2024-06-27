<header>
        <h1>Product App</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}/home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}/list">Productos</a></li>
                {if $user}
                    <li class="nav-item"><a class="nav-link" href="{BASE_URL}/category">Categorias</a></li>
                    <li class="nav-item"><a class="btn btn-danger" href="{BASE_URL}/logout">Logout</a></li>
                {else}
                    <li class="nav-item"><a class="btn btn-primary" href="{BASE_URL}/login">Login</a></li>
                {/if}
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-4">