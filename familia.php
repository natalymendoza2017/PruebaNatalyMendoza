<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Authorization, Content-Type, Accept, Access-Control-Request-Method");     
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include "config.php";


//create
   $query = mysqli_query($mysqli,"INSERT INTO Familia(nombre) VALUES ('1','200')");
   //read
   $query = mysqli_query($mysqli, "SELECT * FROM Familia ");
   //update
   $query = mysqli_query($mysqli, "UPDATE Familia SET Nombre = $var2 WHERE idFamilia=$id;");
   //delete
   $query = mysqli_query($mysqli, "DELETE FROM  Familia  WHERE idFamilia=$id;");

   $result = json_encode(array('sucess'=>true, 'result'=>$query));
            
    
    echo $result;

   ?>