<?php
require_once("inc/header.php");
?>
<header class="page-header" >
</header>
<!--header end -->	
<section class="container">
  <div class="sec-title">
  <h3>Get In Tutch</h3>
  <p class="about-text" >
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
  </p>
  </div>
  <form class="contact-form" id="contact-form">
   <div class="row">
     <div class="col-sm-12 col-md-6">
       <input type="text" placeholder="Your Name*" class="input-field"  id="name" autocomplete="off" > 
     </div>
     <div class="col-sm-12 col-md-6">
       <input type="email" placeholder="Your Email" class="input-field"  id="email" > 
     </div>
     <div class="col-sm-12">
       <input type="number" placeholder="Mobile Number" class="input-field"  id="number"> 
     </div>
     <div class="col-sm-12">
      <textarea class="textarea input-field" id="message"   placeholder="Write Your Massage here..." ></textarea>
     </div>
     <div class="col-12">
      <p class="error-message"></p>
     <button type="submit" class="submit-btn" name="contact-btn" id="contact-btn">SEND <i class="fa fa-send"></i></button>
     </div>
   </div>
  </form>
</section>

<!-- contact form end -->
<section class="container contact-info">
 <div class="row">
  <div class="col-12 col-md-4">
    <div class="contact-card">
      <h6><i class="fa fa-map-marker"></i> Location area</h6>
      <p>Lovee computer institute</p>
      <p>Dhundhi katra mirzapur Up</p>
      <p>231001</p>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="contact-card">
      <h6><i class="fa fa-clock-o"></i> Opening Time</h6>
      <p>Monday - Saturday</p>
      <p>8:00am - 6:00pm</p>
      <p>Sunday- We keep off</p>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="contact-card">
     <h6><i class="fa fa-envelope"></i>Contacts</h6>
     <p>Lovee@gmail.com</p>
     <p>+91 999 888 4433</p>
     <p>+91 444 555 6677</p>
    </div>
  </div>
 </div>
</section>
<?php
require_once("inc/footer.php");
?>