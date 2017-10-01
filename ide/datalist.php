<?php

session_start();
if ($_POST['password'] == 'darocks') {
    
    require('function.php');

   

    $Event = array();

    $conn = mysql_connect($host, $user, $psw);

    $db_selected = mysql_select_db($db, $conn);

    $selectevent = "SELECT * FROM login";

    $export = mysql_query($selectevent) or die("Sql error : " . mysql_error());

    $fields = mysql_num_fields($export);

    while ($row = mysql_fetch_row($export)) {
        $Event[$row[0]] = $row[1];
    }

    mysql_close($conn);
    echo json_encode($Event);
}
 else {
    echo json_encode('ERROR');
}
?>