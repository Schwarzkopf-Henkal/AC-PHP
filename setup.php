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
mysqli_select_db("ac_db",$ConSQL);
$oper="CREATE TABLE users
(
    IdentityToken varchar(40),
    AccessToken varchar(40),
    UserName varchar(40),
    Email varchar(40),
    PhoneNum int,
    UniqueID int
)";
mysqli_query($oper,$ConSQL);

?>