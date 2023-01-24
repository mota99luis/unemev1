<?php
            //Datos
            $nombre = $_POST["nombre"];
            
            //Conexión con el servidor
            $link = mysqli_connect("localhost","root","") or die ('No se puede conectar: ' . mysqli_error());
            echo ("Conexión exitosa");  
            //Conexción de la base de datos
            $db = mysqli_select_db($link, "prue") or die ("No se puede seleccionar la base de datos".mysqli_error());
            //Realizar Insert
            $query = "INSERT INTO cliente(nombre) VALUES ('$nombre')";
            $result = mysqli_query($link, $query) or die ("No se realizo la inserción" . mysqli_error());

           //header("location:Mostrar.php")
        ?>