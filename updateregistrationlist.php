<?php

$editid = $_POST['id'];

$a = $_POST['fname'];

$b = $_POST['lname'];

$c = $_POST['email'];

$d = $_POST['pass'];
// $e = $_POST['cpass'];


$conn = mysqli_connect("localhost", "root", "", "metroproject");

$up = "update registration set fname='$a',lname='$b',email='$c',password='$d' where id=$editid";


if (mysqli_query($conn, $up)) {
  header("location:registrationlist.php");

  // echo "<script> alert('successfully updating you details');</script>";
} else {
  echo "data not update";
}
