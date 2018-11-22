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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/table.css">

  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/mdb.js"></script>
  <script src="assets/js/mdb.min.js"></script>
  <script src="assets/js/popper.min.js"></script> 
  <script type="text/javascript" src="assets/js/table.js"></script>
</head>
<body>
<img style=" display:block;margin:auto;height: 80px;" src = "rgukt.png" /> <br>
      <nav class="navbar" style="background-color: #669999;height: 40px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <p class="navbar-brand" style="font-size: 20px;font-family:cursive;font-weight: bold;color: black;margin-left:140%;padding-top: 20px;"href="#">Online Hospital Management System</p>
        </div>
        <div><a class="logout" href="logout.php" style="color:white;font-weight: bolder;height: 10px;">Logout</a></div>
      </div>
    </nav>
    <br />
    <div class="container-fluid">
  <div class="row" style="margin-left: 30%;border: 5px black;">
    <form class="form-inline">
      <label class="sr-only" for="inlineFormInputName2">ID No</label>
      <input type="text" class="form-control mb-2 mr-sm-4" id="inlineFormInputName2" placeholder="ID No">

      <label class="sr-only" for="inlineFormInputGroupUsername2">Reason</label>
      <div class="input-group mb-2 mr-sm-2">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Reason">
      </div>

      <button type="submit" class="btn btn-primary mb-1" style="margin-top: 0%;">Submit</button>
    </form>;
  </div>

  <div class="row">
   <!--  <div id="show_user_image">
      k
    </div> -->
  <!--  <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table class="table table-hover table-striped">
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
      <td>Software Developer</td>
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
</div>
</body>
</html>