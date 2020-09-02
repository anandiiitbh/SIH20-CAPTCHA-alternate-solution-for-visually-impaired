    <?php
	
    session_start();// Starting Session
    $error = ''; // Variable To Store Error Message
	$_SESSION['val']=0;
    if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
    }
    else{$_SESSION['val']=1;
    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];
	$captcha = $_POST['fname'];
	if(!strcmp($captcha,$_SESSION['capp'])){
		echo "<h1>Validation Success</h1>";
	}
	else{
		echo "<h1>invalid Captcha</h1>";
	}
	}
	}
    ?>
