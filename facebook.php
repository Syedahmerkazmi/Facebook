<?php

$servername='localhost';
$username='root';
$password='';
$dpname='facebook';
$conn=new mysqli($servername,$username,$password,$dpname);
if(!$conn)
{
    die('connect failed :' .mysqli_error());
}
else
{
    $GLOBALS['conn']=$conn;
}
?>