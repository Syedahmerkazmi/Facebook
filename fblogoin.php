<?php
session_start();
include 'facebook.php';

?>


<?php

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['pasword'];
    

    $query="SELECT * FROM user_detaIls WHERE email='$email'";
    $query_already=mysqli_query($conn,$query);
    
    if($query_already->num_rows>0)
    {
        echo "<script> alert('Already registerd')</script>";
        ?>
    <meta http-equiv="refresh" content="0; url=facebook.html";>
        <?php

    }
    else{
        $query="INSERT INTO `user_details`( `email`, `password`) VALUES ('$email','$password')";
    $query_run=mysqli_query($conn,$query);

    // echo "<script> alert('Logied In')</script>";
    ?>
<meta http-equiv="refresh" content="0; url=facebook.html";>
    <?php
    
    }
}
?>