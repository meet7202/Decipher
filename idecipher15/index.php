<?php
 
// grab recaptcha library
// require_once "captcha.php";
require('function.php');


?>

<!DOCTYPE html>

<html lang="en">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Idecipher 15</title>

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

        <script type="text/javascript">
            $(document).ready(function(){
                $("#regform").submit( function () {    
                  $.post(
                   'reg.php',
                    $(this).serialize(),
                    function(data){
                      alert("Registration Successful!");
                      $("#reg").attr("disabled", true);
                     
                      
                    }
                  );
                  return false;   
                });   
            });

            </script>


            <!--<script type="text/javascript"> 


            $(document).ready(function(){
                $("#loginform").submit( function () { 

                   $.ajax({
                        url: 'log.php',
                        type: "POST",
                        data: $(#loginform),
                        success: function(data) {
                        alert("login success");
                    }
            });
            return false;
                });   
            });






        </script> -->


       <script>
            function validation(){

                //for registration form 
                var k = false;
                var check=0;
                
                // var error[] = new int[3];
                var name_1 = document.getElementById("name1").value;
                var name_2 = document.getElementById("name2").value;
                var email = document.getElementById("email").value;
                var mobile = document.getElementById("mobile").value;
                var college = document.getElementById("college").value;
                var password = document.getElementById("psw").value;
                var password2 = document.getElementById("apsw").value;

                    
                if(password != password2){
                    // error[i]    = "Passwords does not match<br>";
                    document.getElementById("psw").style.borderColor = "#E34234";
                    document.getElementById("apsw").style.borderColor = "#E34234";
                     check = 1;
                    document.getElementById("error").innerHTML = "Password does not match !";
                    k = false;
                    
                }

                else if((password.length < 8) || (password.length > 15)){
                    document.getElementById("error").innerHTML = "Password must be 8 to 15 Character";
                    k = false;
                    check = 1;
                }


                else if(check == 0){
                    
                    k = true;
                }

        return k;
    
    
}
       </script>
        
        <!--  <script type="text/javascript">
        //     function checkpass() {
        //                 var pass1 = document.getElementById("psw").value;
        //                 var pass2 = document.getElementById("apsw").value;
        //                 // var v = grecaptcha.getResponse();
        //                 var check = false;
        //               //  var checkcap = false;
        //                 if (pass1 != pass2) {
        //                     //alert("Passwords Do not match");
        //                     document.getElementById("psw").style.borderColor = "#E34234";
        //                     document.getElementById("apsw").style.borderColor = "#E34234";
        //                     document.getElementById("error").innerHTML = "Passwords does not match";
        //                     check = false;
        //                 }

        //                 else {
                            
        //                     check = true;
        //                 }

        //                 return check;
        //             }
          </script> -->


        <script>
        	$(document).ready(function(){
        		$("#name1").click(function(){
        			$("#name1").focus();

        		});
        	});
        </script>
       

    </head>

    <body>
    	 <div class="row">
		    <div class="col-md-6 left"><a href="http://www.daiict.ac.in" target="_blank"><img src="assets/img/da.png" alt="DAIICT Logo" width="20%" style="padding:10x 0px 0px 0px"></a></div>

		    		


            <div class="col-md-6 right"><a href="http://ieee.daiict.ac.in/ifest15" target="_blank"><img src="assets/img/ifest.png" alt="ifest Logo" width="20%" style="padding:25px 0px 0px 0px"></a></div>
 		 </div>


 		 <div style="color:white" class="col-md-offset-3 col-md-6">
						<h1 style="color:white" ><strong>i</strong>.decipher 2015</h1>
                            

                    </div>


        <!-- Top content -->
      
        	
            
                <div class="container">
                    
                        
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom">
			                    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title" align="center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Login</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
                                <form id="loginform" method="post" action="log.php" class="login-form">
			                    	<div class="form-group">
			                    		
			                        	<input style="border:1px solid grey" type="email" name="getemail" placeholder="Email..." class="form-username form-control" id="form-username" required >
			                        </div>
			                        <div class="form-group">
			                        	
			                        	<input style="border:1px solid grey" type="password" name="getpass" placeholder="Password..." class="form-password form-control" id="form-password" required>
			                        </div>

                                     <?php 
                                            $flag = "login";
                                        ?>
                                      
                                   
                                    <input type="hidden" name="temp" value="<?php echo $flag ?>">      
			                        <button type="submit" class="btn">Log in</button>
			                    </form></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title" align="center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Register</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        	<!-- register part -->
        	<form id="regform" name="registration" method="post" action="reg.php">
                                   
                                    <div class="form-group">
                                    	 <label for="textField">Participant 1</label>
                                        <input style="border:1px solid grey" type="text" name="name1" class="form-control" id="name1" placeholder="Participant 1"  required>
                                    </div> 

                                     <div class="form-group">
                                        <label for="textField">Participant 2</label>
                                        <input style="border:1px solid grey" type="text" name="name2" class="form-control" id="name2" placeholder="Participant 2" required>
                                    </div> 

                                   <div class="form-group">
                                        <label for="emailField">Email Address</label>
                                        <input style="border:1px solid grey" type="email" name="email" class="form-user form-control" id="email" placeholder="Enter Email Address" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="textField">Mobile No</label>
                                        <input style="border:1px solid grey" type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                                    </div>

                                     <div class="form-group">
                                        <label for="textField">College Name</label>
                                        <input style="border:1px solid grey" type="text" name="college" class="form-control" id="college" placeholder="College Name" required>
                                    </div>  

                                    <div class="form-group">
                                         <label for="passwordField">Create a Password</label>
                                         <input style="border:1px solid grey" type="password" name="password" class="form-password form-control" id="psw" placeholder="Create a password" required>
                                    </div> 

                                    <div class="form-group">
                                         <label for="AgainpasswordField">Confirm your Password</label>
                                         <input style="border:1px solid grey" type="password" name="password2" class="form-control" id="apsw" placeholder="Confirm your password" required>
                                    </div> 


                                 

                                    	<p id="error" style="color:red"></p>
                                        <!-- <p id="error2" style="color:red"></p> -->
                                       
                                        <?php 
                                            $flag = "reg";
                                        ?>
                                      
                                   
                                    <input type="hidden" name="temp" value="<?php echo $flag ?>">      
                                    <button type="submit" id="reg" class="btn btn-success" onclick="return validation()">Register</button>

                                </form>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title" align="center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" >Instruction</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse in">
        <div class="panel-body">
        	<ul style="color:black">
        		<li>You need to form a team of 2 players.</li>
        		<li>You will have 20 questions and 1 hour time to answer them. Each correct answer gives you 5 marks. There is no negative marking for wrong answers.</li>
        		<li>You have an option to skip a question. However, you can't traverse back i.e. any question can't be visited again.</li>
                <li>The submitted answer should be to the point (maximum 5 words) and in lowercase with spaces wherever required. So if the answer is "Sudoku Nightmare", you need to submit "sudoku nightmare" for it to be accepted.</li>
        	</ul>

        </div>
      </div>
    </div>
  </div> 
		                    </div>
                        </div>
                    </div>
                    <br>
		                   
		                        <div class="btn azm-social azm-size-48 azm-r-square azm-android">
		                        	
		                        	
			                        	<a class="tn btn-primary btn-lg" target="_blank" href="http://www.facebook.com/ifest15/">
			                        		<i class="fa fa-facebook"></i>
			                        
			                        	</a>
		                        
		                        </div>
		                   
          


        <div class="footer"  style="color:white">
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

<?php
header("Location: coming_soon.php");
?>