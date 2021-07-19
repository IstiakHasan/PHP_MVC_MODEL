<?php
include 'model/model.php';

 

class controller{
public $model;
function __construct(){
    $this->model= new model();
}
public function home(){
    $user=$this->model->getStudentData();
    include 'view/home.php';
}


}


?>