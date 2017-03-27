<?php
    include_once "rectangulo.php";
    include_once "triangulo.php";

    $miRectangulo=new rectangulo(7,3);
    $miTriangulo=new triangulo(7,8);
    echo $miRectangulo->ToString();
    echo "<br>".$miTriangulo->Tostring();
?>