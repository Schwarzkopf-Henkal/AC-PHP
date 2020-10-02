<?php
$linetot=1;
require "ac-config.php";
$ConSQL=mysqli_connect("localhost","sql49_234_17_22","FzeDJWnWkn","sql49_234_17_22");
if(!$ConSQL){
    echo $linetot++."Fatal Error:<br>";
    echo $linetot++."Failed establishing a database connection.<br>";
    die("System aborted.");
}
if(mysqli_query("CREATE DATABASE ac_db",$ConSQL)){
    echo $linetot++."Database created.<br>";
}else echo $linetot++."Error creating database: ".mysqli_error($ConSQL);

?>