<?php
// 
// Action
// 0: sign in
// 1: sign up
// 2: log out
// 
include 'lib.php';


// TODO: Add return error process handle.
switch ($_GET["action"]) {
	case '0':
		$email = $_POST["emailLogin"];
		$passwd = $_POST["passwdLogin"];
		// echo $email." and ".$passwd;
		$res = checkUser($email, $passwd, true);
		// header("Location: ./index.php");
		break;

	case '1':
		$email = $_POST["emailRegister"];
		$passwd = $_POST["passwordRegister"]; 
		$nickname = $_POST["nameRegister"];
		// echo "$email"." ".$passwd." ".$nickname;
		$res = registerUser($nickname, $email, $passwd);
		// header("Location: ./index.php");
		break;

	case '2':
		deleteCookie();
		// header("Location: ./index.php");
		break;

	default:
		// echo "default";
		break;
}

// echo "action: ".$_GET["action"];
// header should before any other output.
header("Location: ./index.php");



?>