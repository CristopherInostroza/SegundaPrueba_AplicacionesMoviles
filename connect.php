<?php 
// BD conectar
$mysql_host = 'localhost'; 
  
// user root 
$mysql_user = 'root'; 
  
if (!@mysql_connect ($mysql_host, $mysql_user)) 
{ 
    die('Error de conexi�n'); 
} 
else
{ 
    // BD nombre server 
    if (@mysql_select_db('server')) 
    { 
        echo "Conexi�n exitosa"; 
    } 
    else
    { 
        die('No se puede conectar a la base de datos'); 
    } 
} 
?> 