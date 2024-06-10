<?php 

require("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email =  $_POST['email'];
    $check = "SELECT email FROM users WHERE email = '$email'";
    $response = $db->query($check);

    if($response->num_rows !=0){
        echo "usermatch";
    }
    else{
        echo "notfound";
    }

}
else{
    echo "unauthorised request";
}


// mysqli_query() - give a text editer to write a mysql syntax and perform SELECT,SHOW,DELETE operation and also return true on success or false on error
// musqli_num_rows() - returns an integer value like number of rows/records in the given result object


?>