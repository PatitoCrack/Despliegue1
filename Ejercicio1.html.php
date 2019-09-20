<?php
class libro{
    public $autor = 'pepe';
    public $anyo_de_publicacion = '1322';
    public $editorial = 'yo quese bro';
    public $titulo = 'owo';
    public $num_pags = '3';

    function __construct(){

    }

    function hola(){
        echo $this->autor . '<br>';
        echo $this->anyo_de_publicacion . '<br>';
        echo $this->editorial . '<br>';
        echo $this->titulo . '<br>';
        echo $this->num_pags . '<br>';
    }

    


}

$a = new libro();
$a ->hola();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php

   ?> 
</body>
</html>