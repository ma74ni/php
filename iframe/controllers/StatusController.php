<?php
class StatusController{
    private $model;

    public function __construct(){
        $this->model = new StatusModel();
    }
    public function set($status_data = array()){
        return $this->model->set($status_data);
    }
    public function get($s_id = ''){
        return $this->model->get($s_id);
    }
    public function del($status_id = ''){
        return $this->model->del($status_id);
    }
    
}