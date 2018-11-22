<?php
session_start();
require_once"db.php";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name=$_POST['sto_id'];
  $pass=$_POST['password'];
  $sql = "SELECT * FROM pharma_details where pha_id = '$name'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if($name=="m" && $pass=="m")
   {
     $_SESSION["id"] ="iiitn";
     header("Location:store_home.php");
   }
  if($row["pha_id"]==$name && $row["password"]==$pass)
  {
    $_SESSION["id"] = $row["id"];
    header("Location: store_home.php");
  }
  else
  {
    ?><script>alert("Invalid credentials")</script><?php
  }
}
mysqli_close($conn);
?>
<html lang="en">
<body>
  <?php include"main_head.php";?>
  <div class="col-md-4 col-md-offset-4" style="margin-top: 3%;">
  <form class="p-5" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <img src="">
    <p class="h4 mb-4 text-center" style="border-radius: 5px;height:30px; font-size: 20px;font-family: Bookman Old style; font-weight: bold;">Pharmacy Sign In</p>

    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="University ID" name="sto_id">

    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

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
  <td style="padding-left: 15px !important;"><a href="student_login.php"><big><i class="fa fa-users fa-2x" title="Student"></i></big></a></td>
  <td style="padding-left: 15px !important;"><a href="security_login.php"><big><i class="fa fa-get-pocket fa-2x" title="Security"></i></big></a></td>
  <td style="padding-left: 15px !important;"><a href="store_login.php"><big><i class="fa fa-ambulance fa-2x" title="Pharmasy"></i></big></a></td>
 </tr></table>
</form>
</div>
</body>

</html>