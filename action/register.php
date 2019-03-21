<?php
	include('db/db.php');
	
	$mobile=$_POST['mOBILE'];
	$Passwords=$_POST['password'];
	$rePasswords=$_POST['repassword'];
	$Email=$_POST['email'];
	$Name=$_POST['name'];
	$Birthday=$_POST['birthday'];
	//echo $name;
	
	if($Passwords == $rePasswords && strlen($Passwords) >4 ){
		$sql = "INSERT INTO tbl_website(username, number, email, birthday, passwords) VALUES('".$Name."','".$mobile."','".$Email."','".$Birthday."','".$Passwords."')";
		
		$result= $conn->query($sql);
		
		if($result){
			header('Location: http://localhost/Project200/index.php');
		}
		else{
			echo "something wrong";
		}
	}
		
		else{
			echo "Passwords notmatch";
		}
	
?>