<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ohms";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name=$_POST['stu_id'];
  $pass=$_POST['password'];
  $sql = "SELECT * FROM student_details where stu_id = '$name'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  // if($name=="ADMIN" && $pass=="iiitn")
  // {
  //   $_SESSION["admin"] ="iiitn";
  //   header("Location:admin/admin.php");
  // }
  if($row["stu_id"]==$name && $row["password"]==$pass)
  {
    $_SESSION["id"] = $row["id"];
    header("Location: student_home.php");
  }
  else
  {
    ?><script>alert("Invalid credentials")</script><?php
  }
}
mysqli_close($conn);
?>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.lite.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.lite.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/mdb.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
  </head>
<body>
    <img style=" display:block;margin:auto;height: 80px;" src = "rgukt.png" /> <br>
    <nav class="navbar" style="background-color: #669999;height: 20px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <p class="navbar-brand" style="font-size: 20px;font-family: Bradley Hand ITC;font-weight: bold;color: white;" href="#">Online Hospital Management System</p>
      </div>
    </div>
  </nav>
  <div class="col-md-4 col-md-offset-4" style="margin-top: 3%;">
  <form class="p-5" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <img src="">
    <p class="h4 mb-4 text-center" style="border-radius: 5px;height:30px; font-size: 20px;font-family: Bookman Old style; font-weight: bold;">Student Sign In</p>

    <input type="text" id="defaultLoginFormEmail" name="stu_id" class="form-control mb-4" placeholder="University ID">

    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-between">
        <div>
            <div class="custom-control custom-checkbox">
<!--                 <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
               <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label> -->
            </div>
        </div>
          <!-- <div>
              <a href="">Forgot password?</a>
          </div> -->
    </div>

    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
 <table><tr>
  <td style="padding-left: 120px !important;"><a href="doctor_login.php"><big><i class="fa fa-user-md fa-2x" title="Doctor"></i></big></a></td>
  <td style="padding-left: 15px !important;"><a href="index.php"><big><i class="fa fa-users fa-2x" title="Student"></i></big></a></td>
  <td style="padding-left: 15px !important;"><a href="security_login.php"><big><i class="fa fa-get-pocket fa-2x" title="Security"></i></big></a></td>
  <td style="padding-left: 15px !important;"><a href="store_login.php"><big><i class="fa fa-ambulance fa-2x" title="Pharmasy"></i></big></a></td>
 </tr></table>
</form>
</div>

<footer class="footer" style="position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 30px;
  background-color: #669999;">
  <div class="container">
    <p  style="font-weight: bold;right: 0;">Contact Us</p>
  </div>
</footer>

</body>
</html>