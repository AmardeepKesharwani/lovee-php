<?php
require_once("inc/header.php");
?>

<header class="header">
</header>
<section class="container body">
 
 <div class="row text-center">
 <div class="col-12 col-md-6">
   <div class="profile-img"><img src="img/parson5.jpg"></div>
 </div>
 <div class="col-12 col-md-6 profile-text">
   <h5>Lovkush Kumar</h5>
   <small>Administrator</small>
 </div>
 </div>
 <div class="row">
   <div class="col-12 col-md-4">
     <div class="card red">
       <a href="contact.php" >Contact <i class="fa fa-bell"></i></a>
       <h1><?php echo $conn->showNewData('contact'); ?></h1>
     </div>
   </div>
   <div class="col-12 col-md-4">
    <div class="card green">
     <a href="register.php" >Register <i class="fa fa-bell"></i></a>
     <h1><?php echo $conn->showNewData('register'); ?></h1>
    </div>
   </div>   
   <div class="col-12 col-md-4">
   <div class="card bg-info">
   <a href="post.php" >Total Post <i class="fa fa-credit-card"></i></a>
   <h1><?php echo $conn->showAllData('post'); ?></h1>
   </div>
   </div> 
   <div class="col-12 col-md-4">
   <div class="card bg-primary">
   <a href="contant.php" >Total Contact<i class="fa fa-group"></i></a>
   <h1><?php echo $conn->showAllData('contact'); ?></h1>
   </div>
   </div>
   <div class="col-12 col-md-4">
   <div class="card bg-info">
   <a href="register.php" >Total Registration<i class="fa fa-drivers-license-o"></i></a>
   <h1><?php echo $conn->showAllData('register'); ?></h1>
   </div>
   </div>
 </div>
 
</section>

<?php

require_once("inc/footer.php");
?>