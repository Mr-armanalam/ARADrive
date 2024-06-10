<?php 

require("db.php");

if($_SERVER['REQUEST_METHOD']== "POST"){
    

    $pattern = "1234567890";

    $length = strlen($pattern)-1;
    $v_code = [];

    for($i=0;$i<6;$i++){
       $index =  rand(0,$length);
       $v_code[] = $pattern[$index];

    }
    
    $ver_code = implode($v_code); //to convert array data to string
    
    $full_name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check = "SELECT email fROM users WHERE email = '$email'";
    $response = $db->query($check);

    if($response ->num_rows !=0){
        echo "usermatch";
    }
    else{

       $send_atc = mail($email,"Activation Code","Thank you for choosing Our Product . Your Activation Code is ".$ver_code,"From:armanalam78578@gmail.com");
       if($send_atc){

        $store = "INSERT INTO users(full_name,email,password,activation_code)
        VALUES ('$full_name','$email','$password','$ver_code')";

        if($db->query($store)){

            echo "success";
        }else{
            echo "failed";
        }

       }
       else{
        echo "Try again with other email id";
       }
    }
}else{
    echo "unauthorised request";
}
?>