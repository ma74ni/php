<?php
$template = '
<article class ="item">
    <h1 class="p1">Hola %s, bienvenid@ a Mexflix</h1>
    <h3 class="p1">Tus  películas y series favoritas</h3>
    <p class="p1 f1_25">Tu nombre es <b>%s</b></p>
    <p class="p1 f1_25">Tu correo es <b>%s</b></p>
    <p class="p1 f1_25">Tu cumpleaños es <b>%s</b></p>
    <p class="p1 f1_25">Tu perfil de usuario tiene nivel de <b>%s</b></p>
</article>
';

printf(
    $template, 
    $_SESSION['user'],
    $_SESSION['name'],
    $_SESSION['email'],
    $_SESSION['birthday'],
    $_SESSION['role'],
);
?>