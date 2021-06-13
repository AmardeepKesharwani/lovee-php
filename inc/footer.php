<footer class="footer">
 <div class="container">
   <div class="row">
     <div class="col-12 col-md-3">
      <div class="footer-content">
       <h5 class="footer-title">Contact Us</h5>
        <p><i class="fa fa-map-marker"></i>
           Lovee computer institute</p>
        <p>Dhundhi katra mirzapur Up</p>
        
        <p> <i class="fa fa-phone"></i>
           +91 999 888 4433</p>
        <p>+91 444 555 6677</p>
        
        <p><i class="fa fa-envelope"></i>
        Lovee@gmail.com</p>
        </div><!-- footer-content -->
     </div><!-- col -->
     <div class="col-12 col-md-3">
     <div class="social-media">
     <h5 class="footer-title">Social Media</h5>
     <a href="https://www.facebook.com/anuj.kesharwani.397/"><i class="fa fa-facebook"></i></a>
     <a href="https://www.instagram.com/anuj_kesharwani_/"><i class="fa fa-instagram"></i></a>
     <a href="https://www.pinterest.com/anujkesharwani1998/""><i class="fa fa-twitter"></i></a>
     <a href="https://github.com/amardeepkesharwani"><i class="fa fa-linkedin"></i></a>   
     </div>
     </div><!-- col -->
     <div class="col-12 col-md-3">
     <div class="resend-news">
     <h5 class="footer-title">Resend News</h5>
      <ul class="nesw-list">
      <?php
      $par_page = 4;
      $query2 = $conn->pagging('post',$par_page);
      $data = $conn->viewAllData($query2);
      if($data->rowCount()>0){
      while($row = $data->fetch(PDO::FETCH_ASSOC)){ 
      ?>     
      <li><a href="news.php#post-<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
      <span><?php echo $row['date']; ?></span></li>
      <?php
      }
      }
      ?>
      </ul>
     </div>
     </div><!-- col -->
     <div class="col-12 col-md-3">
      <h5 class="footer-title">Useful Link</h5>
      <ul class="footer-menu">
      <li><a href="index.php" > Home</a></li>
      <li><a href="courses.php" >Course</a></li>
      <li><a href="news.php" >News</a></li>
      <li><a href="contact.php" > Contact</a></li>
      <li><a href="about.php" > About Us</a></li>
      </ul>
     </div><!-- col -->
   </div><!-- row -->
 </div><!-- container -->
 <div class="copyright">
 <small>&copy; Copyright 2019 Lovee. All Rights Reserved</small>
 </div><!-- col -->
</footer>
<!-- script -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>