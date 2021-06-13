<?php
require_once("inc/header.php");
?>
<section class="container body">
 <h3 class="my-3">All Resignation</h3>
  <div class="post-container">
  
  <?php
  $par_page = 15;
  $query2 = $conn->pagging('register',$par_page);
  $data = $conn->viewAllData($query2);
  
  if($data->rowCount()>0){
  while($row = $data->fetch(PDO::FETCH_OBJ)){
  ?>  
  <div class="post">
  <div>
  <h5><?php echo $row->name; ?></h5>
  <small><?php echo $row->date; ?></small>
  </div>
  <div data-id="<?php echo $row->id; ?>">
  <a href="singleRegister.php?id=<?php echo $row->id; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
  <?php 
  $link ='<a href="#" class="register-check btn btn-primary"><i class="fa fa-check"></i></a>';
  $check = ($row->seen == 0 ? $link : '');
  echo $check;
  ?>
  <a href="#" class="Delete-register btn btn-danger"><i class="fa fa-trash"></i></a>
  </div>
  </div>
  <?php
  }
  }
  ?>
  </div>
  <?php
  $conn->paginations('contact',$par_page);
  ?>
</section>
<?php
require_once("inc/footer.php");
?>