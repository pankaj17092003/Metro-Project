<?php

$firstname = $_POST['fname'];
//echo $firstname."<br>";
$lastname = $_POST['lname'];
//echo $lastname."<br>";
$email = $_POST['email'];
//echo $email."<br>";
$password = $_POST['pass'];
//echo $password."<br>";
$password2 = $_POST['pass2'];
//echo $password2."<br>";

$conn = mysqli_connect("localhost", "root", "", "metroproject");
if ($password == $password2) {
    $ins = "insert into registration(fname,lname,email,password)values('$firstname','$lastname','$email','$password')";

    //$ins=mysqli_query($conn , $sql);

    if (mysqli_query($conn, $ins)) {
        header("location:login.php");
    } else {
        echo "step1 data not store";
    }
} else {
    // echo "password do not match";
    echo '<script>alert("password do not match");</script> .<br>.';
    header("location:ragistration.php");
}
