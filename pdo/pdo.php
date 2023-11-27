<?php

$server="localhost";
$username="root";
$pwd="";
$db="pdo";
try{
    $n1=$_POST['n1'];
    $con=new PDO("mysql:host=$server; dbname=$db",$username,$pwd);
    $query="insert into in_pdo (name) value(?)";
    $stmt=$con->prepare($query);
    if($stmt->execute([$n1]))
    {
        $id=$con->lastInsertId();
        echo"the id is".$id."inserted successfully";
    }
    else
    {
        echo"error";
    }
    }


    catch(PDOException $e)
    {
        echo $e->getmessage();
    }


?>