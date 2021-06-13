<?php

require_once("admin/classes/model.php");
$conn = new DbControler();





if(isset($_POST["registerBTN"])){
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$number = trim($_POST["number"]);
$address = trim($_POST["address"]);
$course = trim($_POST["course"]);
$geneder = trim($_POST["geneder"]);
$message = trim($_POST["message"]);
$res = $conn->insertRegisterData($name,$email,$number, $address, $course, $geneder, $message);
echo $res;
} 


?>