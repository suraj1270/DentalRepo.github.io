<!DOCTYPE html>
<html>
<head>
	
	<title>DentalGrow</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<!-- header  start -->
<section>
	<div class="fluid">
    <div class="container">

       <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="main-head">
                  <img src="image/logo.png" class="titl img-fluid"> 
               </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="main-head1">
               <div class="ml-auto">   
                   <span> <button class="side1">Book An Application</button></span>
                   <span><select class="side2 ">
                            <option>Login</option>
                            <option>Temps</option>
                            <option>Dental Office</option>
                         </select>
                    </span>
                </div>
              </div>

          </div>

       </div>

    </div>
	</div>
</section>
<!-- header part end -->

<!-- navbar start -->
<section class="navv">
	<div class="fluid">
		<nav class="navbar navbar-expand-md navbar-light">
  <!-- Brand -->
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav list">
      <li class="nav-item">
        <a class="nav-link" style="color:#05deff" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="#">Treatment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="#">Blog</a>
      </li>
       <li class="nav-item">
        <a class="nav-link"  style="color:black;" href="#">Contact Us</a>
      </li>
    </ul>
     <ul class="navbar ml-auto">
        <span class="side"><img src="image/app.png" class="app"></span>
        <span class="side"><img src="image/play2.png" class="play"></span>
      </ul>

  </div>
</nav>
	</div>
</section>
<!-- navbar end -->

<!-- first section start -->
<section>
  <div class="fluid">
    <div class="container-fluid">
       <div class="row">
            <div class="col-sm-5 col-md-5 col-lg-5" style="background-color:#05deff">
          <form id="regForm" action=""  style="background-color:#05deff">

<h3 class="text-center">Are You Patient</h3>

<!-- One "tab" for each step in the form: -->
<div class="tab"><div class="row">
  <div class="col-lg-12">
      <div class="mb-1" >
        <label class="form-label  margin_bootom_0">Patient Name <span class="text-danger">*</span></label>
        <input name="name" id="name" type="text" class="form-control transparent " placeholder="Name">
        <span class="rating-error" id="name-errors"></span>
      </div>
      </div><!--end col-->
    <div class="col-lg-6">
        <div class="mb-1">
          <label class="form-label  margin_bootom_0">Your Email <span class="text-danger">*</span></label>
          <input name="email" id="email" type="email" class="form-control transparent" placeholder="Email">
        </div> 
      </div><!--end col-->

    <div class="col-lg-6">
        <div class="mb-1">
          <label class="form-label margin_bootom_0 ">Your Phone <span class="text-danger">*</span></label>
          <input name="phone" id="phone" type="tel" class="form-control transparent c-p-5" placeholder="Phone">
        </div> 
    </div><!--end col-->

    <div class="col-lg-6">
        <div class="mb-1">
          <label class="form-label margin_bootom_0 ">Address <span class="text-danger">*</span></label>
          <input name="address" id="address" type="text" class="form-control transparent c-p-5" placeholder="Address">
        </div> 
    </div><!--end col-->
    <div class="col-lg-6">
      <div class="mb-1">
        <label class="form-label margin_bootom_0 ">Unit Number<span class="text-danger">*</span></label>
        <input name="unit_no" id="unit_no" type="text" class="form-control transparent c-p-5" placeholder="UnitNo">
      </div> 
    </div>

    <div class="col-lg-6">
      <div class="mb-1">
        <label class="form-label margin_bootom_0 ">City <span class="text-danger">*</span></label>
        <input name="city" id="city" type="tel" class="form-control transparent c-p-5" placeholder="City">
      </div> 
    </div> 

    <div class="col-lg-6">
      <div class="mb-1">
        <label class="form-label  margin_bootom_0">State <span class="text-danger">*</span></label>
        <input name="state" id="state" type="text" class="form-control transparent c-p-5" placeholder="State">
      </div> 
    </div><!--end col-->

    <div class="col-lg-6">
        <div class="mb-1">
          <label class="form-label margin_bootom_0 ">Country <span class="text-danger">*</span></label>
          <input name="country" id="country" type="tel" class="form-control transparent c-p-5" placeholder="Country">
        </div> 
    </div>
    <div class="col-lg-6">
        <div class="mb-1">
          <label class="form-label margin_bootom_0 ">Zipcode <span class="text-danger">*</span></label>
          <input name="zipcode" id="zipcode" type="text" class="form-control transparent c-p-5" placeholder="Zipcode">
        </div> 
    </div>
  </div>
