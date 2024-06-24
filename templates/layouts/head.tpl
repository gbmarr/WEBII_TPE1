<!DOCTYPE html>
<html>
<head>
	<title>Stock Product</title>
	<meta charset="UTF-8">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="./styles/styles.css">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
    <h1>Product App</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{BASE_URL}home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}list">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}category">Categorias</a></li>
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{BASE_URL}logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-4">