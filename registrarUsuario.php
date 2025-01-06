<?php
include "conexion.php";

$name =$_POST['name'];
$lastName =$_POST['lastName'];
$email =$_POST['email'];
$error =[];

if(empty($name)){
    $error[]="nombre requerido";
}
if(empty($lastName)){
    $error[]="apellido requerido";
}
if(empty($email)){
    $error[]="email requerido";
}

if(empty($error)){
    
    $sql = $conn->query("INSERT INTO persona (nombre, apellido, email)
     VALUES ('$name', '$lastName','$email')");

    if($sql){
        header("Location: index.php");
        //echo "se inserto correctamente";
    }else{
        echo "no se inserto";
    }

}else{
    foreach($error as $e){
        echo $e ."<br>";
    }
}


?>