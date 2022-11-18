<?php
    $login=false;
    $showError=false;
    $_SESSION['loggedin']=false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        // include 'components/db.php';
        $con = mysqli_connect("localhost","root","","website");
        $email= $_POST["email"];
        $password= $_POST["password"];
            
            $sql="select * from users where email='$email' && password='$password'";
            $result=mysqli_query($con,$sql);
            $num = mysqli_num_rows($result);
            if ($num ==1)
            {
                $login = true;
                session_start();
                $_SESSION['loggedin']= "true";
                $_SESSION['email']= $email;
                header("location: index.php");
            }
            else
            {
                $showError = true;
            }
        
    }
?>