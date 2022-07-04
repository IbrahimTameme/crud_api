<?php
header("Access-Control-Allow-Origin: *");

$dbsn = "localhost";
$dbun = "root";
$password = "";
$dbname = "crud_api";

$conn = mysqli_connect($dbsn,$dbun,$password,$dbname);
if($conn)
{
    


}else
{
    echo "connection failed";
}
?>