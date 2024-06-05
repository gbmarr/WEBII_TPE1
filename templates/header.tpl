<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="{BASE_URL}/view/styles/styles.css">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Product App</title>
    </head>
    <body>
    <header class="header">
        <h1>Product App</h1>
        <nav class="navbar">
            <ul class="navbar__list">
                <li class="navbar__list__item"><a href="{BASE_URL}">Inicio</a></li>
                <li class="navbar__list__item"><a href="{BASE_URL}/list">Productos</a></li>
                {* {if ($id != null)} *}
                    <li class="navbar__list__item"><a href="{BASE_URL}/profile">Perfil</a></li>
                {* {else} *}
                    <li class="navbar__list__item"><a href="{BASE_URL}/login">Login</a></li>
                {* {/if} *}
            </ul>
        </nav>
    </header>
    <main class="main__container">

    {* colocar luego en url base/profile/{$id} *}