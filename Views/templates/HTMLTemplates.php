<?php

function HTMLstart(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- styles -->
    <link rel="stylesheet" href="../styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product App</title>
    </head>
    <body>
    <header class="header">
        <h1>Product App</h1>
        <nav class="navbar">
            <ul class="navbar__list">
                <li class="navbar__list__item"><a href="/inicio">Inicio</a></li>
                <li class="navbar__list__item"><a href="/productos">Productos</a></li>
                <li class="navbar__list__item"><a href="/perfil">Perfil</a></li>
            </ul>
        </nav>
    </header>
    <main class="main__container">
<?php
}

function HTMLcardList(){
    ?>
    <section class="cardlist__container">
            <div class="card__container">
                <h2 class="card__name">Motorola G40</h2>
                <div>
                    <label for="description">Descripción:</label>
                    <article class="card__description">Celular de alta gama con 100GB de RAM cámara de 6 cilindros con batería multi-válvulas.</article>
                </div>
                <div>
                    <label for="category">Categoría:</label>
                    <p class="card__category">Smartphones</p>
                </div>
                <div>
                    <label for="stock">Stock disponible:</label>
                    <i class='bx bx-check-circle'></i>
                    <!-- <i class='bx bx-x-circle'></i> -->
                </div>
                <p class="card__price">$350.000</p>
            </div>
        </section>
    <?php
}

function HTMLend(){
    ?>
    </main>
        <footer></footer>
    </body>
    </html>
<?php
}