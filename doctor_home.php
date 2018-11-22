<html lang="en">
  <head>
    <head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.lite.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.lite.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/datatable.css">
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/mdb.js"></script>
  <script src="assets/js/mdb.min.js"></script>
  <script src="assets/js/popper.min.js"></script> 
  <script src="assets/js/datatable.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/table.css">
  <script type="text/javascript" src="assets/js/table.js"></script>
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
  });
  </script>
</head>
<body>
  <img style=" display:block;margin:auto;height: 80px;" src = "rgukt.png" /> <br>
      <nav class="navbar" style="background-color: #669999;height: 40px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <p class="navbar-brand" style="font-size: 20px;font-family:cursive;font-weight: bold;color: black;margin-left:140%;padding-top: 20px;"href="#">Online Hospital Management System</p>
        </div>
        <div><a class="logout"href="logout.php">Logout</a></div>
      </div>
    </nav>
    <br />

    <div class="table">
   <!--  <div id="show_user_image">
      k
    </div> -->
   <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Search Here..!">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-striped results">
  <thead>
    <tr>
      <th>S.No</th>
      <th class="col-md-5 col-xs-5">Name</th>
      <th class="col-md-4 col-xs-4">University ID</th>
      <th class="col-md-3 col-xs-3">Problem</th>
      <th class="col-md-3 col-xs-3">Date</th>
      <!-- <th class="col-md-3 col-xs-3">Problem</th> -->
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Vatanay Özbeyli</td>
      <td>UI & UX</td>
      <td>Istanbul</td>
      <td>Istanbul</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Burak Özkan</td>
      <td>Developer</td>
      <td>Istanbul</td>
      <td>Istanbul</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Egemen Özbeyli</td>
      <td>Purchasing</td>
      <td>Kocaeli</td>
      <td>Istanbul</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Engin Kızıl</td>
      <td>Sales</td>
      <td>Bozuyük</td>
      <td>Istanbul</td>
    </tr>
  </tbody>
</table>
  </div>

<footer class="footer" style="position: absolute;bottom: 0;width: 100%;height: 30px;background-color: #669999;">
  <div class="container">
    <p class="con">Contact Us</p>
  </div>
</footer>
</body>
<style type="text/css">
/*.sear{
width:90px;
height:35px;
position: absolute;
top: 24%;
right: 8%;
background:#9acd32;
font-size:15px;
margin:20px;
padding:8px;
}*/
.check{
width:90px;
color: white;
font-size:15px;
padding:5px 10px;
background:#9acd32;
}
.logout{
    color: black;
    font-weight: bold;
    font-size: 1.1em;
}
.logout:hover{
    color: white;
}
  body{
    overflow-y: hidden;
  }
  .con{
    font-weight: bold;right: 0;position: absolute;right:100px;top:5px;
  }
</style>
</html>