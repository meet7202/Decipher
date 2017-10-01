function validation(){

	//for registration form 
	var i=0;
	var error[];
	var name_1 = document.registration.name1;
	var name_2 = document.registration.name2;
	var email = document.registration.email;
	var mobile = document.registration.mobile;
	var college = document.registration.college;
	var password = document.registration.password;
	var password2 = document.registration.password2;

	if(mobile.length != 10 ){
		error[i] = "Enter Mobile No. without including +91 or 0<br>";
		i++;		
		return false;
	}
		
	if(password != password2){
		error[i]	= "Passwords does not match<br>";
		i++;
		return false;
		
	}
	
}