<?php
//require_once('../controllers/UserController.php');

$user_controller = new UserController();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Probando AJAX y PHP</title>
</head>
<body>
    <div>
        <h1 style="text-align:center;">Gestión de Usuarios</h1>
        </div>
        <div>
            <h2 style="text-align:center;">Agregar Usuarios</h2>
            <div style="margin: 0 auto; width: 250px; padding:12px;">
                <form action="" method="post">
                    <div>
                        <label>Nombre</label>
                        <input type="text" name="nameUser">
                    </div>
                    <div>
                        <label>Correo</label>
                        <input type="email" name="emailUser">
                    </div>
                    <div>
                        <div>
                            <label>Fecha de Nacimiento</label>
                            <input type="date" name="bdayUser">
                            <p id="content_years">Tienes: <span id="show_years"></span> años</p>
                        </div>
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="stateUser">
                            <option value="-1">-- SELECCIONE --</option>
                            <option value="1">ACTIVO</option>
                        </select>
                    </div>
                    <div style="text-align: center; padding: 20px 0;">
                        <input type="submit" value="Guardar" id="btn_guardar">
                    </div>
                </form>
            </div>
        </div>
        <div>
        <hr>
            <h2 style="text-align:center;">Todos los Usuarios</h2>
            <div>
                <table border="1" cellspacing="1" cellpadding="5" align="center" id="table:data">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha Nacimiento</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $users = $user_controller->read();
                            for($i=0; $i < count($users); $i++){
                        ?>
                            <tr>
                                <td><?php echo $users[$i]['id_usuario']; ?></td>
                                <td><?php echo $users[$i]['name_usuario']; ?></td>
                                <td><?php echo $users[$i]['email_usuario']; ?></td>
                                <td><?php echo $users[$i]['bday_usuario']; ?></td>
                                <td><?php echo $users[$i]['desc_estado']; ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="submit" value="Editar">
                                    </form>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>