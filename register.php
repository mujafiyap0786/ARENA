<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "arena";

 $con = mysqli_connect($server, $username, $password, $database);

 /*if($con -> connect_error){
	die("failed".$con -> connect_error);
 }
 echo "connect";*/

 if(isset($_POST['done'])){
    $username = $_POST['username'];
	$mail = $_POST['mail'];
    $password = $_POST['pass'];
    $confirm_pass = $_POST['conpass'];

    $sql = "INSERT INTO `user`(`username`, `email`,`password`, `confirm_password`) VALUES('$username','$mail','$password','$confirm_pass')";
    $result = mysqli_query($con, $sql);
    /*if($result){
        echo "added";
    }else{
        echo "not added";
    }*/
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Animated Register Form</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">	 
</head>
<body>
	<img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post">
				<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
				<h2 class="title">Welcome</h2>
               
				<div class="row">
				<div class="col-12 form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
                </div>
				<div class="col-12 form-group">
					<label>Email</label>
					<input type="email" name="mail" class="form-control">
                </div>
                </div>
				<div class="row">
                <div class="col-md-6 form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control">
                </div>
				<div class="col-md-6 form-group">
					<label>Confirm Password</label>
					<input type="password" name="conpass" class="form-control">
                </div>
                </div>
				<div class="form-group">           
                          <input type="submit" class="btn btn-primary mt-2 mb-2 form-control" name="done" value="sign up">                  
                  </div>
             
            </form>
        </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>
</html>