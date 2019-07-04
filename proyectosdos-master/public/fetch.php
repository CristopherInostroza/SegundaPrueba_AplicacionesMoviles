<?php  
require 'database.php'; 
  
// mostrar datos de columnas 
echo 'ID'.' '.'Name'.' '.'User'.' '.'Pass'.'<br>'; 
  
// SELECT de usuarios 
$query = "SELECT * FROM `user_info`"; 
 
if ($is_query_run = mysql_query($query)) 
{ 
    // echo "Query Ejecutada"; 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // columnas de tabla usuario 
        echo $query_executed['ID'].' '; 
        echo $query_executed['First Name'].' '; 
        echo $query_executed['Username'].' '; 
        echo $query_executed['Password'].'<br>'; 
    } 
} 
else
{ 
    echo "Error de ejecución"; 
} 
?> 