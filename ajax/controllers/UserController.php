<?php
//require_once('../models/UserModel.php');
class UserController{
    private $model;

    public function __construct(){
        $this->model = new UserModel();
    }
    public function read($user_id = ''){
        return $this->model->read($user_id);
    }
    public function create(){
        $user_data = array(
            'nameUser' => $_POST['nameUser'],
            'emailUser' => $_POST['emailUser'],
            'bdayUser' => $_POST['bdayUser'],
            'stateUser' => $_POST['stateUser']
        );
        return $this->model->create($user_data);
    }
}