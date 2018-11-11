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
  <link rel="stylesheet" href="assets/css/datatable.css">
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/mdb.js"></script>
  <script src="assets/js/mdb.min.js"></script>
  <script src="assets/js/popper.min.js"></script> 
  <script src="assets/js/datatable.js"></script>
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="#">OHMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Today entries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br />
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</div>
  </div>
</div>
</body>
</html>