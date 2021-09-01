<?php 
include 'con.php';
if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
if (isset($_POST['update'])) {
	$name = $_POST['username'];
	$password = $_POST['password'];
	echo $id;
	mysqli_query($con, "UPDATE users SET username='$name', password='$password' WHERE id=$id") or trigger_error(mysqli_error($con));
	header('location: index.php');
}
$sql = "SELECT username, password from users WHERE id = $id";
$res = mysqli_query($con,$sql);
if($row = mysqli_fetch_assoc($res)){
	$name = $row['username'];
	$password = $row['password'];
}
?>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
<form method="POST" class="container pt-3">
	<label for="username" >username</label>
	<input name='username' type='text'  value="<?php echo $name; ?>"  > </br>
	<label  for='password' >password </label>
	<input name="password" type="text" value="<?php echo $password; ?>" /></br>
	<button type="submit" name="update" value="update">update</button>
</form>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
