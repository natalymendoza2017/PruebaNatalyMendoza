

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Authorization, Content-Type, Accept, Access-Control-Request-Method");     
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include "config.php";



//create
    $query = mysqli_query($mysqli,"INSERT INTO Departamento(nombre) VALUES ('1','200')");
    //read
    $query = mysqli_query($mysqli, "SELECT * FROM Departamento");
    //update
    $query = mysqli_query($mysqli, "UPDATE Departamento SET Nombre = $var2 WHERE idDepartamento=$id;");
    //delete
    $query = mysqli_query($mysqli, "DELETE FROM Departamento WHERE idDepartamento=$id;");
       
    $result = json_encode(array('sucess'=>true, 'result'=>$query));
            
    
    echo $result;

?>