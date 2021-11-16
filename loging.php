<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  body{
      background-image: url(img/cropped-3837.jpg);
  }
  #form{
      margin-top: 40px;
      background-color:white;
      min-height:60;
      padding:20px 40px 40px;
      box-shadow: 12px 12px 14px black; 
 }
 .Registration{
      font-size:27px;
      font-family: Agency ;
      font-weight:700;
      color:gray;
      border-top:1px solid black;
      border-bottom:1px solid black;
 }
 .text{
      height: 43px;
 } 
 label{
    font-size: 18px;
 }
 .btn-primary{
    border-radius: 0px;padding:10px;
    width: 100%;
 }
 .forgot
 {
  font-size: 15px;
  margin-left: 10px;
  color: gray;
 }
</style>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
          <center><b class="Registration">INSTITUTE / INDIVIDUAL LOGIN</b></center>
          <form action="check_login.php" method="POST">
            <div class="form-group">
              <label>UserName</label>
              <input type="text" name="mobile" class="form-control text" placeholder="Mobile Number" required="required" value="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control text" placeholder="Password" required="required" value="">
            </div>

              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="LOGIN">
              </div>
                
            <div class="Forgot">
              Forgot   <a href="#">Username / Password?</a>
            </div>

            <div class="Forgot">
                <a href="sign_as.php">New Registration For Institute/faculty?</a>
            </div>

          </form>
        </div>
      </div>
    </div>
</body>
</html>
