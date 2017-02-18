<?php
session_start();
session_destroy();
?>
<html>
    <head>

    
<script LANGUAGE="JavaScript">

var pagina="index.php"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 1000);

</script>
</head>   
<body>
<div class="font" >
  <p align="center"><img src="images/salir.gif"/></p>
    <p style="color:#066eb7;"align="center">Cerrando Sesión...</p>        
</div>
</body>
</html>
