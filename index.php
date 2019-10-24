<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login With Google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style type="text/css">
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
 float: right;
}


.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}


</style>
<body>
<div class="container" style="margin-top: 100px">
	<a href="logout.php" class="button button3" >Logout</a>
	<div class="row">
		<div class="col-md-3">
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $_SESSION['id'] ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
