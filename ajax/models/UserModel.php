<?php
//require_once('Model.php');
class UserModel extends Model{

    public function create($user_data = array()){
        foreach($user_data as $key => $value){
            $$key = $value;
        }
        $this->query = "INSERT INTO usuarios (id_usuario, name_usuario, email_usuario, bday_usuario, id_estado) 
        VALUES (0, '$nameUser', '$emailUser', '$bdayUser', '$stateUser')";
        $this->set_query();
    }
    public function read($user_id = ''){
        if($user_id != ''){
            $sql = "SELECT U.id_usuario, U.name_usuario, U.email_usuario, U.bday_usuario, E.desc_estado 
                    FROM usuarios U 
                    INNER JOIN estados E ON U.id_estado = E.id_estado 
                    WHERE id_usuario = $user_id";
        }else{
            $sql = "SELECT U.id_usuario, U.name_usuario, U.email_usuario, U.bday_usuario, E.desc_estado 
                    FROM usuarios U 
                    INNER JOIN estados E ON U.id_estado = E.id_estado ";
        }
        $this->query = $sql;
        $this->get_query();

        $data = array();

        foreach($this->rows as $key => $value){
            array_push($data, $value);
        }
        return $data;
    }
}