<?php
print('
<form class="item" method="post">
    <div class="p_25">
        <input type="text" name="user" placeholder="usuario" required>
    </div>
    <div class="p_25">
        <input type="password" name="pass" placeholder="contraseña" required>
    </div>
    <div class="p_25">
        <input type="submit" class="button" value="Enviar">
    </div>
</form>
');
if(isset($_GET['error'])){
    /*<div class="container">
        <p class="item  error">
            <?php print $_GET['error'];  ?>
        </p>
    </div>*/
    $template = '
    <div class="container">
        <p class="item  error">%s</p>
    </div>
    ';
    printf($template, $_GET['error']);
}