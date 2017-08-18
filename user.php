<?php
include 'dbconnect.php';
$stat = '';
if(isset($_POST['btn_save'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $title = $_POST['title'];
  $category = $_POST['category'];
  $info = $_POST['info'];
  $query = "INSERT INTO box_tb (fname, lname, email, phone, country, city, title, category, info ) VALUES ('$fname','$lname','$email','$phone', '$country', '$city', '$title', '$category', '$info')";
  $result = mysqli_query($conn, $query);
  if($result){
    $stat = '<div class="alert alert-success" role="alert">Information Successfully Saved to Box</div>';
  }else{
    $stat= '<div class="alert alert-danger" role="alert">oh Snap! Error Try Again</div>';
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
      height: 600px;
      background-color: #E91E63;
      margin-top: -20px;
      color: #fcfcfc;
    }

    #second-row h2 {
      text-align: center;
    }

    #center-paper {
      height: 300px;
      width: 60%;
      margin: 100px auto;
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
            <li><a href="user.php">Make Request</a></li>
            <li><a href="view.php">View Request </a></li>
          </ul>
        </div>
    </nav>
  </header>
  <section class="container-fluid" id="first-row">
    <div class="row">
      <h1>Welcome to Fifz Consulting Firm</h1>
    </div>
    <div class="row" id="center-paper">
      <div class="col-md-12">
        <p>“Ify Chinke is the CEO and founder of Fifiz Consulting Firm for 2 years running and has developed so many softwares for both individuals and organizations.”</p>
      </div>
      <div class="col-md-12">
        <img src="images/ify (2).jpg" alt="" class="img-circle" width="100">
        <p>Ms Ify Chinke</p>
      </div>
    </div>
  </section>
  <section class="container-fluid" id="second-row">
    <div class="row">
      <h2>Please enter your details to get our services</h2>
    </div>
    <div class="row col-md-6 col-md-offset-3">
      <?=$stat?>
    </div>
    <div class="row col-md-8 col-md-offset-2">
      <form action="user.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-6">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="First Name">
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="Last Name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1">Contact</label>
            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label for="exampleInputEmail1">Current Location</label>
            <input type="text" class="form-control" name="country" id="exampleInputEmail1" placeholder="Country">
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1">Current Address</label>
            <input type="text" class="form-control" name="city" id="exampleInputEmail1" placeholder="City">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" class="form-control" name="category" id="exampleInputEmail1" placeholder="Category">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Service Required</label>
            <textarea name="info" class="form-control" name="info" rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="row sub-btn">
          <button type="submit" name="btn_save" class="btn btn-default">Save to Cloud</button>
        </div>
      </form>
    </div>
  </section>
  <footer class="container-fluid">
   <div id="copyrights"> TheFifi.&copy; All Rights Reserved 2017 </div>
  </footer>
  <script src="assests/bootstrap.min.js"></script>
</body>

</html>
