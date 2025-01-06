<?php
include "conexion.php";

$name =$_POST['name'];
$lastName =$_POST['lastName'];
$email =$_POST['email'];
$error =[];
$id =$_POST['idUser'];

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
    
    $sql = $conn->query("UPDATE persona set nombre = '$name' ,apellido = '$lastName', email ='$email'
    WHERE id = '$id'");

    if($sql){
        echo "se inserto correctamente";
        header("Location: index.php");
        
    }else{
        echo "no se inserto";
    }

}else{
    foreach($error as $e){
        echo $e ."<br>";
    }
}


?>