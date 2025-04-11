<?php
     //$conexion= new mysqli("fdb1030.awardspace.net","4581387_rosasbase","Ros@211284","4581387_rosasbase");
     $conexion = new mysqli("localhost", "root", "", "donato");
    if($conexion){
        echo "la gestion fue exitosa!!7w7";
    }

    else{
        echo  "Algo salio mal";
    }


?>