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
                <h1>Bachelor of Financial Engineering (Hons.) </h1>
                <div class="course-faculty">Faculty of Management (FOM)</div>
            </div>
            <p>
            <strong> (R/343/6/0201) 07/21 (A7351) </strong>
            </p>
        </div>
    </div>
    <p>
    The three-and-a-half-year programme equips students with the knowledge blend in IT, mathematics and finance as well as financial modelling skills crucial for the financial technology (FINTECH) industry. The programme will provide students with financial acumen and thorough understanding of strategic technology in business finance. Students will delve into fundamental financial subjects such as Principles of Finance, Investment, Financial Derivatives, Mathematics for Finance and others. The finance fundamentals are then supplemented with fintech-related subjects to produce tech-savvy and competitive graduates. The subjects included are Financial Modelling, Mathematical Programming, Digital Transformation Technologies, Analytical Programming, Monte Carlo Simulation Technique and Numerical Analysis. In addition, hands-on practice with finance-related software and database such as Datastream and Bloomberg for their Research Project greatly enhance their experience and resumes that will impress potential employers.
    </p>

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
<button class="tablinks" onmouseover="openCity(event, 'Career Prospects')">Career Prospects</button>

  
</div>

<div id="Entry Requirements" class="tabcontent">
  <h3>Entry Requirements</h3>
 <li>Pass Foundation/Matriculation studies from a recognised institution with a minimum CGPA of 2.50 AND a Credit in Mathematics AND a Pass in English at SPM Level or its equivalent; OR</li>
 <br>
 <li>Pass STPM or its equivalent with a minimum Grade C+ (GP 2.33) in 2 subjects AND a Credit in Mathematics AND a Pass in English at SPM Level or its equivalent; OR</li>
 <br>
 <li>Pass A-Level with a minimum of Grade D in 2 subjects AND a Credit in Mathematics AND a Pass in English at SPM Level or its equivalent; OR </li>
 <br>
 <li> Pass UEC with a minimum of Grade B in at least five (5) subjects inclusive of Mathematics and English; OR </li>
 <br>
 <li> Pass STAM with a minimum Grade Jayyid (Good) in 2 subjects AND a Credit in Mathematic AND a Pass in English at SPM Level or its equivalent
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            Management
                            <br>
                            <br>
                            <li>Mathematics for Finance</li>
                            <br>
                            <li>Accounting for Decision Making</li>
                            <br>
                            <li>Personal Finance</li>
                            
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                          Mathematical Programming
                            <br>
                            <br>
                            <li>Stochastic Processes and Applied Probability</li>
                            <br>
                            <li>Investments</li>
                            <br>
                            <li>Discrete Structures and Probability</li>
                            <br>
                            <li>Entrepreneurial Finance</li>
                            <br>
                            <li>International Finance</li>
                            <br>
                        </li>
                    </ul>
                
</div>

<div id="Career Prospects" class="tabcontent">
  <h3>Career Prospects</h3>
 <p>Finance Consultant, Financial Engineer, Researchers, Analysts, Executives and Finance Managers, Investment Bankers, Risk Manager, Hedge Fund Manager, Financial Planner, Trade Finance Officer, Risk Analyst and Academician.</p>
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
