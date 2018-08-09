<!DOCTYPE html>
<html lang="en">
<html lang="{{ app()->getLocale() }}">
<head>
<title>EHRS</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
<body id="myPage">

<style>
              body {
                  font-family: 'Raleway', Arial, Helvetica, sans-serif;
              }

              .container {
                  padding: 2px 16px;
                  background-color: #f1f1f1;
              }

              .button {
                display: inline-block;
                border-radius: 4px;
                background-color:#00cc66;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
              }

              .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }

              .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
              }

              .button:hover span {
                padding-right: 25px;
              }

              .button:hover span:after {
                opacity: 1;
                right: 0;
              }

              table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
              }

              th {
                  border: 1px solid #dddddd;
                  text-align: center;
                  padding: 8px;
              }

              td {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
              }

              .containerer{
                right: 18px;
                top: 18px;
                width:100%;
                height:40%;
            }
            .navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}



</style>
</head>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" 
       href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="{{ url('') }}" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EHRS</a>
    <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Our Team</a>
    <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Treatment</a>
    <a href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
    <a href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doctor</a>
    <a href="{{ url('/feedback3') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Feedback</a>
    <a href="{{ url('/inputfeedbac') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Feedback & Review</a>
    
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
</div>


<!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity">
    <img src="images/homepage.png" alt="homepage"  style="width:100%;min-height:350px;max-height:600px;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" title="Go To EHRS">Electronic Healthcare Record System</button>  
    </div>
  </div>



<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <center><h4>Welcome to Electronic Healthcare Record System</h4>
        <h5>EHRS <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
        <p>Electronic Healthcare Record System</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Perak, Malaysia</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +012-1515151</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  ehrs@mail.com</p></center>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>© copyright ehrs.com</p>
      </footer>
    </div>
</div>

<!-- Team Container -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1 w3-center" id="team">
  <h1>OUR TEAM</h1>
  <p>Meet the team - our doctors:</p>

  <div class="w3-row"><br>

    <div class="w3-quarter">
      <img src="images/doc1.png" width="200" height="200" class="w3-circle w3-hover-opacity">
      <h3>Rosdi Ramli</h3>
      <p>General Medicine</p>
    </div>

    <div class="w3-quarter">
      <img src="images/doc3.png" width="200" height="200" class="w3-circle w3-hover-opacity">
      <h3>Marina Harumi</h3>
      <p>Obstetric & Gynaecology</p>
    </div>

    <div class="w3-quarter">
      <img src="images/doc2.png" width="200" height="200" class="w3-circle w3-hover-opacity">
      <h3>Samantha Steven</h3>
      <p>Junior Doctor</p>
    </div>

    <div class="w3-quarter">
      <img src="images/doc4.png" width="200" height="200" class="w3-circle w3-hover-opacity">
      <h3>Ahmad Farid</h3>
      <p>Junior Doctor</p>
    </div>
  </div>
  <br>
  <button class="button" style="vertical-align:middle"
          onclick="document.getElementById('id02').style.display='block'" >
          <span>View</span></button>
</div>

<!-- Modal -->
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <center><h4>Our Doctors</h4></center>
      </header>
      <div class="w3-padding">
          <table>
            <tr>
              <th  class="w3-dark-grey">Doctors</th>
              <th colspan="2" class="w3-dark-grey">Details</th>
            </tr>
            
            <tr>
              <td rowspan="4"><img src="images/doc1.png" width="200" height="200"></td>
              <td>Specialty:</td>
              <td>General Medicine</td>
            </tr>
            
            <tr>
              <td>Sub-Specialty</td>
              <td>None</td>
            </tr>
            
            <tr>
              <td>Degrees:</td>
              <td>A.M. MBBS (Mal), MRCP (UK)</td>
            </tr>
            
            <tr>
              <td>Office:</td>
              <td>Clinic</td>
            </tr>

          <tr>
              <td  class="w3-green">Rosdi Bin Ramli</td>
              <td>Work Days:</td>
              <td>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday (On Call)</td>
            </tr>
            
          </table>

          <table>
          <tr>
            <th  class="w3-dark-grey">Doctors</th>
            <th colspan="2" class="w3-dark-grey">Details</th>
          </tr>
          
          <tr>
            <td rowspan="4"><img src="images/doc3.png" width="200" height="200"></td>
            <td>Specialty:</td>
            <td>Obstetric & Gynaecology</td>
          </tr>
          
          <tr>
            <td>Sub-Specialty</td>
            <td>Gynae-Oncology</td>
          </tr>
          
          <tr>
            <td>Degrees:</td>
            <td>Bachelor of Medical Science (UKM), MD (UKM), Masters in Medicine (Obstetrician and Gynaecologist) (USM)</td>
          </tr>
          
          <tr>
            <td>Office:</td>
            <td>Clinic</td>
          </tr>

          <tr>
            <td  class="w3-green">Marina Harumi</td>
            <td>Work Days:</td>
            <td>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday (On Call)</td>
          </tr>         
        </table>

        <table>
          <tr>
            <th  class="w3-dark-grey">Doctors</th>
            <th colspan="2" class="w3-dark-grey">Details</th>
          </tr>
          
          <tr>
            <td rowspan="4"><img src="images/doc2.png" width="200" height="200"></td>
            <td>Specialty:</td>
            <td>Junior Doctor</td>
          </tr>
          
          <tr>
            <td>Sub-Specialty</td>
            <td>Junior Doctor</td>
          </tr>
          
          <tr>
            <td>Degrees:</td>
            <td>MD (USM), MRCP (Edin)</td>
          </tr>
          
          <tr>
            <td>Office:</td>
            <td>Clinic</td>
          </tr>

          <tr>
            <td  class="w3-green">Samantha Steven</td>
            <td>Work Days:</td>
            <td>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday (On Call)</td>
          </tr>         
        </table>

        <table>
          <tr>
            <th  class="w3-dark-grey">Doctors</th>
            <th colspan="2" class="w3-dark-grey">Details</th>
          </tr>
          
          <tr>
            <td rowspan="4"><img src="images/doc4.png" width="200" height="200"></td>
            <td>Specialty:</td>
            <td>Junior Doctor</td>
          </tr>
          
          <tr>
            <td>Sub-Specialty</td>
            <td>Junior Doctor</td>
          </tr>
          
          <tr>
            <td>Degrees:</td>
            <td>MBBS (Mal), FRCS (Edin)</td>
          </tr>
          
          <tr>
            <td>Office:</td>
            <td>Clinic</td>
          </tr>

          <tr>
            <td  class="w3-green">Ahmad Farid Bin Zahid</td>
            <td>Work Days:</td>
            <td>Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday (On Call)</td>
          </tr>         
        </table>
      </div>
      
    </div>
