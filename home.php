<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* 
{
  box-sizing: border-box;
}
body 
{
  margin: 0;
  background-color:#ffeecc; 
}
.mainimg img
{
  width: 100%;
  height: 500px;
}
.navbar 
{
  position: fixed;
  width: 100%;
  /*overflow: hidden;*/
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown 
{
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn 
{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
  margin-left: 50px;
}
.navbar a:hover, .dropdown:hover .dropbtn 
{
  background-color:red;
}
.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-right: 1px solid red;
}
.dropdown-content .header 
{
  background: red;
  padding: 16px;
  color: white;
}
.dropdown:hover .dropdown-content
{
  display: block;
}
/* Create three equal columns that floats next to each other */
.column
{
  border-bottom: 1px solid  #666666;
  float: left;
  width: 25%;
  padding: 10px;
  background-color: #ccc;
  height: 270px;
  border-right: 1px solid  #666666;
}
.column a 
{
  float: none;
  color: black;
  padding: 3px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover
{
  background-color: #ddd;
}
/* Clear floats after the columns */
.row:after
{
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) 
{
  .column 
  {
    width: 100%;
    height: auto;
  }
}
.log
{
  margin-left: 300px;
  background-color: #003366;
}
/*hover for image menu*/
.box
{
  width:370px;
  position: relative;
  overflow: hidden;
  margin-left:80px; 
  float: left;
}
.box img 
{
  width:100%;
  height:300px;
  border:2px solid black;
  border-radius: 50px;  
  opacity: 0.7;
}
.content
{
  color: #fff;
  background-color:rgba(0,0,0,0.8);
  position: absolute;
  top:-100%;
  left: 0%;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  transition: all 0.5s;
  border-radius: 50px;
}
.content p
{
  border-top: 1px solid white;
  border-bottom: 1px solid white;
  padding: 20px 0;
}
.box:hover .content
{
    top: 0;
}
.box a
{
  float: left;
   clear: left;
  font-size: 31.1px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.box content a
{
  width: 50px;
}
.titile
{
  margin-top:50px;
  margin-bottom:0px;
  font-size: 25px;
  margin-left: 130px;
}
.tutor-content
{
  margin-top: 400px;
  margin-left: 100px;
  font-size: 20px;
}
button
{
  margin-top: 50px;
  border-radius: 10px;
  background-color: blue;
  min-width: : 20px;
  padding-right:10px;
  padding: 10px;
  color: White;
  font-size: 20px;
  margin-left:150px;
  margin-bottom: 100px;
} 

/*content for footer*/
.footer
{
  margin-top: 200px;
  background-color:#99b3ff;
  height:261px;
  padding-top:50px;
}
.footer a
{
  color: black;
  text-decoration:none;
  font-size: 18px;
  padding: 30px;
}
.footer p
{
  font-size: 18px;
  margin-left: 15px;
}
</style>
</head>
<body>
     
  <div class="navbar">   
    <a href="home.php">Home</a>
    <div class="dropdown">

      <button class="dropbtn">Tuition
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
          <div class="row">
            <div class="column">
              <h3>School</h3>
              <a href="show_table.php">class 12 Tuition</a>
              <a href="#">class 11 Tuition</a>
              <a href="#">class 10 Tuition</a>
              <a href="#">class 9 Tuition</a>
              <a href="#">class 8 Tuition</a>
              <a href="#">class 7 Tuition</a>
              <a href="#">class 1 to 5 Tuition</a>
              <a href="#">Nursery-KG Tuition</a>
            </div>
            <div class="column">
              <h3>College</h3>
              <a href="#">Btech Tuition</a>
              <a href="#">Bcom Tuition</a>
              <a href="#">BCA Tuition</a>
              <a href="#">Engineering Diploma Tuition</a>
              <a href="#">BBA Tuition</a>
              <a href="#">BSC Tuition</a>
           </div>
            <div class="column">
              <h3>Subject</h3>
              <a href="#">Mathematic</a>
              <a href="#">English</a>
              <a href="#">Science</a>
              <a href="#">Physics</a>
              <a href="#">Hindi</a>
            </div>
            <div class="column">
              <h3>More</h3>
              <a href="#">All Tuitions</a>
              <a href="#">NCERT Solutions</a>
              <a href="#"> CBSC Syllabus</a>
            </div>
          </div>
        </div>
      </div> 

    <div class="dropdown">
      <button class="dropbtn">Exam Coaching
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
          <div class="row">
            <div class="column">
                <h3>Study Abroad</h3>
                <a href="#">IELTS Coaching</a>
                <a href="#">PTE Academic Exam Coaching</a>
                <a href="viewdata_competative.php">GRE Coaching</a>
                <a href="viewdata_competative.php">GMATE Coaching</a>
                <a href="#">TOEFL Coaching</a>
            </div>
            <div class="column">
                <h3>Study In india</h3>
                <a href="#">Engineering Enterance Coaching</a>
                <a href="#">CA Coaching</a>
                <a href="viewdata_competative.php">MBA Enterance Coaching</a>
                <a href="viewdata_competative.php">MCA Enterance Coaching</a>
                <a href="#">Medical enterance  Coaching</a>
                <a href="#">CET enterance  Coaching</a>
            </div>
            <div class="column">
                <h3>Other Exams</h3>
                <a href="viewdata_competative.php">IBPS Exam Coaching</a>
                <a href="viewdata_competative.php">UPSC Exam Coaching</a>
                <a href="viewdata_competative.php">Staff Selection Comission Exam</a>
                <a href="viewdata_competative.php">Bank Clerical Exam</a>
                <a href="viewdata_competative.php">UGC NET Exam coaching</a>
            </div>
            <div class="column">
                <h3>More</h3>
                <a href="viewdata_competative.php">All Exam coaching</a>
                <a href="viewdata_competative.php">UPSC Exam Coaching</a>
                <a href="viewdata_competative.php">Staff Selection Comission Exam</a>
                <a href="viewdata_competative.php">Bank Clerical Exam</a>
                <a href="viewdata_competative.php">UGC NET Exam coaching</a>
            </div>          
          </div>
        </div>
      </div>

    <div class="dropdown">
      <button class="dropbtn">IT Courses
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
          <div class="row">
              <div class="column">
                <h3>Programming Languages</h3>
                <a href="viewdata_it_class.php">Python Training</a>
                <a href="viewdata_it_class.php">Java Training</a>
                <a href="viewdata_it_class.php">.Net Training</a>
                <a href="viewdata_it_class.php">C++ Language</a>
                <a href="viewdata_it_class.php">C Language</a>
              </div>
              <div class="column">
                <h3>IT Training</h3>
                <a href="viewdata_it_class.php">Microsoft Excel Training</a>
                <a href="viewdata_it_class.php">SAP</a>
                <a href="viewdata_it_class.php">Selenium</a>
                <a href="viewdata_it_class.php">Angular.JS</a>
                <a href="viewdata_it_class.php">Amazon Web Services</a>
              </div>
              <div class="column">
                <h3>Other IT Courses</h3>
                <a href="viewdata_it_class.php">PHP</a>
                <a href="viewdata_it_class.php">Java Script Training</a>
                <a href="viewdata_it_class.php">Adobe Photoshop Training</a>
                <a href="viewdata_it_class.php">DevOps Training</a>
                <a href="viewdata_it_class.php">Data Science</a>
              </div>
              <div class="column">
                <h3>More</h3>
                <a href="viewdata_it_class.php">All IT Courses</a>
                <a href="viewdata_it_class.php">Software Training Institutes</a>
              </div>          
            </div>
          </div>
        </div>

      <div class="dropdown">
        <button class="dropbtn">Languages
          <i class="fa fa-caret-down"></i>
        </button>
          <div class="dropdown-content">
            <div class="row">
              <div class="column">
                <h3>Foreign Languages</h3>
                <a href="#">Spoken English</a>
                <a href="#">German Language</a>
                <a href="#">French Language</a>
                <a href="#">Spanish Language</a>
                <a href="#">Japanese Language</a>
              </div>
              <div class="column">
                <h3>Indian Languages</h3>
                <a href="#">Hindi Language</a>
                <a href="#">Kannada Language</a>
                <a href="#">Gujarati Language</a>
                <a href="#">Tamil Language</a>
                <a href="#">Marathi Speaking</a>
              </div>
              <div class="column">
                <h3>Other Languages</h3>
                <a href="#">Chines Language</a>
                <a href="#">Arabic Language</a>
                <a href="#">Russian Language</a>
                <a href="#">Italian Language</a>
                <a href="#">Sanskrit Language</a>
              </div>
              <div class="column">
                <h3>More</h3>
                <a href="#">All Languages</a>
              </div>          
            </div>
          </div>
        </div>
        
      <div class="dropdown">
        <button class="dropbtn">Hobby Classes
          <i class="fa fa-caret-down"></i>
        </button>
          <div class="dropdown-content">
            <div class="row">
              <div class="column">
              <h3>Dance & Music</h3>
              <a href="viewdata_hobby_clases.php">Dance</a>
              <a href="viewdata_hobby_clases.php">Hindustani Music</a>
              <a href="viewdata_hobby_clases.php">Guitar</a>
              <a href="viewdata_hobby_clases.php">Carnatic Music</a>
              <a href="viewdata_hobby_clases.php">Keyboard</a>
          </div>
          <div class="column">
              <h3>Hobbies</h3>
              <a href="viewdata_hobby_clases.php">Yoga</a>
              <a href="viewdata_hobby_clases.php">Cooking</a>
              <a href="viewdata_hobby_clases.php">Photography</a>
              <a href="viewdata_hobby_clases.php">Drawing</a>
              <a href="viewdata_hobby_clases.php">Painting </a>
          </div>
          <div class="column">
              <h3>Other Hobbies</h3>
              <a href="viewdata_hobby_clases.php">Violin</a>
              <a href="viewdata_hobby_clases.php">Piano</a>
              <a href="viewdata_hobby_clases.php">Makeup</a>
              <a href="viewdata_hobby_clases.php">Handwriting</a>
          </div>
          <div class="column">
              <h3>More</h3>
              <a href="#">All Hobby classes</a>
          </div>          
        </div>
      </div>
    </div>
    <a class="log" href="loging.php">Login</a>
  </div>
    <div class="mainimg">
      <img src="img/bg4.jpg">
    </div>
      <h2 style="font-size: 40px">Choose from 1000+ catogories</h2>   
    <div class="titile">

      <label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspTuition &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp Exam Pre &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp&nbsp IT Courses</label>
  </div>
  <div class="box">
    <img src="img/hy3.jpg">
      <div class="content">
       <a href="#">class 12 Tuition</a>
          <a href="#">class 11 Tuition</a>
          <a href="#">class 10 Tuition</a>
          <a href="#">class 1 to 5 Tuition</a>
          <a href="#">View more</a>
      </div>
  </div>
  <div class="box">
    <img src="img/hy8.jpg" alt="image">
      <div class="content">
        <a href="viewdata_competative.php">IBPS Exam Coaching</a>
        <a href="viewdata_competative.php">UPSC Exam Coaching</a>
        <a href="viewdata_competative.php">Staff Selection Comission Exam</a>
        <a href="viewdata_competative.php">Bank Clerical Exam</a>
        <a href="viewdata_competative.php">View more</a>
      </div>
    </div>
  </div>
  <div class="box">
    <img src="img/hy4.jpg" alt="image">
      <div class="content">
        <a href="viewdata_it_class.php">Python Training Classes</a>
        <a href="viewdata_it_class.php">Java Training Classes</a>
        <a href="viewdata_it_class.php">.Net Training Classes</a>
        <a href="viewdata_it_class.php">C++ Language Classes</a>
        <a href="viewdata_it_class.php">View more</a>
      </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="titile">
    <label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp Languages  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp Music &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp&nbsp Dance</label>
  </div>
  <div class="box">
    <img src="img/hy9.jpg" alt="image">
      <div class="content">
        <a href="#">German Language</a>
        <a href="#">French Language</a>
        <a href="#">Spanish Language</a>
        <a href="#">Japanese Language</a>
        <a href="#">View more</a>          
      </div>
  </div>
  <div class="box">
    <img src="img/hy15.jpg" alt="image">
      <div class="content">
        <a href="viewdata_hobby_clases.php">Hindustani Music</a>
        <a href="viewdata_hobby_clases.php">Guitar classes</a>
        <a href="viewdata_hobby_clases.php">Carnatic Music classes</a>
        <a href="viewdata_hobby_clases.php">Singing Training classes</a>
        <a href="viewdata_hobby_clases.php">View more</a>     
      </div>
  </div>
  <div class="box">
    <img src="img/hy6.jpg" alt="image">
      <div class="content">
        <a href="viewdata_hobby_clases.php">Bollywood Dance classes</a>
        <a href="viewdata_hobby_clases.php">Choreography classes</a>
        <a href="viewdata_hobby_clases.php">Kathak classes</a>
        <a href="viewdata_hobby_clases.php">Bharatnatyam classes</a>   
        <a href="viewdata_hobby_clases.php">View more</a>     
      </div>
  </div>
  <div class="tutor-content">
    <h2>Looking to teach?</h2>
    <p>Join This site and connect with more students on the platform. Create a strong profile and grow your network.</p>
  </div>

  <button onclick="myFunction()">Sign up as Tutor</button>
  <div class="footer">
    <a href="#">about us</a>
    <a href="#">Term of use</a>
    <a href="#">Privacy policy</a><br><br><br>
    <a href="#">Ahmedabad</a>
    <a href="#">Bhavnagar</a>
    <a href="#">Banglore</a>
    <a href="#">Delhi</a>
    <a href="#">Heydrabad</a>
    <a href="#">Varanasi</a>
    <a href="#">Rajkot</a>
    <a href="#">Baroda</a>
    <p>This is India's largest network of most trusted tutors and institutes. Over 25 lakh students rely on UrbanPro.com, to fulfill their learning requirements across 1,000+ categories. Using Learnerfan.com, parents, and students can compare multiple Tutors and Institutes and choose the one that best suits their requirements. More than 6.5 lakh verified Tutors and Institutes are helping millions of students every day and growing their tutoring business on UrbanPro.com. Whether you are looking for a tutor to learn mathematics, a German language trainer to brush up your German language skills or an institute to upgrade your IT skills, we have got the best selection of Tutors and Training Institutes for you.</p><p>Vrundavan Learning Pvt Ltd © 2020-2020 All Rights Reserved.
  <a class="btn btn-primary" href="admin_login.php">Admin</a>
</p>
  </div>
</body>
</html>

<script>
   function myFunction() 
    {
      window.location.href = "sign_as.php";
    }
</script>