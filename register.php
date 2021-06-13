<?php
require_once("inc/header.php");
?>
<header class="page-header">
</header>
<!--header end -->	
<section class="container">
  <div class="sec-title">
  <h3>Registration </h3>
  <p class="about-text" >
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
  </p>
  </div>
  <form class="register-form">
   <div class="row">
     <div class="col-sm-12 col-md-6">
       <input type="text" placeholder="Your Name*" class="input-field"  id="name"> 
     </div>
     <div class="col-sm-12 col-md-6">
       <input type="email" placeholder="Your Email" class="input-field"  id="email"> 
     </div>
     <div class="col-sm-12 col-md-6">
       <input type="number" placeholder="Mobile Number" class="input-field"  id="number"> 
     </div>
     <div class="col-sm-12 col-md-6">
       <input type="text" placeholder="Your Address" class="input-field"  id="address"> 
     </div>
     <div class="col-sm-12 col-md-6">
      <select class="input-field" id="course">
       <option value="">Select Your Course</option>
       <option value="tally">Tally</option>
       <option value="dca">DCA</option>
       <option value="olevel">O'Level</option>
       <option value="bca">BCA</option>
       <option value="ms">Microsoft office</option>
       <option value="ccc">CCC</option>
       <option value="other">Other</option>
      </select>
     </div>
     <div class="col-sm-12 col-md-6">
     <select class="input-field" id="geneder">
     <option value="">Geneder</option>
     <option value="m">Male</option>
     <option value="f">Female</option>
     </select>
     </div>
     <div class="col-sm-12">
      <textarea class="textarea input-field" id="message"   placeholder="Write Your Massage here..." ></textarea>
     </div>
     <div class="col-12">
      <p class="error-message"></p>
      <p class="registration-no my-3 text-danger"></p>
     <button type="submit" class="submit-btn" name="register-btn" id="register-btn">SEND <i class="fa fa-send"></i></button>
     </div>
   </div>
  </form>
</section>
<?php
require_once("inc/footer.php");
?>