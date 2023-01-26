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
                <h1>Bachelor of Engineering (Hons.) Electronics majoring in Computer </h1>
                <div class="course-faculty">Faculty of Engineering (FOE)</div>
            </div>
            <p>
            <strong> (R2/523/6/0166) 06/26 (MQA/FA4866) </strong>
            </p>
        </div>
    </div>
    <p>
    For students aiming for a professional career in computer systems and information technology, 
    this four-year computer engineering programme provides a comprehensive undergraduate training 
    in the design and development of both hardware and software aspects of computers and digital 
    systems. Our graduates are equipped with the knowledge and practical experience on computer 
    hardware, software applications and computer networking.
    </p>
    <p>
    The programme begins with deep embedding of engineering fundamentals such as circuit 
    and signal analysis, field theory, electronics, control theory, power systems, 
    machines and engineering mathematics. The curriculum encompasses specialised training 
    in computer programming, computer organisation and architecture, microcontroller and 
    microprocessor systems, object-oriented programming, high-performance computing, data 
    communications and networking; and followed by advanced modules such as embedded Internet 
    of Things (IoT), Artificial Intelligence (AI) and cybersecurity. Courses in management, 
    economics, accounting and law are included to ensure that graduates are well-rounded and 
    marketable to future employers. Capping off the programme in the third and fourth years are 
    the industrial training, capstone and final year projects, which serve to cultivate skills 
    and capabilities in research, system design, practical problem-solving, and project management.
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
 <li>Pass Foundation/Matriculation studies in related field from a recognised institution; OR</li>
 <br>
 <li>Pass STPM or its equivalent with a minimum of Grade C (GP 2.00) in Mathematics and Physics; OR</li>
 <br>
 <li>Pass A-Level with a minimum of Grade D in Mathematics and Physics; OR </li>
 <br>
 <li> Pass UEC with a minimum of Grade B in at least five (5) subjects inclusive of Mathematics and Physics; OR </li>
 <br>
 <li> Recognised Diploma in Engineering / Engineering Technology or its equivalent with minimum CGPA 2.00; OR
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            Engineering Mathematics 1
                            <br>
                            <br>
                            <li>Electronics 1</li>
                            <br>
                            <li>Circuit Theory</li>
                            <br>
                            <li>Field Theory</li>
                            <br>
                            <li>Computer and Program Design</li>
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                          Engineering Mathematics 3
                            <br>
                            <br>
                            <li>Circuits and Signals</li>
                            <br>
                            <li>Electromagnetic Theory</li>
                            <br>
                            <li>Database Systems</li>
                            <br>
                            <li>Digital Signal Processing</li>
                         
                        </li>
                    </ul>
                
</div>

<div id="Career Prospects" class="tabcontent">
  <h3>Career Prospects</h3>
 <p>Computer Software Engineer, Cybersecurity Engineer, Computer Network Architect, Big data and Cloud-based Computing Engineer, Internet of Things (IoT) Expert, Systems architecture Designer, or Robotics and Automation Engineer.</p>
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
