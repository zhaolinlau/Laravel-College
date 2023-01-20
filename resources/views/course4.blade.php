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
                <h1>Diploma in Information Technology</h1>
                <div class="course-faculty">Faculty of Information Science & Technology (FIST)</div>
            </div>
            <p>
            <strong> (R2/481/4/0229) 12/22 (A7461) </strong>
            </p>
        </div>
    </div>
    <p>
    This programme equips students with relevant ICT knowledge and skills to meet the technological needs of an organisation. Through the 2-year programme, students will acquire essential technical skills and hands-on experience in systems analysis and design, programming, web design and development, database design, operating systems, data communications and networking.
    </p>
    <p>Students will also learn about professional ethics and develop communication, presentation and teamwork skills that are deemed critical for success in today’s workforce. Both the technical and soft skills will prepare them for their degree studies, as well as for future employment.</p>
    <p>Upon completion of the diploma programme, students can opt for a related degree programme offered by the Faculty of Information Science and Technology (FIST) or Faculty of Computing and Informatics (FCI).</p>

    <div class="col-12">
		<!--<button class="btn btn-primary" type="button">Enquire Now</button>-->
        <button class="button button4">ENQUIRE NOW </button>
	</div>
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
  
</div>

<div id="Entry Requirements" class="tabcontent">
  <h3>Entry Requirements</h3>
 <li>Pass SPM/O-Level or its equivalent with a minimum of Grade C in at least three (3) subjects inclusive of Mathematics and a Pass in English; OR</li>
 <br>
 <li>Pass UEC with a minimum of Grade B in at least three (3) subjects inclusive of Mathematics and a Pass in English; OR</li>
 <br>
 <li>Pass STPM or its equivalent with a minimum of Grade C (GP 2.00) in one (1) subject AND a Credit in Mathematics at SPM Level or its equivalent; OR </li>
 <br>
 <li> Pass STAM with a minimum grade of Maqbul (Pass) AND a Credit in Mathematics at SPM Level or its equivalent; OR </li>
 <br>
 <li> Pass in SKM Level 3 or any qualifications equivalent to Certificate (Level 3, MQF) AND a Credit in Mathematics at SPM Level or its equivalent.*
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            Computer Concepts and Applications
                            <br>
                            <br>
                            <li>Ethics and Cybertechnology</li>
                            <br>
                            <li>Mathematical and Statistical Techniques</li>
                            <br>
                            <li>U1</li>
                            
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                           Program Design
                            <br>
                            <br>
                            <li>Computer Architecture</li>
                            <br>
                            <li>Principles of Finance</li>
                            <br>
                            <li>Discrete Structures and Probability</li>
                            <br>
                            <li>Data Communications and Networking</li>
                            <br>
                            <li>U2</li>
                            <br>
                        </li>
                    </ul>
                
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
