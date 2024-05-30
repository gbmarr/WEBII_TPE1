<?php
require_once './BASE_URL.php';

// funcion que imprime doc html con inclusion de fonts, styles, icons y encabezado de la aplicacion
function HTMLstart($id = null){
    $HTMLstart = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <!-- fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- styles -->
    <link rel='stylesheet' href='".BASE_URL."/view/styles/styles.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Product App</title>
    </head>
    <body>
    <header class='header'>
        <h1>Product App</h1>
        <nav class='navbar'>
            <ul class='navbar__list'>
                <li class='navbar__list__item'><a href='".BASE_URL."'>Inicio</a></li>
                <li class='navbar__list__item'><a href='".BASE_URL."list'>Productos</a></li>";
                if($id){
                    $HTMLstart .= "<li class='navbar__list__item'><a href='".BASE_URL."profile/$id'>Perfil</a></li>";
                }else{
                    $HTMLstart .= "<li class='navbar__list__item'><a href='".BASE_URL."login'>Login</a></li>";
                }
            $HTMLstart .= "
            </ul>
        </nav>
    </header>
    <main class='main__container'>
    ";
    echo $HTMLstart;
}

// funcion que toma cada objeto(registro) y lo imprime con sus datos en forma de card 
function HTMLcardList($Productos){
    HTMLstart();
    $card = "<section class='cardlist__container'>";
    ?>
    <?php foreach($Productos as $Producto){
        $card .= "
            <div class='card__container'>
                <h2 class='card__name'>$Producto->nombre</h2>
                <div>
                    <label for='description'>Descripción:</label>
                    <article class='card__description'>$Producto->descripcion</article>
                </div>
                <div>
                    <label for='category'>Categoría:</label>
                    <p class='card__category'>$Producto->categoria</p>
                </div>
                <div>
                    <label for='stock'>Stock disponible:</label>";
                    $card .= $Producto->stock == 1 ? "<i class='bx bx-check-circle'></i>" : "<i class='bx bx-x-circle'></i>";
                $card .= "
                </div>
                <div class='card__btndetail__container'>
                <a class='btn__detail' href='detail/$Producto->idProducto'>Ver Detalle</a>
                <p class='card__price'>$$Producto->precio</p>
                </div>
            </div>";
        }
        $card .= "</section>";
        echo $card;
        ?>
    <?php
    HTMLend();
}

// funcion que muestra un registro con sus datos de manera detallada
function HTMLdetailProduct($Producto){
    HTMLstart();
    $detalle = "
    <section class='article__container'>
        <h2 class='article__name'>$Producto->nombre</h2>
        <article class='article__description'>$Producto->descripcion</article>
        <div class='article__category__container'>
            <label for='category'>Categoría:</label>
            <p class='article__category'>$Producto->categoria</p>
        </div>
        <div class='article__stock__container'>
            <label for='stock'>Stock:</label>";
            $detalle .= $Producto->stock == 1 ? "<i class='bx bx-check-circle'></i>" : "<i class='bx bx-x-circle'></i>";
        $detalle .= "
        </div>
        <p class='article__price'>$$Producto->precio</p>
    </section>";
    echo $detalle;
    HTMLend();
}

// funcion que lista los registros y los presenta en forma de tabla con la implementacion de botones de edicion del registro, eliminacion y un boton externo para agregar un nuevo registro
function HTMLlistProduct($Productos, $admin = null, $id = null){
    HTMLstart($id);
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
                    <?php
                    if($admin == 1){ ?>
                        <th>Acciones</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Productos as $Producto){
                    $fila = "
                    <tr>
                        <td>$Producto->idProducto</td>
                        <td>$Producto->nombre</td>
                        <td>$Producto->descripcion</td>
                        <td>$Producto->categoria</td>";
                        $fila .= $Producto->stock == 1 ? "<td><i class='bx bx-check-circle'></i></td>" : "<td><i class='bx bx-x-circle'></i></td>";
                        $fila .= "
                        <td>$$Producto->precio</td>";
                        if($admin == 1){
                            $fila .= "
                            <td class='listproduct__btncontainer'>
                            <a class='btn__edit' href='productform/$Producto->idProducto'>Editar</a>
                            <a class='btn__delete' href='delete/$Producto->idProducto'>Eliminar</a>
                            </td>";
                        }
                        $fila .= "
                    </tr>";
                    echo $fila;
                    }?>
            </tbody>
        </table>
        <?php
        if($admin == 1){
        echo $boton = "
        <a class='btn__insert' href='".BASE_URL."productform'>Agregar producto</a>";
        }
        ?>
    </section>
    <?php
    HTMLend();
}