</div>

<div class="tab">
  <div class="row">
     <div class="col-lg-12">
                                        
      <div class="mb-1">
        <label class="form-label margin_bootom_0">Please identify the type of procedure(s) you are interested in. (if unsure, leave blank) </label>

        <div class="row" style="margin-left: 0px;font-size:12px;">
        <div class="form-check col-lg-4"> <input
        name='interested_procedure[]' class="form-check-input"
        type="checkbox" value="Root Canal" id="flexCheckDefault1">
        <label class="form-check-label" for="flexCheckDefault">Root
        Canal</label> 
      </div> 
      <div class="form-check col-lg-4"> <input
        name='interested_procedure[]' class="form-check-input"
        type="checkbox" value="Teeth Whitening"
        id="flexCheckChecked2" > <label class="form-check-label"
        for="flexCheckChecked">Teeth Whitening</label> 
      </div>  
      <div
        class="form-check col-lg-4"> <input
        name='interested_procedure[]' class="form-check-input"
        type="checkbox" value="Snap on Dentures"
        id="flexCheckChecked4" > <label class="form-check-label"
        for="flexCheckChecked">Snap on Dentures</label> 
      </div> 
    </div>
        </div>

<div class="tab">
  <div class="row">
        <div class="form-check col-lg-4">
          <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Bridge/Crown" id="flexCheckChecked5" >
        <label class="form-check-label" for="flexCheckChecked">Bridge/Crown</label>
        </div>
        <div class="form-check col-lg-4">
            <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Implants(s)" id="flexCheckChecked6" >
          <label class="form-check-label" for="flexCheckChecked"> Implants(s)</label>
          </div>
                                                    
                                                   
          <div class="form-check col-lg-4">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Braces (Metal)" id="flexCheckChecked9" >
              <label class="form-check-label" for="flexCheckChecked">Braces (Metal) </label>
            </div>
                                                    
            <div class="form-check col-lg-4">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Dental Extractions" id="flexCheckChecked11" >
              <label class="form-check-label" for="flexCheckChecked">Dental Extractions</label>
            </div>
                                                  
            <div class="form-check col-lg-4">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Veneers" id="flexCheckChecked10" >
              <label class="form-check-label" for="flexCheckChecked">Veneers </label>
            </div> 
                                                    
            <div class="form-check col-lg-4">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Other" id="flexCheckChecked12" >
              <label class="form-check-label" for="flexCheckChecked">Other </label>
            </div>
                                                    
            <div class="form-check col-lg-5">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Removable Dentures" id="flexCheckChecked8" >
              <label class="form-check-label" for="flexCheckChecked">Removable Dentures</label>
            </div>
            <div class="form-check col-lg-6">
              <input name='interested_procedure[]' class="form-check-input" type="checkbox" value="Clear Aligners (Invisalign)" id="flexCheckChecked3" >
              <label class="form-check-label" for="flexCheckChecked">Clear Aligners (Invisalign)</label>
            </div>                                              
          </div>
       </div> 
    </div>
  </div>
</div>

<div>
  <div style="float:lef;">
    <button type="button " id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button " id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  </div>
</form>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7 " style="background-color:#05deff">
               <div class="vid">
                 <video class="vid1" controls>
                 <source src="video/video-bg.mp4" type="video/mp4" autoplay>
               </video>
               </div>
            </div>

       </div>
    </div>
    
  </div>
</section>
<!-- first section end -->


