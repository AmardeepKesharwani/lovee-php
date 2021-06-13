<?php
/*==============================
 @package Lovee
 this is the template for the index 
===============================*/

require_once("inc/header.php");
require_once("inc/carousel.php");
?>
<!-- about us start -->
<section class="sec about">
 <div class="container">
  <div class="row">
   <div class="col-12 col-md-6">
   <img src="img/about-building.jpg" class="img-fluid">
   </div>
   <div class="col-12 col-md-6">
     <h3 class="about-title">About Us</h3>
     <p>
      Computer Training Institute aims at empowering individual & organization in enquiring, enhancing and upgrading the work efficiency by enhancing the overall problem solving approach ...
    </p>
     <a href="about.php" class="about-btn">Learn More <i class="fa fa-hand-o-right"></i></a>
   </div>
  </div>
 </div>
</section>
<!-- about us end -->

<!-- information -->
<section class="info">
 <div class="container">
  <div class="row">
    <div class="col-12 col-md-6 pt-3">
      <img src="img/student.png" alt="students.png"  class="img-fluid">
    </div>
    <div class="col-12 col-md-6">
     <h4>How to Learn</h4>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.
    </p>
    </div>
  </div><!-- row -->
  <div class="row">
   <div class="col-12 col-md-6 order-md-2">
    <img src="img/success.png" class="img-fluid">
   </div>
   <div class="col-12 col-md-6 order-md-1">
    <h4>Build Your Future</h4>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.
    </p>
   </div>
  </div><!-- row -->
 </div><!-- container -->
</section>


 <!-- teachers section  -->
<section class="teacher container">
  <div class="sec-title">
   <h3 class="sec-heading">Our Teachers</h3>
   <p>We have Highly Qualify Teachers</p>
   </p>
  </div><!-- section title -->
   <div class="row text-center">
    <div class="col-12 col-md-4">
      <div class="teacher-card">
        <img src="img/parson4.jpg" class="img-fluid">
        <div class="card-content">
         <h5>Mohit kumar</h5>
         <p>Lorem ipsum  adipisicing elit. Quas voluptatem maiores eaque similique non distinctio 
         </p>
         <div class="teacher-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>         
         </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="teacher-card">
      <img src="img/parson5.jpg" class="img-fluid">
      <div class="card-content">
      <h5>jitendr kumar</h5>
      <p>Lorem ipsum adipisicing elit. Quas voluptatem maiores eaque similique non distinctio 
      </p>
      <div class="teacher-social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>         
      </div>
      </div>
      </div>
    </div>
     
    <div class="col-12 col-md-4">
      <div class="teacher-card">
      <img src="img/parson6.jpg" class="img-fluid">
      <div class="card-content">
      <h5>Amit kumar</h5>
      <p>Lorem ipsum adipisicing elit. Quas voluptatem maiores eaque similique non distinctio 
      </p>
      <div class="teacher-social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>         
      </div>
      </div>
      </div>
    </div>
   </div>
  </section>

<!-- counting of number -->
<section class="counting">
  <div class="container text-center">
   <div class="row ">
     <div class="col-12 col-md-3">
       <i class="fa fa-smile-o"></i>
       <h2>700+</h2>
       <p>Happy Students</p>
     </div>
     <div class="col-12 col-md-3">
       <i class="fa fa-group"></i>
       <h2>15+</h2>
       <p>Certified Teacher</p>
     </div>
     <div class="col-12 col-md-3">
       <i class="fa fa-clone"></i>
       <h2>10+</h2>
       <p>Approved Courses</p>
     </div>
     <div class="col-12 col-md-3">
       <i class="fa fa-graduation-cap"></i>
       <h2>950+</h2>
       <p>Graduate Students</p>
     </div>
   </div>
  </div>
</section>

<!--- popular Courses -->
<section class="course container text-center">
  <div class="sec-title">
  <h3 class="sec-heading">POPULAR COURSES</h3>
  <p>CHOOSE YOUR DESIRED COURSE</p>
  </p>
  </div><!-- section title -->

  <div class="row">
    <?php
    require_once("inc/courses.php");
    ?>
  </div><!-- row -->
</section>
<!-- footer start -->
<?php
require_once("inc/footer.php");
?>