<?php

    $pattern = "GA0a!b1|cbdN@efg2hCiH3`jkD#1P40mM%n^JVo\q5pRE_<q=)SIK9rs6&tT*uUF,L-(vZ/7w~Wx+8yX>zY";

    $length = strlen($pattern)-1;
    $password = [];

    for($i=0;$i<8;$i++){
       $index =  rand(0,$length);
       $password[] = $pattern[$index];

    }
    
    echo implode($password); //to convert array data to string
 
    





// implode(array) - "used to join the elements of an array & form one string"
// rand(min,max) - "generate a pseudo - random integer"
// strlen(string) - "return the length of parameter"

?>






