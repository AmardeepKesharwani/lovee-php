<?php
require_once("inc/header.php");
?>
<div class="sec-title">
  <h3 class="sec-heading">News feed</h3>
  </p>
  </div><!-- section title -->

<section class="container">
  <div class="row">
   <?php
   $par_page = 15;
   $query2 = $conn->pagging('post',$par_page);
   $data = $conn->viewAllData($query2);
   if($data->rowCount()>0){
   while($row = $data->fetch(PDO::FETCH_ASSOC)){
   ?>  
   <div class="col-12" id="post-<?php echo $row['id']?>">
     <div class="post-img">
      <img src="admin/img/<?php echo $row['img']?>" class="img-fluid">
     </div>
     <small class="post-date"><?php echo $row['date']?></small>
     <h5 class="post-title"><?php echo $row['title']?></h5>
     <p class="post-text">
     <?php echo $row['text']?>
     </p>
   </div><!-- col -->
   <?php
   }
   }
   ?>  
  </div><!-- row -->
  <?php
  $conn->paginations('post',$par_page);
  ?>
</section>
<?php
require_once("inc/footer.php");
?>