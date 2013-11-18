<?php

 #Conectar con la base de datos
$conexion=mysql_connect("localhost","root") or die ("Fallo la conexión con la base de datos");
mysql_select_db("store_music");

// Ruta donde se guardarán las imágenes
    
 
		   
		   $descripcion=$_POST['descripcion'];
		   $marca=$_POST['marca'];
		   $precio=$_POST['precio'];
		   $existencia=$_POST['existencia'];
		   $categoria=$_POST['categoria'];
		   $rutaserver='imagenes';
           $rutatemporal=$_FILES['imagen']['tmp_name'];
           $nombreimg=$_FILES['imagen']['name'];
           $rutadestino=$rutaserver.'/'.$nombreimg;
           move_uploaded_file($rutatemporal,$rutadestino);
		   
		   
		   
		   $consulta="INSERT  INTO instrumentos (descripcion,marca,categoria,precio,imagen,existencia) VALUES ('{$descripcion}','{$marca}','{$categoria}','{$precio}','{$rutadestino}','{$existencia}')";
           $ejecutar=mysql_query($consulta,$conexion) or die (mysql_error());
		   ob_start(); 
           header("refresh: 5; url = categorias.php"); 
           echo 'Guardado correctamente.   Espere un momento y será redireccionado...'; 
           ob_end_flush();  
		   mysql_close($conexion);
		   
		   
    ?>
	
	