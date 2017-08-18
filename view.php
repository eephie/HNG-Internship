<?php
  include 'dbconnect.php';
  $query = "SELECT * FROM box_tb";
  $result = mysqli_query($conn, $query);
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
    .table-row{
      background-color: #fcfcfc;
      box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5);
      color: #000;
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
          <a class="navbar-brand" href="#">Fifz Consulting Firm</a>
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
      <h1>Submit Your Details To Get Our Services </h1>
    </div>
    <div class="row" id="center-paper">
      <div class="col-md-12">
        <p>“Ify Chinke is the CEO and founder of Fifiz Cloud for 2 years running and has developed so many softwares for both individuals and organizations.”</p>
      </div>
    </div>
  </section>
  <section class="container-fluid" id="second-row">
    <div class="row">
      <h2>Saved Documents</h2>
    </div>
    <div class="row col-md-8 col-md-offset-2 table-row">
      <table class="table table-hover">
        <tr>
          <th>SN</th>
          <th>Full Name</th>
          <th>Current Location</th>
          <th>Title</th>
          <th>Category</th>
          <th>Details</th>
        </tr>
        <?php
          $xx = 1;
          while($row = mysqli_fetch_assoc($result)) {
            // $info = substr($row['info'],0,10);
            $info = $row['info'];
            echo '
            <tr>
            <td>'.$xx.'</td>
            <td>'.$row['fname'].' '.$row['lname'].'</td>
            <td>'.$row['country'].' '.$row['city'].'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['category'].'</td>
            <td>'.$info.'...</td>
            </tr>
            ';
            $xx++;
          }
        ?>
      </table>
    </div>
  </section>
  <footer class="container-fluid">
    <div id="copyrights"> TheFifi.&copy; All Rights Reserved 2017 </div>
  </footer>
  <script src="assests/bootstrap.min.js"></script>
</body>

</html>
