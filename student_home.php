<!DOCTYPE html>
<html>
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
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
</head>
	<title></title>
</head>
<body>
  <?php include"header.php";?>
<div class="profile">
  <img src="assets/1.jpg">
  <div class="details">
  <p>B.Manohar Krishna</p>
  <p>E-1 CSE</p>
</div>
</div>
<div class="container-fluid table2">
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
            <td>Row 1 Data 1</td>
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
<style>
body{
	overflow-y:hidden; 
}
.table2{
	width:75%;
	margin-left: 270px;
	margin-top: -36%;
}
.profile{
	background-color: black;
	width: 17%;
	height: 37vw;
	position: relative;
	padding: 10px;
}
.profile img{
  width:75%;
  margin-left: 25px;
  border-radius: 200px;}
.profile div{
  color: white;
  font-size:1.1em;
  margin-left: 40px;
  margin-top:10px;
}
table{
	font-size: 26px;
}
.table2 table tr th{
	font-size: 18px;
	background-color: #0000804d;
}
</style>
</html>