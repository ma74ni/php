<?php
print('<h2 class="p1">GESTIÓN DE STATUS</h2>');

$status_controller = new StatusController();
$status = $status_controller->get();
if(empty($status)){//valido si está vacío
    print('
        <div class="container">
            <p class="item error">No hay datos</p>
        </div>
    ');
}else{
    $template_status = '
        <div class="item">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Status</th>
                    <th colspan="2">
                        <form method="post">
                            <input type="hidden" name="r" value="status-add">
                            <input type="submit" class="button  add" value="Agregar">
                        </form>
                    </th>
                </tr>
                ';
                for ($n=0; $n < count($status); $n++) { 
                    $template_status .= '
                        <tr>
                            <td>' . $status[$n]['status_id'] . '</td>
                            <td>' . $status[$n]['status'] . '</td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="r" value="status-edit">
                                    <input type="hidden" name="status_id" value="'. $status[$n]['status_id'] .'">
                                    <input type="submit" class="button  edit" value="Editar">
                                </form>
                            </td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="r" value="status-delete">
                                    <input type="hidden" name="status_id" value="'. $status[$n]['status_id'] .'">
                                    <input type="submit" class="button  delete" value="Eliminar">
                                </form>
                            </td>
                        </tr>  
                    ';
                }
    $template_status.='
            </table>
        </div>
    ';
    print($template_status);
}
