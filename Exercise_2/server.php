<?php 

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['e_mail'];
$password=$_POST['pass'];
$repeat_pass=$_POST['repeat_pass'];

								

if(empty($first_name)){
	echo 'Enter your first name !!';	
} elseif (empty($last_name)){
	echo 'Enter your last name !!';
} elseif (empty($email)){
	echo 'Enter your email';
} elseif (empty($password)){
	echo 'Enter your password!!';
} elseif (empty($repeat_pass)){
	echo 'Enter repeat password !!';
} elseif ($password!=$repeat_pass){
	echo 'Enter correct repeat password !!';
} else {
	echo 'First Name :'.' '.$first_name.'<br>'.'Last Name :'.' '.$last_name.'<br>'.'E-mail :'.' '.$email.'<br>'.'Password :'.' '.$password.'<br>';
}


	?>