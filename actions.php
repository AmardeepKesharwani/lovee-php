<?php

require_once("admin/classes/model.php");
$conn = new DbControler();
if(isset($_POST["contactBTN"])){
 
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$number = trim($_POST["number"]);
$message = trim($_POST["message"]);
$res = $conn->insertContact($name,$email,$number,$message);
return $res;
}else{
header("Location:index.php");
}
?>