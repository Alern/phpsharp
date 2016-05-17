<?php
$link = mysqli_connect('localhost','allan','allan','interview');

if($link === false){
    echo "Failed to connect to server";
}

$fname=mysqli_real_escape_string($link, $_POST['firstname']);
$lname=mysqli_real_escape_string($link, $_POST['lastname']);
$email=mysqli_real_escape_string($link, $_POST['email']);

$query= "INSERT INTO persons(first_name, last_name, email_address) VALUES('$fname', '$lname', '$email')";

if(mysqli_query($link, $query)){
    echo "succesful";
}else echo "Failure";

mysqli_close($link);

?>
