<html>
<head>
<title>Articulos</title>
<style type="text/css">

div#formulario{
border:2px solid #a1a1a1;
padding:0px 65px; 
background:#dddfdf;
width:300px;
border-radius:25px;
position: relative;
  top: 80;
margin-bottom: 70;

}

div#formulario:hover{
  box-shadow: 4px 10px 50px #888888;
}
#imagen{
  position: relative;
right: 27;
}
#imagen:hover{
  background-color: #5aa9ce;
}
.boton{
  text-transform: uppercase;
  width: auto;
  font-style: normal;
  background: transparent;
  color: #333333;
  cursor: pointer;
  border: 4px solid #d0d0d0;
  padding: 10px 20px;
  letter-spacing: 0.20em;
}
.boton:hover{
  color: #ffffff !important;
  background: #5aa9ce;
  border: 4px solid transparent;
  box-shadow: 4px 10px 50px #888888;
}
.captura{

  background: #f0f0f0;
  -webkit-appearance: none;
  color: #959595;
  border: none;
  padding: 10px 20px;
  margin: 0px;
  font-style: italic;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 300;
  -webkit-border-radius: 1px;
  -moz-border-radius: 0px;
  border-radius: 10;
  border: 4px solid #d0d0d0;
 margin-bottom: 10px; 
  -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
  -webkit-transition: background-color .3s ease, border .3s ease, color .3s ease;
     -moz-transition: background-color .3s ease, border .3s ease, color .3s ease;
      -ms-transition: background-color .3s ease, border .3s ease, color .3s ease;
       -o-transition: background-color .3s ease, border .3s ease, color .3s ease;
          transition: background-color .3s ease, border .3s ease, color .3s ease;

}

.captura:hover{
  background: rgba(0,0,0,0.20);
  
}
.captura:focus{
background: #5aa9ce;
  color: #ffffff;
  
  
}
h2 {
  font-size: 34px;
  line-height: 40px;
  font-weight: 300;
  margin-bottom: 30px;
  font-family: "Lato", Helvetica, Arial, sans-serif;
}
body{
  line-height: 1;
  color: #808080;
  font: 16px/32px "PT Sans", Helvetica, Arial, sans-serif;
  background: #ffffff;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  overflow-x: hidden;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    cursor: pointer;
}
.custom-input-file .input-file {
   text-transform: uppercase;
  width: auto;
  font-style: normal;
  background: transparent;
  color: #333333;
  cursor: pointer;
  border: 4px solid #d0d0d0;
  padding: 10px 20px;
  letter-spacing: 0.20em;
}
.header{
background-image:url(../images/pattern_bg.png);
  background-repeat:repeat;
  background-color:rgba(0, 0, 0, 0.65);
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1000000;
  border-bottom:5px solid #DA5049;
  text-align: center;
  color: white;
  

}

footer{
 
  padding:15px 0;
  text-align:center;
  margin-top:30px;
}
footer span{
  color:#ffffff;
}
ul.navigation {
    display: table;
    margin: 0 auto;
}
ul.navigation {
    display: table;
    margin: 0 auto;
}

ul.navigation li {
  float: left;
  display:block;
  list-style-type: none;
  text-transform:uppercase;
  padding: 0; 
  border-top:solid 5px transparent;  
}
ul.navigation li a {
  color: #fff;
  font-family: 'Armata', sans-serif;
  text-decoration: none;
  background-image:url(../images/nav_devider.png);
  background-repeat:no-repeat;
  font-weight:400;
  display:block;
  font-size:13px;
  text-align:center;
  text-transform:capitalize;
  padding:11px 10px;
  transition:all 0.25s ease 0s;
  outline:none;
}
ul.navigation li a i{
  position:relative;
  top:2px;
  margin-right:3px;
  text-shadow:none;
}

ul.navigation li a:hover{
  color: #DA5049; 
  background-color: rgba(0,0,255,0.25);
}
ul.navigation .current{
  background-image:url(../images/tab_bg.png);
  background-repeat:no-repeat;
  background-position: left top;
  background-color:#DA5049;
  text-shadow: 0px 1px 1px #000000;
  border-top:solid 5px #FFFFFF;
}

ul.navigation .current a, ul.navigation .current a:hover{
  color:#ffffff;
}


ul.navigation img, .current img a, ul.navigation img .current img a:hover{
  background:none;
  padding:0px; margin:0px;
}

.select-menu {
  display: none;
  background: none;
  padding: none;
  border:none;
  
}

@media (max-width: 960px) {

ul.navigation { display: none;margin:0;}

.select-menu {
  display: block;
  background: #fff;
  width: 250px;
  padding: 5px;
  font-size: 12px;
  border: 1px solid #ccc;
  height: 34px;
  margin:25px auto ;
}
}
</style>
<script type="text/javascript">
  
  function control(f){
  var ext=['gif','jpg','jpeg','png'];
  var v=f.value.split('.').pop().toLowerCase();
  for(var i=0,n;n=ext[i];i++){
    if(n.toLowerCase()==v)
      return
  }
  var t=f.cloneNode(true);
  t.value='';
  f.parentNode.replaceChild(t,f);
  alert("Seleccione una archivo de imagen valido");
  
}
</script>

</head>
<body>
<div class="header">

<ul class="navigation">
  <li><a href="#">Inicio</a></li>
<li><a href="#">Todos Los articulos</a></li>
<li><a href="#">Otros</a></li>
<li><a href="">Revisar Posts</a></li>

</ul>
</div>

<center>
<div id='formulario'>
<h2>Dar de alta un articulo</h2>
<form action="guarda.php" method="post" id="form1" name="form1" enctype="multipart/form-data">
<input class="captura" type="text" name="descripcion" value="" size="50" maxlength="70"/ placeholder="Descripcion"><br>
<input class="captura" type="text" name="marca" value="" size="50" maxlength="20" placeholder="Marca"><br>
<input class="captura" type="text" name="precio" value="" size="50" maxlength="20" placeholder="Precio ej. 123.50"><br>
<input class="captura" type="text" name="existencia" value="" size="5" maxlength="5" placeholder="Existencia"><br>
<select name="categoria" class="boton">
              <?php
                 #Conectar con la base de datos
                 $conexion=mysql_connect("localhost","root") or die ("Fallo la conexión con la base de datos");
                  mysql_select_db("store_music",$conexion);
                  $categoria="select *  from categorias order by nombrecat";
                  $resultcat=mysql_query($categoria,$conexion);	
                  while ($rcat=mysql_fetch_array($resultcat)){
				  echo "<option value='".$rcat["id"]."'>".$rcat["nombrecat"]."</option>";
				  }
                mysql_close($conexion);
                ?>
            </select><br>

Imagen        <div class="custom-input-file">
                <input  type="file" name="imagen" id="imagen" class="input-file" onchange="control(this)" /><br>
             </div>
            
            <input class="boton" type="submit" value="Guardar"/>		



</form>

</div>

</center>

<footer>
  Todos los derechos reservados, Copyrigth 2013, Jorge Flores ITLM Los Mochis,Sinaloa
</footer>

</body>
</html>