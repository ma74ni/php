<?php
class StatusModel extends Model{
    public function set($status_data = array()){
        foreach ($status_data as $key => $value) {
            $$key = $value;
        }
        $this->query = "REPLACE INTO status (status_id, status) VALUES ($status_id, '$status')";
        $this->set_query();
        echo $this->query;
    }
    public function get($s_id = ''){
        if ($s_id != '') {
            $sql = 'SELECT * FROM status WHERE status_id = '.$s_id;
        }else{
            $sql = 'SELECT * FROM status'; 
        }
        $this->query = $sql;

        $this->get_query();

        $data = array();
        foreach ($this->rows as $key => $value){
            array_push($data, $value);
        }
        //var_dump($data);
        return $data;
    }
    public function del($status_id = ''){
        $this->query = "DELETE FROM status WHERE status_id = $status_id";
        $this->set_query();
    }
}