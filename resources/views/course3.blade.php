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
                <h1>Diploma in Accounting</h1>
                <div class="course-faculty">Faculty of Business (FOB)</div>
            </div>
            <p>
            <strong> (R/344/4/0371) 06/20 (A6297) </strong>
            </p>
        </div>
    </div>
    <p>
    The programme has been designed with the objective of exposing students to the latest standards, trends and issues in the areas of accounting such as financial accounting, management accounting, auditing, taxation and accounting information system. This programme incorporates value added courses with applications of IT knowledge such as e-commerce and computer applications.
    </p>
    <p>Students will also be equipped with some business skills such as economics, finance, investment, entrepreneurship and management, and will also be exposed to the real world experience through internship programme in various accounting firms and selected organisations. This programme is also recognised by professional accounting bodies at the international level.</p>
    <p>After completion of the diploma programme you can opt for a related degree programme from either FOB or FOM, except for the Bachelor of Financial Engineering (Hons.)</p>

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
 <li>Pass STAM with a minimum Grade of Maqbul (Pass) AND a Credit in Mathematics and a Pass in English at SPM Level or its equivalent; OR </li>
 <br>
 <li>Pass STPM or its equivalent with a minimum of Grade C (GP 2.00) in at least one (1) subject; OR </li>
 <br>
 <li> Pass UEC with a minimum of Grade B in at least three (3) subjects inclusive of Mathematics and a Pass in English; OR </li>
 <br>
 <li> Pass SKM Level 3 in a related field AND Pass SPM with a Credit in Mathematics and a Pass in English; OR
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            Mathematics
                            <br>
                            <br>
                            <li>Computer & Software Applications</li>
                            <br>
                            <li>Financial Accounting 1</li>
                            <br>
                            <li>Introductory Microeconomics</li>
                            
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                            Financial Accounting 2
                            <br>
                            <br>
                            <li>Introductory Macroeconomics</li>
                            <br>
                            <li>Principles of Finance</li>
                            <br>
                            <li>Management Accounting 1</li>
                            <br>
                            <li>Business Communication in the Digital Age</li>
                            <br>
                            <li>Elective 1</li>
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
