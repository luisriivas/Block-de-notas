<?php

    if(isset($_POST["tfolder"]) &&  isset($_POST["texto"])){

        $titulo = $_POST["tfolder"];
        $texto = $_POST["texto"];

        //creamos directorio

        if(file_exists("./".$titulo)){
            echo("EL NOMBRE DE ESTA CARPETA YA EXISTE");
        }else{
            mkdir("./".$titulo, 0777);

            //indicamos la ruta del archivo txt

            $ruta = "./".$titulo."/Archivo.txt";

            //Creamos el fichero index.php e introducimos el contenido del TextArea 
            $a = file_put_contents($ruta, $texto);

            if(!$a){echo "ERROR al insertar el fichero";}   

            echo "<a href=".$ruta.">Click para ver el archivo TXT dentro del directorio: ".$titulo."</a>";
            echo "<br/>";
            echo "<br/>";       

        }

    }

?>