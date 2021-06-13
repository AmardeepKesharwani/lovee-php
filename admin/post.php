<?php
require_once("inc/header.php");
?>
<section class="container body">
 
 <div class="post-container">
 <?php
 $par_page = 15;
 $query2 = $conn->pagging('post',$par_page);
 $data = $conn->viewAllData($query2);
 if($data->rowCount()>0){
 while($row = $data->fetch(PDO::FETCH_OBJ)){
 ?>  
 
 
 <div class="post">
 <div>
 <h5><?php echo $row->title; ?></h5>
 <small><?php echo $row->date; ?></small>
 </div>
 <div data-id="<?php echo $row->id; ?>">
 <?php
  $post_link = $conn->sideLink().'/news.php#post-'.$row->id;
 ?>
 <a href="<?php echo $post_link; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
 <a href="updatePost.php?id=<?php echo $row->id; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>  
 <a href="#" class="delete-post btn btn-danger"><i class="fa fa-trash"></i></a>
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