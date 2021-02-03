<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Rurutek Private Limited</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <!--owl carousel -->
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
      <!--  Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
         <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
               <a href="index.php"><img src="assets/img/main_logo.png" alt="" class="img-fluid"></a>
            </div>
            <nav class="nav-menu d-none d-lg-block">
               <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li class="drop-down">
                     <a href="about.php">Company</a>
                     <ul>
                         <li><a href="About.php">About us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                     </ul>
                  </li>
             
                  <li><a href="service.php" target="_blank">Services</a></li>
                  <li class="drop-down">
                     <a href="">Product & Solutions</a>
                     <ul>
                        <li><a href="settopbox.php" target="_blank">Set Top Box</a></li>
                        <li><a href="android-tv.php" target="_blank">Android TV STB</a></li>
                        <li><a href="ott.php" target="_blank">OTT Streaming Devices</a></li>
                        <li><a href="ipcamera-withai.php" target="_blank">IP Camera With AI</a></li>
                        <li><a href="sis.php" target="_blank">System Integration Solution</a></li>
                        <li><a href="iot-gpon.php" target="_blank">IOT & GPON</a></li>
                     </ul>
                  </li>
                  <li><a href="career.php" class="secondary-btn nav-link">Careers</a></li>
                  <li><a href="contact.php" class="primary-btn nav-link">Contact</a></li>
               </ul>
            </nav>
            <!-- .nav-menu -->
         </div>
      </header>
      <!-- End Header -->
      <div class="new-get">
         <a data-toggle="modal" data-target="#getAquote" id="v-gradient" class="ctl-grad-button d-none d-xl-block">Get a quote</a>
      </div>
      <!-- get a quote form -->
<div id="getAquote" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header ctl-career-header">
            <h4 class="modal-title">Request A Quote</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body consultation" style="padding-bottom: 20px !important;">
         <form id="getform" action="" onsubmit="return getForm()" method="post" class="form">
               <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                  <div id="error_message">
     </div>
     </div>
     <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                           <input type="text" name="name" placeholder="Name*" id="name">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                           <input type="text" name="phone" placeholder="Phone Number*" id="phone">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" name="company" placeholder="Company*" id="company">
                        </div>
                     </div>
                  
                     <div class="col-lg-12 col-md-6 col-12">
                        <div class="form-group">
                           <input type="email" name="email" placeholder="Email Address*" id="email">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <select class="form-control" id="sel1">
                              <option>Service Type</option>
                              <option>Startup services</option>
                              <option>Product Engineering</option>
                              <option>Digital Transformation</option>
                              <option>Extended Team</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="file-upload">
                              <div class="file-select">
                                 <div class="file-select-button" id="fileName">Choose File</div>
                                 <div class="file-select-name" id="noFile">No file chosen...</div>
                                 <input type="file" name="chooseFile" id="chooseFile">
                              </div>
                              <p style="font-size: 12px; text-align: left;">(Supports only doc, ppt, pdf files. Max size 2 MB)</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea class="form-control" placeholder="Description *" rows="3" name="message" minlength="5" maxlength="500" spellcheck="false"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
         <div class="form-group button" style="margin: 0 auto;">	
                           <input type="submit"  class="btn" value="Send Message"/>
                        </div>
            </form>
         </div>
        
      </div>
   </div>
</div>
<!-- get a quote form -->
<script type="text/javascript">
function getForm(){
  var name = document.getElementById("name").value;
  var company = document.getElementById("company").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
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
  if(company.length < 5){
    text = "Please Enter company Name";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
//   document.getElementById('b3').onclick = function(){
// 	swal("Thank You!", "The Form was submitted Successfully!", "success");
//    return true;
//  };
  </script>