<?php
class SessionController{
    private $session;
    //valida si los usuarios existen en la bdd
    public function __construct(){
        $this->session = new UsersModel();
    }

    public function login($user, $pass){
        return $this->session->validate_user($user, $pass);
    }
    public function logout(){
        session_start();
        session_destroy();
        header('Location: ./');
    }
}