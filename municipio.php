<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Authorization, Content-Type, Accept, Access-Control-Request-Method");     
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include "config.php";

    
    
    echo $result;
     //create
    $query = mysqli_query($mysqli,"INSERT INTO  municipio(nombre) VALUES ('1','200')");
    //read
    $query = mysqli_query($mysqli, "SELECT * FROM informacionlugar");
    //update
    $query = mysqli_query($mysqli, "UPDATE informacionlugar SET Nombre = $var2 WHERE idlugar=$id;");
    //delete
    $query = mysqli_query($mysqli, "DELETE FROM informacionlugar WHERE idLugar=$id;");
    $result = json_encode(array('sucess'=>true, 'result'=>$query));

    echo $result;
    //create
  

?>  