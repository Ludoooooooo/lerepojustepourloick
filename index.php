<?php  require "connect.php";


echo `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de base de donnée</title>
</head>
<body>
    <h1>C'est quoi cette merde</h1>`;


    $sql = "SELECT nom FROM bouffe WHERE id = 1";

    $con.exec($sql);
    // echo var_dump($con);

    
echo `</body>
</html>`;

?>
