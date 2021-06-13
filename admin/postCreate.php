<?php
require_once("inc/header.php");
?>
<section class="container body">
 <h3 class="my-3">New Post</h3>
  
  <form method="POST" action="action.php" enctype="multipart/form-data">
  <div class="row">  
  <div class="col-12 col-md-8">
  <div class="form-group">
  <input type="text" name="title" class="input-field" placeholder="Post Title" required="required">
  </div>
  <div class="form-group">
  <textarea class="textarea input-field" name="content" placeholder="Post Content" ></textarea>
  </div>
  </div>
  <div class="col-12 col-md-4">
  <div class="form-group">
  <label for="media">Choose Post Image</label>
  <input type="file" class="media" name="media" >
  </div> 
  <input type="submit" value="Published" name="create" class="btn-post">
  </div>
  </div><!-- row -->
  </form>
 
</section>
<?php
require_once("inc/footer.php");
?>