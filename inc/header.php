<?php
require_once("admin/classes/model.php");
$conn = new DbControler();
//echo $conn->msg()
 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="" />
<meta name="keywords" content=""/>
<meta name="theme-color" content="#20aeae">
<title>Lovee</title>
<link rel="icon" href="img/icons/lovee.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="manifest" href="manifest.json">
</head>
<body>
<div class="search-box">
 <form method="GET"  action="search.php" >
  <div class="form-groups">
   <input type="search" class="search" required name="search" placeholder="Search here..." >
   <button type="submit" class="search-btn" name="search-btn"><i class="fa fa-search"></i></button>
  </div>
 </form>
</div>
<nav class="nav">
 <div class="toggle-box sidebar-toggle">
   <i class="fa fa-bars"></i>
 </div>
 <a href="index.php" class="nav__logo"><span>L</span>ovee</a>
 <div class="nav-search-icon">
 <i class="fa fa-search"></i>
 </div>
</nav>
<div class="sidebar">
 <div class="sidebar-toggle nav__close">
 <span></span>
 <span></span>
 </div>
 <ul class="menu-link">
	<li><a href="index.php" ><i class="fa fa-home"></i> Home</a></li>
	<li><a href="courses.php" ><i class="fa fa-graduation-cap"></i>Course</a></li>
	<li><a href="news.php" ><i class="fa fa-newspaper-o"></i> News</a></li>
	<li><a href="contact.php" ><i class="fa fa-user"></i> Contact</a></li>
	<li><a href="about.php" ><i class="fa fa-info-circle"></i> About Us</a></li>
 </ul>
</div><!-- Sidebar -->
<div class="overlay sidebar-toggle"></div>
<!-- <section id="preloader">
  <div class="loader"></div>
</section> -->