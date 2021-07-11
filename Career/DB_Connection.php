<?php
require_once('config.php');

$connection=mysqli_connect($DB_SERVER,$USERNAME,$PASSWORD, $DB_NAME);

if($connection){
    echo("Connection Successful");
    
   
}
else{
    echo("Unable to Connect");
}



?>