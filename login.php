<?php

$conn = mysqli_connect("localhost", "root", "", "itpc2");

if (!$conn){
    die("Wrong");

}

$email = $_post['email'];
$password = $_post['password'];

$sql = "Select * From students Where email = '$email' and password = '$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo("Welcome");
    
}

else{
    echo "Login Failed";
}
mysqli_close($conn)
?>
