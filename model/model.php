<?php


include 'DB.php';



class model{

public function getStudentData(){
    $sql='SELECT*FROM tbl_student';
    $stmt=DB::prepare($sql);
    $stmt->execute();
   return $stmt->fetchAll();
}


}







?>