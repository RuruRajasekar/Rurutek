<?php include 'header.php';?>
<div id='componentlayout437149' class='bann_container flt ' >
   <p><img src="assets/img/contact.jpg" class="img-responsive" alt="banner" /></p>
</div>
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
   <div class="container">
      <div class="d-flex justify-content-between align-items-center">
         <h2>Contact Us</h2>
         <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
         </ol>
      </div>
   </div>
</section>
<!-- End Breadcrumbs Section -->
<section class="consultation section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
            <div class="consultation-form">
               <div class="c-title">
                  <div class="info">
                     <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>The canopy, Block - A,2nd Floor, Unit No.1B,
                           Paranur Railway Station Road ,
                           Mahindra World City, 
                           Chengalpattu , Tamil Nadu-603004
                        </p>
                     </div>
                     <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>admin@rurutek.com</p>
                     </div>
                     <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+918870635856</p>
                     </div>
                  </div>
               </div>
               <form id="contactform" onsubmit="return contactForm()" method="post" class="form">

                  <div class="row">
                  <div class="col-md-12">
                  <div id="error_message">
     </div>
     </div>
                     <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                           <input type="text" name="name" class="form-control" placeholder="Enter Your Name*" id="name" required="">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                           <input type="text" name="num" class="form-control" placeholder="Mobile Number*" id="phone" required="">
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-6 col-12">
                        <div class="form-group">
                           <input type="email" name="Email" class="form-control" placeholder="Enter Your Email*" id="email" required="">
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-6 col-12">
                        <div class="form-group">
                           <input type="text" name="Subject"  class="form-control" placeholder="Enter Your Subject*" id="subject" required="">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <textarea name="message" class="form-control"  placeholder="Enter Your Message here*" id="message"></textarea>
                        </div>
                        <div class="form-group button">	
                           <input type="submit"  class="btn" onclick="myFunction()" value="Submit"/>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-12">
            <div class="consultation-image">
               <img src="assets/img/consulting-img.jpg" alt="#">
               <div class="support">
                  <img class="bg-pattern" src="assets/img/about-short-bg1.png" alt="#">
                  <h2>24/7 <span>We try to support.</span></h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
function contactForm(){
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var subject = document.getElementById("subject").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 140){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
//   document.getElementById('b3').onclick = function(){
// 	swal("Thank You!", "The Form was submitted Successfully!", "success");
// };
  </script>
<?php include 'footer.php';?>