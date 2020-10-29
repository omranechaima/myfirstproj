<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/account.css">
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet"  href="cssss.css">
<div class="bg">
<div id="frmRegistration">
<form class="form-horizontal" action="reservation.php" method="POST">
	<h1>Réservation</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div><br/>  <br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
		<div class="col-sm-offset-12 col-sm-12">
			<a href ="miniprojhtl"
			<p><a href="miniproj.html"  class="btn btn-default btn-sm" role="button">Retour </a>
    </div>


  </div>
</form>
</div>
</div>

<?php
$conn = mysqli_connect("localhost","root","","reservation");

if(!$conn)
{
	echo "Database connection faild...";
}
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO reservation (Firstname,lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result = mysqli_query($conn, $sql);
?>
