<?php
require('function.php');
session_start();

//login var
$getemail = $_POST['getemail'];
$getpass = $_POST['getpass'];


//flag for check whether user select login or register
	
		try
    {
       

        /*** prepare the select statement ***/
        // $query = 'SELECT `email` , `password` FROM `login` 
        //             WHERE `email` = 'saoravpratihaar@gmail.com' AND `password` = 'saorav08'';


        $stmt = $connection->prepare("SELECT email, password,name1,name2 FROM login 
                    WHERE email = :email AND password = :password");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':email', $getemail, PDO::PARAM_STR);
        $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetchColumn();



        /*** if we have no result then fail boat ***/
        if($user_id == false)
        {
                echo "<h1 align='center'>Login Failed! Email or Password Incorrect !</h1>";
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user'] = $getemail;
                $_SESSION['que'] = -1;
                $_SESSION['flag'] = 'com';


                 // header("Location: quiz.php"); // change this when quiz start
                header("Location: quiz.php");

                echo "in login";

                // echo "Name1: " . $user_id['name1']. ", Name2: ".$user_id['name2']."<br>";
                
                /*** tell the user we are logged in ***/
                // $message = 'You are now logged in';
        }


    }


    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo "Error. Please Contact Coordinators";
        // $message = 'We are unable to process your request. Please try again later';
    }


		
	



?>