<?php

session_start();

 require 'Confic/db.php';

	$errors = array();
	$username = "";
	$email = "";
 // if user click on the sign up button
	if (isset($_post['signup-btn'])) 
 {
	 $username = $_post['username'];
 	$email = $_post['email'];
 	$password = $_post['password'];
 	$passwordConf = $_post['passwordConf'];

 //validation
 	if(empty($username))
   {
 		$errors['username'] = "Username required";
 	}

   if(!filter_var($email, Filter_VALIDATE_EMAIL)) {
	$errors['email'] = "email address is invalid";
  }

 if(empty($email))
 {
 	$errors['email'] = "Email required";
 }
 if(empty($password))
 {
 	$errors['password'] = "Password required";
 }
 if ($password !== $passwordConf){
 	$errors['password'] = "The two password do not match";
 }

	$emailQuery = "SELECT * FROM users WHERE email =? LIMIT 1";
	$stmt = $conn->prepare($emailQuery);
	$stmt->blind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$userCount = $result->num_rows;
	$stmt->close();

	if ($userCount > 0){
		$errors['email'] = "Email already exists";
	}
	if (count($errors) === 0){
		$password = password_hash($password, PASSWORD_DEFAULT)
		$token = bin2hex(random_bytes(50);
		$verified = false;

		$sql = "INSERT INTO users (username, email, verified, token, password)values(?,?,?,?,?)";
		$stmt = $conn->prepare($sql);
		$stmt->blind_param('ssbss', $username, $email, $verified, $token, $password);
		if ($stmt->cubrid_execute()){

			//login user
			$user_id = $conn->insert_id;
			$_SESSION['id'] = $user_id;
			$_SESSION['username'] = $username;
			$_SESSION['emai'] = $emai;
			$_SESSION['verified'] = $verified;
			//set flash message
			$_SESSION['message'] = "You are now logged in!";
			$_SESSION['alert-cass'] = "alert-success";
			header('location: index.php');
			exit();

		}else {
			$errors['db_error'] = "Database error: failed to register";
		}

	}
	if (isset($_post['signup-btn'])) 
	{
		$username = $_post['username'];
		$password = $_post['password'];
		
	//validation
		if(empty($username))
	  {
			$errors['username'] = "Username required";
		}
	if(empty($password))
	{
		$errors['password'] = "Password required";
	}
	if (count($errors)===0){
	$sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
	$stmt = $conn->prepare($sql);
	$stmt->blind_param('ss', $username, $username);
	$stmt->execute();
	$user = $stmt->get_result();
	$user = $result->fetch_assoc();
	if (passward_varify($password, $user['passward']))
	{
		//login sucess

		$_SESSION['id'] = $user['id'];
		$_SESSION['username'] = $user['username']
		$_SESSION['emai'] = $user['email'];
		$_SESSION['verified'] = $user['verified'];
		//set flash message
		$_SESSION['message'] = "You are now logged in!";
		$_SESSION['alert-cass'] = "alert-success";
		header('location: index.php');
		exit();
	   else
	  {
		$errors['login_fail'] = "wrong credentials"
	   }
	}
	if (isset($_GET['logout'])){
		seeeion_destory();
		unset($_SESSION['id']);
		unset($_SESSION['userb=name']);
		unset($_SESSION['email']);
		unset($_SESSION['verified']);
		header('location: login.php');
		exit();
	}

}