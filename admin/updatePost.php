<?php
if(isset($_GET["id"])){
require_once("inc/header.php");
$row = $conn->singleData('post', $_GET['id']);
?>
<section class="container body">
 <h3 class="my-3">Update Post</h3>
  
  <form method="POST" action="action.php" enctype="multipart/form-data">
  <div class="row">  
  <div class="col-12 col-md-8">
  <div class="form-group">
  <input type="text" value="<?php echo $row->title; ?>"  name="title" class="input-field" placeholder="Post Title" required="required">
  </div>
  <div class="form-group">
  <textarea  class="textarea input-field" name="content" placeholder="Post Content" ><?php echo $row->text; ?></textarea>
  </div>
  </div>
  <div class="col-12 col-md-4">
  <div class="form-group">
  <label for="media"><?php echo $row->img; ?></label>
  <input type="file"  class="media" name="media" value="<?php echo $row->img; ?>">
  </div> 
  <input type="submit" value="update" name="update" class="btn-post">
  <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
  </div>
  </div><!-- row -->
  </form>
 
</section>
<?php
require_once("inc/footer.php");
} else{
header("Location:index.php");
}
?>