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
                <h1>Diploma in Finance</h1>
                <div class="course-faculty">Faculty of Management (FOM)</div>
            </div>
            <p>
            <strong> (N/343/4/0259) 05/24 (MQA/PSA11998) </strong>
            </p>
        </div>
    </div>
    <p>
    This programme is designed to empower students with technical and 
    analytical skills in developing solutions for financial and business issues. 
    Students will be equipped with soft and management skills in order to 
    meet industry needs. The programme also prepares the students with 
    independent and critical learning skills through its curriculum and industry 
    exposure related to finance, investment and banking.
    </p>
    <p>
    After completion of the diploma programme, you can opt for a related 
    degree programme from either the Faculty of Management (MMU 
    Cyberjaya campus) or the Faculty of Business (MMU Melaka campus).
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
  
</div>

<div id="Entry Requirements" class="tabcontent">
  <h3>Entry Requirements</h3>
 <p>Upon completing the diploma programme, students who intend to pursue 
   their studies in MMU will need to meet the entry requirements of the 
   bachelor’s degree programme of their choice.</p>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            English
                            <br>
                            <br>
                            <li>Business Mathematics</li>
                            <br>
                            <li>Principles of Management</li>
                            <br>
                            <li>Macroeconomics</li>
                            <br>
                            <li>Critical Thinking</li>
                            <br>
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                            Effective Communications Skills
                            <br>
                            <br>
                            <li>Principles of Managerial Accounting</li>
                            <br>
                            <li>Personal Finance</li>
                            <br>
                            <li>Business Law</li>
                            <br>
                            <li>Practical Training</li>
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
