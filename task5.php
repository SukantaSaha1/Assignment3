<?php

 

 function generatePassword($length) {
     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    return substr(str_shuffle($characters), 0, $length);
 }
 
 $length = 12;
 $password = generatePassword($length);
 echo "Generated Password: {$password}\n";





?>