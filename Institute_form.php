<!DOCTYPE html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<style>
body
{
    background-image: url(img/cropped-3837.jpg);
}
#form
{
    margin-top: 40px;
    background-color:white;
    min-height:40px;
    padding:2px 25px 10px; 
    height: 830px;
}
.Registration
{
    font-size:25px;
    border-bottom: 1px solid black;
    border-top: 1px solid black;
    font-family: Agency ;
    font-weight:700px;
    opacity: 0.8;
    
}
.text
{
  font-size: 12px;   
} 
label
 {
    font-size: 14px;
 }
.btn-primary
{
    padding:10px;
    width:100%;
}
 
</style>
<body>
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
          <center><b class="Registration">Institute Registration Form</b></center>
            <form action="insert_institute_data.php" method="post">
          <div class="form-group">
                        
            <label>Institute Name</label>
            <input type="text" name="inst_name" class="form-control" placeholder="Krishna Academy" required="required">
          </div>
          <div class="form-group">
            <label>Owner Name</label>
            <input type="text" name="own_name" class="form-control" placeholder="Ashwinbhai Parmar" required="required">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" placeholder="Your contact number" required="required">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" required="required">
          </div>
          <div class="form-group">
          <label for="cars">Choose courses offer by you:</label>
                <select id="courses" name="teach">
                  <option value="nursery_KG">Nursery-KG</option>
                  <option value="1std to 8std class">1std to 8std</option>
                  <option value="9std to 10std class">9std to 10std</option>
                  <option value="all 11std to 12std class">11std to 12std</option>
                  <option value="undergraduate  classes">UG</option>
                  <option value="postgraduate  classes">PG</option>
                  <option value="competitive exam  classes">Competative Exams</option>
                  <option value="spoken English class">Spoken English</option>
                  <option value="languagess classes">Languages classes</option>
                  <option value="IT_skill classes">IT_skill class</option>
                  <option value="hobby classes">Hobby Clases</option>
                </select>
        </div>
          <div class="form-group">
            <label>Overview</label>
            <input type="text" name="over" required="required" class="form-control" placeholder="this institute provide the better infrastructure">
          </div>
          
          <div class="form-group">
            <label>Class Offer</label>
            <input type="text" required="required" name="class_offer" class="form-control" placeholder="Write here which subjects tuition you offers ex:B_tech,M_tech">
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" required="required" name="add" class="form-control" placeholder="Enter address of institute">
          </div>
          <div class="form-group">
                    <label> select City</label>
                    <select name="city" class="form-control text" required="required" >
                    <option value="ahm">Ahmedabad</option>
                    <option value="anand">Anand</option>
                    <option value="bhav">Bhavnagar</option>
                    <option value="baroda">Baroda</option>
                    <option value="gandhinagar">Gandhinagar</option>
                    <option value="rajkot">Rajkot</option>
                 </select>
                </div>


          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required="required" class="form-control" placeholder="Create Password">
          </div>

          <button name="submit" type="submit" class="btn btn-primary">Create Profile</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