<!-- middle div start -->
<section class="mt-5">
	<div class="fluid">
		 <div class="container-fluid">
        <div class="row">
           <div class="col-sm-6 col-md-6 col-lg-6">
             <div class="dentist">
               <img src="image/Dentist.png" class="dentis1 img-fluid">
             </div>
           </div>
           <div class="col-sm-6 col-md-6 col-lg-6">
              <div>
                <h1 class="text-center">DentalGram</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                text ever since the 1500s, when an unknown printer took a galley</p>
              </div>
              <div class="row">
                 <div class="col-sm-6 col-md-6 col-lg-6 colb1 mt-4">
                    <img src="image/icon01.png">
                   <span class="ml-4 dentcont"> Affordable</span>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-6 colb1 mt-3">
                   <img src="image/Icon04_1.png">
                   <span class="ml-4 dentcont"> Dedicated</span>

                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6 col-md-6 col-lg-6 colb1 mt-4">
                    <img src="image/Icon02_1.png">
                    <span class="ml-4  dentcont"> Compassionate</span>

                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-6  colb1 mt-4">
                   <img src="image/icon05.png">
                   <span class="ml-4 dentcont"> Expericened</span>

                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6 col-md-6 col-lg-6 colb1 mt-4">
                    <img src="image/icon03.png">
                    <span class=" ml-4 dentcont"> Comprehensive</span>

                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-6 colb1 mt-4">
                   <img src="image/Icon06_0.png">
                   <span class="ml-4 dentcont"> Effective</span>

                 </div>
              </div>
           </div>

        </div>
     </div>
	</div>
</section>
<br>
<!-- middle div end -->

<!-- third section start -->
<section>
<div class="dental img-fluid">
   <div class="container ">
             <h3 class="text-center mb-5 p-5">Why Choose Dentalgram?</h3>
      <div class="row dentt">

         <div class="col-lg-6 col-md-6 col-sm-6 ">
           <div class="cd dent1">
             <div class="card ">
              <div class="card-body">
                 <img src="image/Icon01_0.png" alt="" class="img-fluid rounded-circle  ">
                 <h4 style="color: #05deff">Qualified Dentists</h4>
                 <p>We have a team of Qulaified dentists and staff who are aviable on the site. we will find the best dentist for you.</p>
              </div>
           </div>
          </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
           <div class="cd ">
             <div class="card">
              <div class="card-body">
                 <img src="image/Icon02_0.png" alt="" class="img-fluid rounded-circle  ">
                 <h4 style="color: #05deff">Emergancy Priority</h4>
                 <p>Our dental offices know what an dental emergency is and give priority treament to such cases.</p>
              </div>
           </div>
          </div>
          </div>

      </div>


      <div class="row mt-4 dent2 ">

         <div class="col-lg-6 col-md-6 col-sm-6">
           <div class="cd">
             <div class="card">
              <div class="card-body">
                 <img src="image/Icon03_0.png" alt="" class="img-fluid rounded-circle  ">
                 <h4 style="color: #05deff">Centrally Located</h4>
                 <p>We will connect you to the best dental clinic located at easy to acess location near you</p>
              </div>
           </div>
          </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
           <div class="cd ">
             <div class="card">
              <div class="card-body">
                 <img src="image/Icon04_0.png" alt="" class="img-fluid rounded-circle  ">
                 <h4 style="color: #05deff">Kids Friendly</h4>
                 <p>We take great care to amke dental visits comfortable for your little ones.</p>
              </div>
           </div>
          </div>
          </div>
          
      </div>


   </div>
</div>
</section>
<!-- third section end -->



