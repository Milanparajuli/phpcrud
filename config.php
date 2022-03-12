<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "bootcamp";
$conn =  mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die( "not connected" .mysqli_connect_error());

}
else{
    // echo "Database connected";
}
?>