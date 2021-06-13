<?php
session_start();
require_once("classes/model.php");
$conn = new DbControler();

if(isset($_GET["logout"])){
unset($_SESSION['admin']);
header("Location:login.php");
}

if(isset($_POST["contact"])){
$id = trim($_POST["id"]);
$res = $conn->seen($id);
return $res;
}

if(isset($_POST["register"])){
$id = trim($_POST["id"]);
$res = $conn->seen2($id);
return $res;
}


if(isset($_POST["deleted"])){
$id = trim($_POST["id"]);
$table = trim($_POST["deleted"]);
$res = $conn->deleteData($id,$table);
echo $res;
}


if(isset($_POST['create'])){

$title = $_POST["title"];
$content = $_POST["content"];
$img=$_FILES['media'];

$size=$img['size'];
$type=$img['type'];
$tmp_name=$img['tmp_name'];

if($type=="image/jpg" || $type=="image/png" || $type=="image/jpeg"){
$name=$img['name'];
move_uploaded_file($img['tmp_name'], "img/".$img['name']);
}
$id = $conn->createPost($title,$content,$name);
header("Location:updatePost.php?id=".$id);
}


if(isset($_POST['update'])){

$id = $_POST['id'];
$title = $_POST["title"];
$content = $_POST["content"];
$img=$_FILES['media'];

$size=$img['size'];
$type=$img['type'];
$tmp_name=$img['tmp_name'];

if($type=="image/jpg" || $type=="image/png" || $type=="image/jpeg"){
$name=$img['name'];
move_uploaded_file($img['tmp_name'], "img/".$img['name']);
}
$conn->updatePost($title,$content,$name,$id);
header("Location:updatePost.php?id=".$id);
}

header("Location:index.php");
?>