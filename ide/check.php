<?php

session_start();

//login var
$qno = 'q'.$_POST['qno'];
$ans = $_POST['answer'];
$_SESSION['qno'] = $_POST['qno'];
    
//flag for check whether user select login or register
	
	// if(isset($ans)){
    
   
        try{

      

        require('function.php');
       

        //using login_count instead session
         $user = $_POST['user'];


        ////select count{



        $cnt = $connection->prepare("SELECT count FROM login_count 
                WHERE email = :email");
        
        /*** bind the parameters ***/
        $cnt->bindParam(':email', $user, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $cnt->execute();

        /*** check for a result ***/
         $count = $cnt->fetch();

        if(isset($count['count'])){
            if($count['count'] >= $_POST['qno'] ){
            header("Location: wrong.php");
            exit();

        }

        else {

            
        $insert = 'UPDATE login SET '.$qno.' = :ans WHERE email = :email'; 

        $result = $connection->prepare($insert);
        $result->execute( array(':ans'=>$ans,':email'=>$user) );  //get session from quiz page where it store the email of //user;


        

            $qr = 'UPDATE login_count SET count = :que WHERE email = :email'; 

            $sss = $connection->prepare($qr);
            $sss->execute( array(':que'=>$_POST['qno'],':email'=>$user) );
                 
        

            if($_POST['qno'] == 20){
                $_SESSION['user'] = $user;
                header("Location: thanks.php");
            }
        // $result->execute();

         

           
            // $_SESSION['user'] = $user;
            else{

                
                header("Location: quiz.php");
            }
        }

        }
    }
        catch(PDOException $e){
            echo $e;

        }

            
    
    


        
           

?>