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
    padding:5px 30px 30px; 
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
    height: 43px;
} 
label
 {
    font-size: 15px;
 }
.btn-primary
{
    border-radius: 0px;
    padding:10px;
    width: 100%;
}

</style>
<body>
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
          <center><b class="Registration">Individual Registration</b></center>
            <form action="insert_individual_data.php" method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Rakesh Mishra" required="required">
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
                  <option value="primary">1std to 8std</option>
                  <option value="secondary">9std to 10std</option>
                  <option value="highersecondary">11std to 12std</option>
                  <option value="ug">UG</option>
                  <option value="Pg">PG</option>
                  <option value="compe_Exam"">Competative Exams</option>
                  <option value="spoken">Spoken English</option>
                  <option value="languagess">Languages classes</option>
                  <option value="IT_skill">IT_skill class</option>
                  <option value="hobby">Hobby Clases</option>
                </select>
        </div>
          
           <div class="form-group">
            <label>Background</label>
            <input type="text" name="background" class="form-control" placeholder="I have been teach from last 20years" required="required">
          </div>
          <div class="form-group">
            <label>Class Offer</label>
            <input type="text" required="required" name="class_offer" class="form-control" placeholder="Write here which subjects tuition you offers ex:B_tech,M_tech">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter teaching address" required="required">
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
          <button type="submit" class="btn btn-primary">Create Profile</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

