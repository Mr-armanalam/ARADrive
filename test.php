<?php 

    $check = mail("armanalam91174@gmail.com","Testing purpose","This is a Testing email from xampp server","From:armanalam78578@gmail.com");
    if($check==true){
        echo "email sent successfully";
    }else{
        echo "email not sent successfully";
    }

?>

