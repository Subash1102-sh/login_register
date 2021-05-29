<?php   
   session_start();
   
     $con = mysqli_connect('localhost','root','blank');
     mysqli_select_db($con,'user_register');
     $name =$-POST['user'];
     $pass =$-POST['password'];
     $s = "select * from usertable where name = '$name' && password ='$pass";
    $result = mysqli_query($con,$s);
    $num =mysqli_num_rows($result);
     if($num ==1){
        header('location:login.php');
     }else{
        header('location:login.php');
         
     }
?>