<html>
<head>
<style type="text/css">
table{
position:float;
border:2px solid;
border-radius:25px;
}
h1{
text-align:center;
}
div{
color:blue;
text-align: center;
}
div#red{
color:red;
text-align: center;
}
div#red:hover{

	color:white;
	font-family: bold;
	background-color: red;
	border-radius: 19;

}
table{
text-align: center;
margin: 0 auto;
text-align: left;
padding: 5;
background:url(imagenes/pattern_bg.png) repeat;
	background-color: rgba(0,0,255,0.15);

}
img{
border-radius:20 ;

}
img{
	width:200px;
    height:200px;
opacity:0.8;
filter:alpha(opacity=40); /* For IE8 and earlier */
transition:width 0.2s;
-webkit-transition:width 2s; /* Safari */
}
img:hover{
	
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */

}
#text{
		text-align:center;
	font-weight:normal;
	font-size:1.2em;
	font-weight:70;
	color:#ffffff;
}

</style>



</head>

<body >


		
<?php

$cat=$_GET["dato"];

#Conectar con la base de datos
$conexion=mysql_connect("localhost","root") or die ("Fallo la conexión con la base de datos");
mysql_select_db("store_music");
$categoria="select * from categorias where id=".$cat.";";
$resultcat=mysql_query($categoria,$conexion);


while ($rcat=mysql_fetch_array($resultcat)){
$ncategoria=$rcat["nombrecat"];
}
$productos="select * from instrumentos where categoria=".$cat." order by precio";
$resultins=mysql_query($productos,$conexion);
echo "<h1>Categoria:".$ncategoria."</h1>";


echo "<table>"; $cont=0;

while($rins=mysql_fetch_array($resultins)){

if($cont%3==0){echo "<tr>";}
echo "<td>";

echo "<table>";
echo "<tr><td>";
echo "<img src='".$rins["imagen"]."'/>";
echo "</td></tr>";
echo "<tr><td>";
echo "<div id='text'>";
echo "Descripci&oacuten: " ;echo"</div>" ;echo "<div>";  echo $rins["descripcion"]; echo"</div>" ;
echo "</td></tr>";
echo "<tr><td>";
echo "<div id='text'>";
echo "Marca: " ;echo "</div>"; echo "<div>";  echo $rins["marca"]; echo"</div>" ;
echo "</td></tr>";
echo "<tr><td>";
echo "<div id='text'>";
echo "Precio: "; echo "</div>";  echo "<div id='red'> $";  echo $rins['precio']; echo "</div>";
echo "</td></tr></table>";

echo"</td>";
$cont++;
if($cont%3==0){
echo "</tr>";
}

}
if($cont%3!=0){echo"</tr>";}
echo "</table>";



mysql_close($conexion);


?>

</body>
</html>