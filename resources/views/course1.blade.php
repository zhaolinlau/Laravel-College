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
                <h1>Diploma in Creative Multimedia</h1>
                <div class="course-faculty">Faculty of Management (FOM)</div>
            </div>
            <p>
            <strong> (N/213/4/0356) 11/24 (MQA/PSA12833) </strong>
            </p>
        </div>
    </div>
    <p>
    The programme focuses on nurturing creative mindset and the ability to solve design
        problems through creative conventions; the ability to empower key visual components 
        and practical processes in solving complex communication issues; as well as establish 
        creative design innovations which purposes translated into entertainment, advertising, 
        online media, motion graphics and multimedia application provided to a range of 
        industry needs. Creative Multimedia programme is designed based on contemporary digital
        media trend,covers a wide spectrum of digital media technical modules ranging from 
        computer graphics, digital imaging, videography and interactive media.
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
 <li>Pass SPM/O-Level or its equivalent with a minimum of Grade C in at least three (3) subjects; OR</li>
 <br>
 <li>Pass UEC with a minimum of Grade B in at least three (3) subjects; OR" </li>
 <br>
 <li>Pass STPM or its equivalent with a minimum of Grade C (GP 2.00) in at least one (1) subject; OR </li>
 <br>
 <li> Pass STAM with Grade Maqbul (Pass); OR </li>
 <br>
 <li> Recognised Creative Multimedia Certificate or its equivalent; OR
 </li>
</div>


<div id="Programme Structure" class="tabcontent">
  <h3>Programme Structure</h3>
  
                    <p>Year 1</p>
                    <ul>
                        <li class="course-text">
                            3D Modelling
                            <br>
                            <br>
                            <li>Visual Communication</li>
                            <br>
                            <li>Drawing Fundamental/li>
                            <br>
                            <li>Internet Application</li>
                            
                        </li>
                    </ul>
               
             
                    <p>Year 2</p>
                    <ul>
                        <li class="course-text">
                            Creative Design 2
                            <br>
                            <br>
                            <li>Principles of Managerial Accounting</li>
                            <br>
                            <li>Creative Multimedia Project</li>
                            <br>
                            <li>Information Design</li>
                            <br>
                            <li>Generative Audio Visual</li>
                            <br>
                            <li>Digital Sound Protection</li>
                            <br>
                        </li>
                    </ul>
                
</div>

<div id="Career Prospects" class="tabcontent">
 <h3>Career Prospects</h3>
 <li>New Media artist, UX/UI Interface designer,Real-time event 
designer,Online media designer,Projection Mapping artist, Concept 
Artist, Visualiser, Multimedia Designer,Graphic Designer, Web Designers, 
Layout Artists, Videographer, Video Editor, Video Compositor, 2D 
Animators, 3D Animators, Modelers, Storyboard artists, Art Director, 
Creative Director , CG Supervisor, Effects Designer, Environment 
 Designer, Video Game Animator, Video Game Artist, Visual Effects Artist, 
Entrepreneur, Illustrators, Photographer</li>
 
 
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
