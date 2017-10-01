<?php

session_start();
//registration var
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$college = $_POST['college'];
$password = $_POST['password'];

$k = 0;
//login var
$getemail = $_POST['getemail'];
$getpass = $_POST['getpass'];

//flag for check whether user select login or register
$flag = $_POST['temp'];

	if($flag == 'reg'){

		try{

			require('function.php');
		// $checkemail = 'SELECT email FROM login WHERE email=:mymail'; 

		// $c = $connection->prepare($checkemail);
		// $c->execute( array( ':mymail'=>$getemail) ); 

		// $res = $c->fetchAll();
		

		// if($res == 0){
			// die("ERROR");
		// }
		




////////////////////////////
		
		$insert = 'INSERT INTO login ( name1, name2, email, mobile, college, password )
		                       VALUES
		                       ( :name1, :name2, :email, :mobile, :college, :password); '; 

		$result = $connection->prepare($insert);
		$result->execute( array( ':name1'=>$name1, ':name2'=>$name2, ':email'=>$email,':mobile'=>$mobile,':college'=>$college, ':password'=>$password) ); 
		
		// $_SESSION['flag']='com';
		// header("Location: coming_soon.php");
		}

		catch(PDOException $e){
			die('error in reg');
			echo '$e';
		}


	}

	

			
			
		


		// }
	



?>