<!-- fifth section start -->
   <section  >
    <div class="background-image  img-fluid">
         <div class="container ">
            <div class="text-capitalize  py-3">
        <h1 class="text-center">dentalGram</h1>
        <p class="text-center">
          ours state of arts dental gram offices following dental treatment.
        </p>
      </div>
            <div class="row">
                <div class="col-sm-6  col-md-6 col-lg-6 lock">
                      <div class="card1 ">
                             <img src=" image/Icon01.png" class="icon-img " /> 
                          <span>Emergency Dentistry</span>               
                          </div>
                </div>
                <div class="col-sm-6  col-md-6 col-lg-6 lock1">
                      <div class="card2 ">
                          <img src=" image/Icon07.png" class="icon-img" />    
                          <span>Dental Implants</span>               
                          </div>
                </div>

            </div>
            <div class="row ">
                <div class="col-sm-6  col-md-6 col-lg-6">
                      <div class="card2">
                          <img src=" image/Icon07.png"class="icon-img" />    
                          <span>Invisaling Clear Braces</span>               
                          </div>
                </div>
                <div class="col-sm-6  col-md-6 col-lg-6">
                      <div class="card1">
                          <img src=" image/Icon10.png" class="icon-img" />    
                          <span>Preventative Dentistry</span>               
                          </div>
                </div>

            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-6 col-lg-6 lock">
                      <div class="card1 ">
                             <img src=" image/Icon03.png" class="icon-img " /> 
                          <span>Emergency Dentistry</span>               
                          </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 lock1">
                      <div class="card2">
                          <img src=" image/Icon11.png" class="icon-img1" />    
                          <span>Dental Implants</span>               
                          </div>
                </div>

            </div>
            <div class="row ">
                 <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="card2">
                          <img src=" image/Icon10.png"class="icon-img" />    
                          <span>Invisaling Clear Braces</span>               
                          </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="card1">
                          <img src=" image/Icon12.png" class="icon-img" />    
                          <span>Preventative Dentistry</span>               
                          </div>
                </div>

            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-6 col-lg-6 lock">
                      <div class="card1 ">
                             <img src=" image/Icon05.png" class="icon-img " /> 
                          <span>Emergency Dentistry</span>               
                          </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 lock1">
                      <div class="card2">
                          <img src=" image/Icon08.png" class="icon-img1" />    
                          <span>Dental Implants</span>               
                          </div>
                </div>

            </div>
            <div class="row  ">
                <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="card2">
                          <img src=" image/Icon10.png"class="icon-img" />    
                          <span>Invisaling Clear Braces</span>               
                          </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="card1">
                          <img src=" image/Icon08.png" class="icon-img1" />    
                          <span>Preventative Dentistry</span>               
                          </div>
                </div>

            </div>
            
        </div>
         
    </div>   
</section>
<!-- fifth section end -->

<!-- sixth section start -->
 <section>
  <div class="jumbotron img-jmbo img-fluid">
    <div class="container">
      <div class="DentistEmergency text-center col-md-4 col-sm-4 img-fluid">
      <h4 class="emer">Emergency??</h4>
      <p class="">We Fondly Welcome New Patient & Dental Emergency!</p>
      <button class="btn-primary side1  ">Book an Appoitment</button>
      </div>
    </div>
  </div>
</section>

<!-- sixth sectio end -->

<!-- footer start -->
<section>
	<div class="fluid footer text-white">
		<div class="container footer1">
			 <div class="row ">
			 	 <div class="col-sm-12 col-md-6 col-lg-6 ">
			 	 	<img src="image/logo.png" class="logo1 img-fluid"><br>
			 	 	 <img src="image/facebook.png">
           <img src="image/twitter.png">
			 	 	 <img src="image/instagram.png">
           <img src="image/Youtube.png">
			 	 	 <br><br>

			 	 	<span clas="logo-contain">Dentalgram provides you digital solution <br>for Dentail offices and Dental Treatment<br><br>
                        <i class="fa fa-phone comni"></i>+1-647366-933<br>
                        <i class="fa fa-envelope comni"></i>info@dentalgram.com<br><br>
                        <button class="cont">Contact Us</button>
			 	 	 </span>
			 	 </div>
			 	 <div class="col-sm-12 col-md-6 col-lg-6 mt-2 Downlod">

                    <div class="card  down text-center">
                      <h3 class="mt-4 ">Download our App</h3>
                      <img src="image/blackplay1.jpg" class="img-fluid mt-3 iconn mx-auto">
                      <img src="image/blackapp.png" class="img-fluid iconn mx-auto mt-2">
                    </div>

			 	 </div>
			 </div>
		</div>
	</div>
</section>
<!-- footer end -->
<!-- last footer start -->
<section>
   <div class="fluid" style="background-color:#05deff ;">
    <div class="container p-3">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
           <h6>2022 @DentalGram.Inc.All Right Reserved</h6>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
            <h6>Term & Condition | Privacy Policy | About Us</h6>
        </div>
     </div>

    </div>
    </div>
</section>
<!-- last faster end -->

<script type="text/javascript">
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>


</body>
</html>