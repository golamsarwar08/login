<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "logindb";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!conn){
    die("connection failed".mysqli_connect_error());

}

if(isset($_POST['save'])){

    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql_query = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";

    if(mysqli_query($conn,$sql_query)){
        echo "Login Successfully";
    }
    else{
        echo "Error : ". $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}