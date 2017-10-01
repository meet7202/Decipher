<?php

require('function.php');
// $password = $_POST['password'];

if($_POST['password']=='id2015#'){
                $conn = mysql_connect($host, $user, $psw);
                $db_selected = mysql_select_db($db,$conn);
                $selectregister = "SELECT * FROM login";
                $export = mysql_query ( $selectregister ) or die ( "Sql error : " . mysql_error( ) );
                $fields = mysql_num_fields ( $export );
                for ( $i = 0; $i < $fields; $i++ )
                {
                    $header .= mysql_field_name( $export , $i ) . ",";
                }
                while( $row = mysql_fetch_row( $export ) )
                {
                    $line = ''; 
                    foreach( $row as $value )
                    {   
                        if ( ( !isset( $value ) ) || ( $value == "" ) )
                        {
                            $value = ",";
                        }
                        else
                        {
                            $value = str_replace( '"' , '""' , $value );
                            $value = '"' . $value . '"' . ",";
                        }
                        $line .= $value;
                    }
                    $data .= trim( $line ) . "\n";
                }
                $data = str_replace( "\r" , "" , $data );
                if ( $data == "" )
                {
                    $data = "\n(0) Records Found!\n";                        
                }
                mysql_close($conn);
                header("Content-type: application/octet-stream");
                header("Content-Disposition: attachment; filename=login_data.csv");
                header("Pragma: no-cache");
                header("Expires: 0");
                print "$header\n$data";
                }
                

         else{
            echo "Wrong password";
         }

?>



