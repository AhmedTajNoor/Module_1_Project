<?php

define("USERNAME","admin");
define("PASSWORD","12345");

echo"Enter Username: ";
$Username = readline();

echo"Enter Password: ";
$Password = readline();

if(empty($Username) || empty($Password)) {
    echo "User name or Password is blank";
}else{
    if($Username === USERNAME && $Password === PASSWORD) {
        echo "Login Successful !\n";
    }else{
        echo "Invalid Username or Password ! \n";
    }
}
