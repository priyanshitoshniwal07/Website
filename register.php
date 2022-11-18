<?php
    $alert=false;
    $showError=false;
    $rowError=false;
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        // include 'components/db.php';
        $con = mysqli_connect("localhost","root","","website");

        if (!$con)
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $email= $_POST["email"];
        $password= $_POST["password"];
        $cpassword=$_POST["cpassword"];
        $existsql="select * from users where email='$email'";
        $result=mysqli_query($con,$existsql);
        $numexistrows= mysqli_num_rows($result); 
        if($numexistrows>0)
        {   
            $rowError=true;
        }
        else
        {
            if(($email!='' || $email!=NULL) &&  $password==$cpassword)
            {    
                $sql="INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password');";
                $result=mysqli_query($con,$sql);
                echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
                // $alert=true;
            }
            else
            {
                $showError=true;
            }
        }
    }
?>