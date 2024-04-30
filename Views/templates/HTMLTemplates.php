<?php

// funcion que imprime doc html con inclusion de fonts, styles, icons y encabezado de la aplicacion
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
    <link rel="stylesheet" href="./styles/styles.css">
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

// funcion que toma cada objeto(registro) y lo imprime con sus datos en forma de card 
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

// funcion que muestra un registro con sus datos de manera detallada
function HTMLdetailProduct(){
    ?>
    <section class="article__container">
        <h2 class="article__name">Motorola G40</h2>
        <article class="article__description">Celular de alta gama con cámara de 500mpx y motor multi-válvulas.</article>
        <div class="article__category__container">
            <label for="category">Categoría:</label>
            <p class="article__category">Smartphones</p>
        </div>
        <div class="article__stock__container">
            <label for="stock">Stock:</label>
            <i class="bx bx-check-circle"></i>
        </div>
        <p class="article__price">$350.000</p>
    </section>
    <?php
}

// funcion que lista los registros y los presenta en forma de tabla con la implementacion de botones de edicion del registro, eliminacion y un boton externo para agregar un nuevo registro
function HTMLlistProduct(){
    ?>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Motorola G40</td>
                    <td>Celular de alta gama con cámara de 10000 mpx</td>
                    <td>Celulares</td>
                    <td><i class="bx bx-check-circle"></i></td>
                    <td>$350.000</td>
                    <td>
                        <a class="btn__edit" href="">Editar</a>
                        <a class="btn__delete" href="">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a class="btn__insert" href="">Agregar producto</a>
    </section>
    <?php
}

// funcion que muestra un formulario para agregar un nuevo producto o para editar y actulizar un producto ya existente
function HTMLformProduct(){
    // este formulario html va a ser utilizado tanto para agregar un nuevo producto
    // como tambien para editar un producto existente
    ?>
    <section class="product__container">
        <form class="form__product" action="" method="POST">
            <div>
                <label for="idProduct">Id:</label>
                <input type="number" name="idProduct" disabled/>
            </div>
            <div>
                <label for="name">Nombre:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="description">Descripción:</label>
                <input type="text" name="description"/>
            </div>
            <div>
                <label for="category">Categoría:</label>
                <select name="category">
                    <option value="Notebooks">Notebooks</option>
                </select>
            </div>
            <div>
                <label for="stock">Stock:</label>
                <div class="div__radiobtn">
                    <input type="radio" name="stock">Disponible
                    <input type="radio" name="stock">No disponible
                </div>
            </div>
            <div>
                <label for="price">Precio:</label>
                <input type="number" name="price">
            </div>
            <div>
                <button type="submit" class="btn__insert">Agregar producto</button>
            </div>
        </form>
    </section>
    <?php
}

// funcion que muestra un formulario de registro y login para el usuario
function HTMLformLogin(){
    ?>
    <section class="login__container">
        <h2>Login</h2>
        <form class="form__login" action="" method="POST">
            <div>
                <label for="email">Correo electrónico:</label>
                <input type="text" name="correo" placeholder="Ingresa tu correo" required autocomplete="false">
            </div>
            <div>
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" placeholder="Ingresa tu contraseña" required>
            </div>
            <div>
                <button class="btn__insert">Registrarse</button>
            </div>
        </form>
    </section>
    <?php
}

// funcion que imprime el cierre de un documento html y muestra el footer
function HTMLend(){
    ?>
    </main>
        <footer class="footer">
            <p class="footer__text">Design by Irigoyen/Marrero</p>
        </footer>
    </body>
    </html>
<?php
}