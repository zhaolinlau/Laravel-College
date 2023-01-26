<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: black;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #DCDCDC;
}

.right {
  right: 0;
  background-color: LightSteelBlue;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

.button {
  background-color: #4682B4;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button {border-radius: 12px;}

</style>
</head>
<body>

<div class="split left">
    <div class="course border-top">
        <div class= row>
            <div class="col-md-6">
                <h1>Bachelor of Information Technology (Hons.) Information Systems</h1>
                <div class="course-faculty">Faculty of Computing and Informatics (FCI)</div>
            </div>
            <p>
            <strong> (R2/481/6/0388) 06/24 (A5216)</strong>
            </p>
        </div>
    </div>
    <p>
    In this information-driven 21st century, computerized information systems are playing 
    key roles to the success of organizations. Hence, there is an increasing demand for 
    information systems graduates that are capable to design, develop and implement effective
     digital solutions to meet the needs for information and decision support of organizations.
    </p>
     <p>
    This three-year programme prepares students with a strong foundation in information 
    systems applications development as well as current and emerging technologies related 
    to information systems. The knowledge and skills are essential not only in using 
    information systems effectively, but also to contribute significantly in planning, 
    design, implement and maintain information systems solutions for critical business 
    problems. Graduates of this programme will take leading roles in shaping our information-driven future.
    </p>
  </div>
</div>

<div class="split right">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<div class="tab">
<button class="tablinks" onmouseover="openCity(event, 'Entry Requirements')">Entry Requirements</button>
<button class="tablinks" onmouseover="openCity(event, 'Programme Structure')">Programme Structure</button>
<button class="tablinks" onmouseover="openCity(event, 'Career Prospects')">Career Prospects</button>

  
</div>

<div id="Entry Requirements" class="tabcontent">
  <h3>Entry Requirements</h3>
 <li>Pass Foundation / Matriculation studies from a recognised institution and a Credit in Mathematics at SPM Level or its equivalent; OR</li>
 <br>
 <li>Pass STPM or its equivalent with a minimum Grade C (GP 2.00) in any 2 subjects a AND a Credit in Mathematics at SPM Level or its equivalent; OR</li>
 <br>
 <li>Pass A-Level with a minimum of Grade D in any 2 subjects AND a Credit in Mathematics at SPM Level or its equivalent; OR </li>
 <br>
 <li> Pass UEC with a minimum of Grade B in at least five (5) subjects inclusive of Mathematics and English; OR</li>
 <br>
 <li> Pass DKM /DLKM/DVM with a minimum CGPA of 2.50. Candidates with CGPA below 2.50 MUST have at least two (2) years of work experience in the related field.**
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            Mathematics for Information Systems I
                            <br>
                            <br>
                            <li>Mathematics for Information Systems II</li>
                            <br>
                            <li>Programming Fundamentals</li>
                            <br>
                            <li>Professional Development</li>
                            <br>
                            <li>Management</li>
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                          Software Engineering Fundamentals
                            <br>
                            <br>
                            <li>Operating Systems</li>
                            <br>
                            <li>Object Oriented Analysis & Design</li>
                            <br>
                            <li>Computer Networks</li>
                            <br>
                            <li>Advanced Database</li>
                         
                        </li>
                    </ul>
                
</div>

<div id="Career Prospects" class="tabcontent">
  <h3>Career Prospects</h3>
 <p>Career Prospects: Application Developer, Database Administrator, Business Analyst, IT Consultant, Information Systems Manager.</p>
</div>


<div class="clearfix"></div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</div>
     
</body>
</html> 
