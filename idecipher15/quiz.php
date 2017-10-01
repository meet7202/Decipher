<!DOCTYPE html>

<?php

require('function.php');
session_start();

// header("Location: 404.html");   //remove this when quiz start
$user = $_SESSION['user'];


// $_SESSION['que'] = 1;       //temporary for check
// $_SESSION['user'] = 'saoravpratihaar@gmail.com';        //temporary for check
//set session of question no. here when user come from login page,set session value 1 at there and set $qno = 1 here;
if(($_SESSION['que'] == -1) && (isset($_SESSION['user']))){

        if(isset($_SESSION['qno'])){
        $qno = $_SESSION['qno'] + 1;
        }

        else{
            $qno = 1;
        }
        $stmt = $connection->prepare("SELECT question FROM quiz 
                WHERE id = :id");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':id', $qno, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetch();



    }


    else if(($_SESSION['que'] != -1) && (isset($_SESSION['user'])))
    {
        $qno = $_SESSION['que'];


        $stmt = $connection->prepare("SELECT question FROM quiz 
                WHERE id = :id");
        
        /*** bind the parameters ***/
        $stmt->bindParam(':id', $qno, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $getpass, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetch();
  
    }

    else{
        header('Location: 404.html');
    }



?>

<html lang="en">

   <!-- <head>

         <script type="text/javascript">
            $(document).ready(function(){
                $(("#submitform").submit)( function () {    
                  $.post(
                   'check.php',
                    $(this).serialize(),
                    function(data){
                        alert("Submit done");
                      document.getElementById("#msg").innerHTML = "Submit Success";
                      $("#submit").attr("disabled", true);
                      
                    }
                  );
                  return false;   
                });   
            });

            </script>   -->


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">



        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
       <!--  <script src="validation.js"></script> -->

      
        
     

        <script>
        	$(document).ready(function(){
        		$("#name1").click(function(){
        			$("#name1").focus();

        		});
        	});
        </script>
       

    </head>

    <body onload="document.login.login_email.focus();">
    	 <div class="row">
		    <div class="col-md-6 left"><a href="http://www.daiict.ac.in" target="_blank"><img src="assets/img/da.png" alt="DAIICT Logo" width="20%" style="padding:10x 0px 0px 0px"></a></div>

		    		


            <div class="col-md-6 right"><a href="http://ieee.daiict.ac.in/ifest15" target="_blank"><img src="assets/img/ifest.png" alt="ifest Logo" width="20%" style="padding:25px 0px 0px 0px"></a></div>
 		 </div>


 		 <div style="color:white" class="col-md-offset-3 col-md-6">
						<h1 style="color:white" ><strong>i</strong>.decipher 2015</h1>
                            <div class="description">
                            	<p>
	                            	Text is here !
                                    Welcome <?php echo $user ?>
                            	</p>
                            </div>

                    </div>


        <!-- Top content -->
      
        	
            
                <div class="container">
                    
                        
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom">
			                    <div class="panel-group" id="accordion">
                                <h3 style="color:white"><?php echo "Question ".$qno  ?></h3>

                                    <img src="<?php echo ($user_id['question']) ?>"> 





                                     <!-- height and width are fixed as box size, therefore height can be increase -->
                                </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <h3 style="color:white">Answer</h3>


                                        <form id="submitform" method="post" action="check.php">
                                            <input type="text" name="answer" required><br>
                                            <p id="msg"></p>
                                            <input type="hidden" name="qno" value="<?php echo $qno ?>"> 
                                            
                                            <input type="hidden" name="user" value="<?php echo $user ?>">   
                                            <button id="submit" type="submit" class="btn">Submit Your Answer</button>
                                        </form>
                                        </div>



                                    </div>
                                    <br>
                                    <div class="row">
                                        <div style="text-align:left" class="col-md-6 left">
                                            <form method="post" action="skip.php">
                                                <input type="hidden" name="qno" value="<?php echo $qno ?>"> 
                                                <input type="hidden" name="user" value="<?php echo $user ?>"> 
                                                <input type="hidden" name="answer" value="<?php echo 'NULL' ?>">   
                                                <button type="submit" class="btn">Skip</button>
                                            </form>
                                        </div>

                                        <div style="text-align:right" class="col-md-6 right">
                                            <button class="btn">Next</button>
                                        </div>
                                    </div>



    
		                    </div>
                        </div>
                    </div>
                </div>
                    <br>
		                   
		                        <div class="btn azm-social azm-size-48 azm-r-square azm-android">
		                        	
		                        	
			                        	<a class="tn btn-primary btn-lg" href="http://www.facebook.com/">
			                        		<i class="fa fa-facebook"></i>
			                        
			                        	</a>
		                        
		                        </div>
		                   
          


        <div class="footer">
        	<div class="row">
        		<br>
        			<p><strong>Coordinators:</strong><br>
                    <p>Saurav Pratihar : 9033399314<br>
                    Dhaval Panjwani : 9408728111<br>
                    Jaymil Koshiya : 9574959597<br>
                    Anuj Bhavsar : 9426682544<br>
                    Parth Chauhan : 9998109590
                    </p>
        		

        		
        	</div>
        </div>

</div>
        <!-- Javascript -->

       
       
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
