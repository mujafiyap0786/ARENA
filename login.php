<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "arena";

$con = mysqli_connect($server, $username, $password, $database);

session_start();
if(isset($_POST['done']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $exequery = mysqli_query($conn , $select);

    if(mysqli_num_rows($exequery) >= 1)
    {
        $_SESSION['userdata'] = $username;
       header("location:booking.php");
    } else {
        echo " Login failed";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
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
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
				
            	
            	<input type="submit" class="btn" value="Login" name="done">
				<br>
				<a href="#">Forgot Password?</a>
            </form>
        </div>
    </div>
    <!--<script>
        const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

//Source :- https://github.com/sefyudem/Responsive-Login-Form/blob/master/img/avatar.svg
</script>-->
</body>
</html>