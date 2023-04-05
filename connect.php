<?php


$dbhost = "212.107.17.52";
$dbname = "bouffe";
$dbuser = "u418723612_admin";
$dbpwd = "Lu123456";

try{
    $db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpwd);
}catch(Exception $e){
    die("Erreur:".$e->getMessage());
}

// $con = new PDO('212.107.17.52','u418723612_admin','', 'bouffe', 3306);

// $con = new PDO("mysql:host=212.107.17.52;dbname=bouffe;charset=utf8","u418723612_admin","Lu123456");

// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $con->query("SELECT nom FROM bouffe");

// echo $con;
// echo var_dump($con);
?>