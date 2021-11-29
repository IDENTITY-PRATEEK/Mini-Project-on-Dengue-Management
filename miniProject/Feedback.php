<?php
		$connection = mysqli_connect('localhost','root','','Feedback',);

        if (!$connection)
{
    echo "connection error";
}

if(mysqli_connect('localhost','root','','Feedback'))
{
    echo "Connection established";
} 
else
{
    echo "server not responding";
}

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Feedback = $_POST['Feedback'];

$sql = "INSERT INTO Feedback(`Username`,`Email`,'Feedback') VALUES('$Username','$Email','Feedback')";

if (mysqli_query($connection,$sql))
 {
        echo 'Introduction.html';
    }
    else
    {
        echo 'you are not the admin';
    }

?>
