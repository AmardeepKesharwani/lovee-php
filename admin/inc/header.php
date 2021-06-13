<?php
session_start();
if(!isset($_SESSION['admin'])){
 header("Location:login.php");
}
require_once("classes/model.php");
$conn = new DbControler();
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>admin panel</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/admin-style.css" media="all"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="nav">
 <div class="toggle-box sidebar-toggle">
 <i class="fa fa-bars"></i>
 </div>
 <a href="index.php" class="nav__logo"><span>L</span>ovee</a>
 <div class="nav-user-icon">
 <a href="action.php?logout=true" class="text-info"><i class="fa fa-sign-out"></i></a>
 </div>
</nav>
<aside class="sidebar">
 <ul class="menu">
  <li><a href="<?php echo $conn->sideLink();?>">Website</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="postCreate.php">New Post</a></li>
  <li><a href="post.php">All Post</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="register.php">Register</a></li>
 </ul>
</aside>
<!-- sidebar end -->