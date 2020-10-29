<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/account.css">
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet"  href="csss.css">
<div class="br">
<div id="frmRegistration">
<form class="form-horizontal" action="annonce.php" method="POST">
	<h1>Annonce</h1>
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
		<label class="control-label col-sm-2" for="adress">Adress:</label>
		<div class="col-sm-6">
			<input type="text" name="adress" class="form-control" id="adress" placeholder="Enter Adress">
		</div>
	</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="tele">Phone:</label>
		<div class="col-sm-6">
			<input type="text" name="telephone" class="form-control" id="telephone" placeholder="Enter Phone">
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
$conn = mysqli_connect("localhost","root","","annonce");

if(!$conn)
{
	echo "Database connection faild...";
}
$fname = $lname = $adress = $email = $telephone = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['adress'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


$sql = "INSERT INTO annonce (Firstname,lastname,Adress,Email,Telephone) VALUES ('$fname','$lname','$adress','$email','$telephone')";
$result = mysqli_query($conn, $sql);
?>
