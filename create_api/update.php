<?php 
include_once "./connection.php";
?>


<?php
$id = $_REQUEST['id'];

$sql="UPDATE  person SET id='$id' ";

$result  = $conn->query($sql);



  $conn->close();

?>