</div>

<!-- Work Row -->
<div class="w3-container w3-padding-64 w3-center" id="work">

  <div>
    <h1>TREATMENT PACKAGES</h1>
    <br>
  </div>

  <div class="w3-row-padding">
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-green w3-xlarge w3-padding-32">Screening Package</li>
        <li class="w3-padding-16"><b>Open for all</b></li>
        <li class="w3-padding-16">Physcial Examination & Consultation By specialist Doctor</li>
        <li class="w3-padding-16">Chest X-Ray</li>
        <li class="w3-padding-16">Ultrasound Abdomen</li>
        <li class="w3-padding-16">ECG</li>
        <li class="w3-padding-16">Blood Test</li>
        <li class="w3-padding-16">Stress Test</li>
        <li class="w3-padding-16">Lung function Test</li>
        <li class="w3-light-grey w3-padding-24">
          <h2 class="w3-wide">RM830</h2>
          <span class="w3-opacity">per session</span>
        </li>

      </ul>
    </div>


    <div class="w3-third w3-margin-bottom">   
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
      <li class="w3-green w3-xlarge w3-padding-32">Dietary & Food Services</li>
        <li class="w3-padding-16"><b>Open for all</b></li>
        <li class="w3-padding-16">Provide patient education and also counseling from our dietitian.</li>
        <li class="w3-padding-16">Provide patients who cannot consume sufficient foods to meet their nutritional requirements.</li>
        <li class="w3-padding-16">Inpatient & outpatient counseling</li>
        <li class="w3-padding-16">Planning of menus</li>
        <li class="w3-padding-16">Community services such as giving public talks and education programs</li>
        <li class="w3-padding-16">Dietary Monitoring</li>
        <li class="w3-light-grey w3-padding-24">
          <h2 class="w3-wide">RM100</h2>
          <span class="w3-opacity">per session</span>
        </li>
      </ul>
    </div>
    
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
      <li class="w3-green w3-xlarge w3-padding-32">Women Health Package</li>
        <li class="w3-padding-16"><b>Woman only</b></li>
        <li class="w3-padding-16">Preventive health screening may just save your life. Women should be more aware of their current status. 
                                  Women Health package screens for certain common tests designed specifically to meet the needs of women</li>
        <li class="w3-padding-16">Full Body Check-up</li>
        <li class="w3-padding-16">Breast Ultrasound: Screens for breast cancer and breast abnormalities e.g. cyst, fibroadenoma etc</li>
        <li class="w3-padding-16">Pelvic Ultrasound: Helps diagnose symptoms experienced by women such as pelvic pain, abnormal bleeding or 
                                  other menstrual abnormalities and also enables identification of ovarian and uterine cancers; 
                                  and palpable mass such as ovarian cysts and uterine fibroid.</li>
        <li class="w3-light-grey w3-padding-24">
          <h2 class="w3-wide">RM400</h2>
          <span class="w3-opacity">per session</span>
        </li>
      </ul>
    </div>
  </div>
</div>
 
<!-- Work Row -->
<!-- <div class="w3-container w3-padding-64 w3-center" id="work">

  <div>
    <h1>FEEDBACKS & REVIEWS</h1>
    <br>
  </div>
            
      <div class="containerer">
            <div class="panel panel-default">
              <div class="panel-heading">Panel Heading</div>
              <div class="panel-body">Panel Content</div>
            </div>
       
            <div class="panel panel-default">
              <div class="panel-heading">Panel Heading</div>
              <div class="panel-body">Panel Content</div>
            </div>
      </div>
      
 
</div> -->


          



<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
