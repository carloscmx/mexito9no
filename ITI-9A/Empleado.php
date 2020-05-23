<?php
class Empleado{
    private $first_name;
    private $last_name;
    private $age;
    public function __Construct($first_name,$last_name,$age){
        $this->frist_name=$first_name;
        $this->last_name=$last_name;
        $this->age=$age;
    }
    public function  getFristName(){
        return $this->frist_name;
    }
    public function  getLastName(){
        return $this->last_name;
    }
    public function  getAge(){
        return $this->age;
    }
}

?>