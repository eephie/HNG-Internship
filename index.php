<?php
include 'dbconnect.php';
$stat = '';
if(isset($_POST['btn_signup'])){
  $fname = $_POST['fname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $query = "INSERT INTO users_tb (fullname, gender, dob, phone, email, password) VALUES ('$fname','$gender','$dob','$phone','$email', '$password')";
  $result = mysqli_query($conn, $query);
  if($result){
    $stat = '<div class="alert alert-success text-center" role="alert">Sign Up Successful... You can now sign in</div>';
  }else{
    $stat= '<div class="alert alert-danger text-center" role="alert">oh Snap! Error Try Again</div>';
  }
}
if(isset($_POST['btn_signin'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users_tb WHERE email = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($result);
  if(!empty($result)){
    header("Location:user.php?id=$username");
  }else{
    $stat= '<div class="alert alert-danger text-center" role="alert">Wrong Username or Password</div>';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Assignment</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-theme.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .my-navigation {
      height: 60px;
    }

    #first-row {
      height: 600px;
      background-image: url('images/slider.jpg');
      background-attachment: fixed;
      margin-top: -20px;
      color: #ececec;
      text-align: center;
    }

    #first-row h1 {
      line-height: 1.5em;
    }

    #second-row {
      height: 400px;
      background-color: #F06292;
      margin-top: -20px;
      color: #fcfcfc;
    }

    #second-row h2 {
      text-align: center;
    }

    #third-row{
      background-color: #f5f5f5;
      height: 400px;
    }
    #fourth-row{
      background-color: #f5f5f5;
      min-height: 400px;
      background-image: url('images/slider.jpg');
      background-attachment: fixed;
      color: #fff;
    }
    #fourth-row h2{
      font-size: 42px;
      text-shadow: 1px 1px 1px #666;
    }
    #fourth-row p{
      font-size: 18px;
      text-shadow: 1px 1px 1px #666;
    }
    .quality-box{
      height: 300px;
      border-radius: 4px;
      border: solid 1px rgba(144, 144, 144, 0.25);
      box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.4);
      background-color: #fff;
      margin: 20px 2px;
      -webkit-transition: background-color 2s;
    	transition: background-color 2s;
    }
    .quality-box:hover{
      box-shadow: 1px 4px 8px rgba(0, 0, 0, .8);
		  background-color: #EFd549;
      cursor: pointer;
    }
    .quality-box h3{
      color: #858585;
    }
    .quality-box p{
      color: #646464;
    }
    #cloud-icon{
      background-color: #3cadd4;
      font-size: 42px;
      color: #fff;
      margin: 40px 0px 10px 0px;
      padding: 40px;
      border-radius:50%;
    }
    #time-icon{
      background-color: #3cadd4;
      font-size: 42px;
      color: #fff;
      margin: 40px 0px 10px 0px;
      padding: 40px;
      border-radius:50%;
    }
    #speed-icon{
      background-color: #3cadd4;
      font-size: 42px;
      color: #fff;
      margin: 40px 0px 10px 0px;
      padding: 40px;
      border-radius:50%;
    }
    #center-paper {
      height: 300px;
      width: 60%;
      margin: 80px auto;
      padding: 20px 0px;
      font-size: 18px;
      background-color: rgba(0, 0, 0, 0.5);
    }

    label {
      color: #666;
    }

    .sub-btn {
      text-align: center;
    }

    .sub-btn button {
      width: 60%;
      margin: 20px auto;
    }
    .form-row{
      padding: 20px;
      border: 2px solid rgba(0,0,0,.6);
    }
    .form-card{
      margin-bottom: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.4);
    }
    footer {
      background-color: rgba(0, 0, 0, .8);
      min-height: 40px;
      text-align: center;
      color: #ececec;
    }

    footer p {
      padding: 20px 5px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed my-navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Fifiz Consulting Firm</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#second-row">Login</a></li>
            <li><a href="#fourth-row">Sign Up</a></li>
          </ul>
        </div>
    </nav>
  </header>
  <section class="container-fluid" id="first-row">
    <div class="row">
      <h1>Welcome to Fifiz Consulting Firm </h1>
    </div>
    <div class="row" id="center-paper">
      <div class="col-md-12">
        <p>Fifiz Consulting Firm is an IT creative and digital organization that clients consult for IT services and they also build softwares for both individuals and organizations according to the clients specifications.</p>
      </div>
      <div class="col-md-12">
        <img src="images/ify (1).jpg" alt="" class="img-circle" width="100">
        <p>Your satifaction is our goal</p>
      </div>
    </div>
  </section>
  <section class="container-fluid" id="second-row">
    <div class="row">
      <h2>Sign In to your profile </h2>
    </div>
    <div class="row col-md-4 col-md-offset-4">
      <?=$stat?>
    </div>
    <div class="row col-md-4 col-md-offset-4 form-row">
      <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" name="username" id="exampleInputEmail1" placeholder="Email" required><br>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password" required>
          </div>
        </div>
        <div class="row sub-btn">
          <button type="submit" name="btn_signin" class="btn btn-default">Login</button>
        </div>
      </form>
    </div>
  </section>
  
  <section class="container-fluid" id="fourth-row" color="#F48FB1">
    <div class="row col-md-6 col-md-offset-3 text-center">
      <h2>Client Details</h2>
      <p>Please signup to complete your request</p>
    </div>
    <div class="row col-md-4 col-md-offset-4 form-card">
      <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="Full Name" required><br>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="radio-inline">
              <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="text" class="form-control" name="dob" id="exampleInputEmail1" placeholder="yyyy/mm/dd" required><br>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Contact Number</label>
            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone Number" required><br>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email Address" required><br>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password" required>
          </div>
        </div>
        <div class="row sub-btn">
          <button type="submit" name="btn_signup" class="btn btn-default">Sign Up</button>
        </div>
      </form>
    </div>
  </section>
  <footer class="container-fluid">
    <div id="copyrights"> TheFifi.&copy; All Rights Reserved 2017 </div>
  </footer>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('a[href^="#"]').on('click', function (e){
        e.preventDefault();

        var target  = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
          'scrollTop': $target.offset().top},
          900, 'swing', function(){
            window.location.hash = target;
          });
      });
    });
  </script>
</body>
</html>
