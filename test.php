<?php
		$connection = mysqli_connect('localhost','root','','Login',);

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "INSERT INTO Login(`Username`,`Password`) VALUES('$Username','$Password')";

if (mysqli_query($connection,$sql))
 {
        include 'Introduction.html';
    }
    else
    {
        echo 'you are not the admin';
    }

?>
