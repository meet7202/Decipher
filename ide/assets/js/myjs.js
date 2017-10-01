function ispassok() {
                        var pass1 = document.getElementById("psw").value;
                        var pass2 = document.getElementById("apsw").value;
                        var ok = false;
                        if (pass1 != pass2) {
                            //alert("Passwords Do not match");
                            document.getElementById("psw").style.borderColor = "#E34234";
                            document.getElementById("apsw").style.borderColor = "#E34234";
                            ok = false;
                            document.getElementById("error").innerHTML="Passwords does not match";
                        }

                        else{
                            ok = true;
                        }
                
                        return ok;
                    }


function captcha(form) {
                        var v = grecaptcha.getResponse();
                        if(v.length == 0)
                        {
                            document.getElementById('caperror').innerHTML="You can't leave Captcha Code empty";
                            return false;
                        }
                        if(v.length != 0)
                        {
                            document.getElementById('caperror').innerHTML="Captcha completed";
                            return true; 
                        }
                    }