// funcion que muestra un formulario para agregar un nuevo producto o para editar y actulizar un producto ya existente
function HTMLformProduct($Producto = null, $Categorias){
    // este formulario html va a ser utilizado tanto para agregar un nuevo producto
    // como tambien para editar un producto existente
    HTMLstart();
    $formulario = "
    <section class='product__container'>";
        $formulario .= "
        <form class='form__product' action='".BASE_URL.($Producto ? 'edit':'add'). "' method='POST'>
                <div>
                    <label for='idProduct'>Id:</label>
                    <input type='number' name='idProduct' value='" . ($Producto ? $Producto->idProducto : '') . "'  readonly/>
                    </div>
                <div>";

                $formulario .= "<label for='name'>Nombre:</label> 
                    <input type='text' name='name' value='" . ($Producto ? $Producto->nombre : '') . "'>
                </div>
                <div>
                    <label for='description'>Descripción:</label>
                    <input type='text' name='description' value='" . ($Producto ? $Producto->descripcion : '') . "' />
                </div>
                <div>
                <label for='category'>Categoría:</label>
                <select name='category'>";
                foreach($Categorias as $categoria){
                    $formulario .= 
                    "<option value='$categoria->idCat' ". ($Producto ? ($categoria->descripcion == $Producto->categoria ? 'selected' : '') : '') ." >$categoria->descripcion</option>";
                }
                $formulario .= "
                </select>
                </div>
                <div>
                <label for='stock'>Stock:</label>
                <div class='div__radiobtn'>
                    <div>
                        <input type='radio' value='1' name='stock' ". ($Producto ? ($Producto->stock == 1 ? 'checked' : '') : '') ." ><p>Disponible</p>
                    </div>
                    <div>
                        <input type='radio' value='0' name='stock' ". ($Producto ? ($Producto->stock == 0 ? 'checked' : '') : '') ." ><p>No disponible</p>
                    </div>
                </div>
                </div>
                <div>
                <label for='price'>Precio:</label>
                <input type='number' name='price' value='" . ($Producto ? $Producto->precio : '') . "'>
                </div>
                <div>
                <button type='submit' class='btn__insert'>Guardar cambios</button>
                </div>
            </form>
        </section>";
    echo $formulario;
    HTMLend();
}

// funcion que muestra un formulario de registro y login para el usuario
function HTMLformLogin(){
    HTMLstart();
    $loginform = "
    <section class='login__container'>
        <h2>Login</h2>
        <form class='form__login' action='".BASE_URL."enter' method='POST'>
            <div>
                <label for='email'>Correo electrónico:</label>
                <input type='text' name='email' placeholder='Ingresa tu correo' required autocomplete='false'>
            </div>
            <div>
                <label for='password'>Contraseña:</label>
                <input type='password' name='password' placeholder='Ingresa tu contraseña' required>
            </div>
            <div>
                <button type='submit' class='btn__insert'>Ingresar</button>
            </div>
        </form>
    </section>";
    echo $loginform;
    HTMLend();
}

function HTMLprofile($User = null){
    HTMLstart();
    $profile = "
    <section class='login__container'>
        <h2>Login</h2>
        <form class='form__login' method='POST'>
            <div>
                <label for='email'>Correo electrónico:</label>
                <label>$User->email</label>
            </div>
            <div>
                <label for='name'>Nombre:</label>
                <label>$User->nombre</label>
            </div>
            <div>
                <label for='apellido'>Apellido:</label>
                <label>$User->apellido</label>
            </div>
            <div>
                <label for='admin'>Admin</label>
                <input type='checkbox' ". ($User ? ($User->admin == 1 ? 'checked' : '') : '') ." disabled>
            </div>
        </form>
    </section>";
    echo $profile;
    HTMLend();
}

// pagina que muestra error en la carga de datos para cualquiera de las acciones del usuario que no resulten correctamente
function HTMLerrorPage(){
    ?>
    <section class="error__container">
        <h1>La carga de datos no ha sido correcta.</h1>
    </section>
    <?php
}

// funcion que imprime el cierre de un documento html y muestra el footer
function HTMLend(){
    $HTMLend = "
    </main>
        <footer class='footer'>
            <p class='footer__text'>Design by Irigoyen/Marrero</p>
        </footer>
    </body>
    </html>";
    echo $HTMLend;
}