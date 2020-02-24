<?php
print('
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework</title>
    <meta name="description" content="Framework para sitios sencillos">
    <link rel="stylesheet" href="./public/css/responsimple.min.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="shortcut icon" type="image/png" href="./public/img/favicon.ico">
</head>
<body>
    <header class="container  center  header">
        <div class="item  i-b  v-middle-ph12  lg2  lg-left">
            <h1 class="logo">Mexflix</h1>
        </div>
');
if($_SESSION['ok']){
    print('
    <nav class="item  i-b  v-middle  ph12  lg10  lg-right  menu">
    <ul class="container">
        <li class="nobullet  item  inline"><a href="./">Inicio</a></li>
        <li class="nobullet  item  inline"><a href="movieseries">MovieSeries</a></li>
        <li class="nobullet  item  inline"><a href="usuarios">Usuarios</a></li>
        <li class="nobullet  item  inline"><a href="status">Status</a></li>
        <li class="nobullet  item  inline"><a href="salir">Salir</a></li>
    </ul>
</nav>
    ');
}
print('
</header>
    <main class="container center main">
');