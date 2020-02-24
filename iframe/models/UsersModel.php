<?php
class UsersModel extends Model{
    public function set($user_data = array()){
        foreach ($user_data as $key => $value) {
            $$key = $value;
        }
        $this->query = "REPLACE INTO users (user, email, name, birthday, pass, role) VALUES ('$user', '$email', '$name', '$birthday', MD5('$pass', $role))";
        $this->set_query();
    }
    public function get($user = ''){
        if ($user != '') {
            $sql = "SELECT * FROM users WHERE user = '$user'";
        }else{
            $sql = 'SELECT * FROM users'; 
        }
        $this->query = $sql;

        $data = array();
        foreach ($this->rows as $key => $value){
            array_push($data, $value);
        }
        return $data;
    }
    public function del($user= ''){
        $this->query = "DELETE FROM user WHERE user = '$user'";
        $this->set_query();
    }
    public function validate_user($user, $pass){
        $this->query = "SELECT * FROM users WHERE user = '$user' AND password = MD5('$pass')";
        echo($this->query);
        $this->get_query();
        $data = array();
        foreach ($this->rows as $key => $value){
            array_push($data, $value);
        }
        return $data;
    }
}