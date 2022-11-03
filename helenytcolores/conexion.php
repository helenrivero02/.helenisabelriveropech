<?php

$link = 'mysql:host=localhost;dbname=valeria_colores';
$usuario='root';


try{

    $pdo = new PDO($link,$usuario,);

    echo 'Conectado <br>';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}