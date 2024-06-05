<?php

$conn = mysqli_connect("localhost", "root", "", "metroproject");

$delid = $_REQUEST['idd'];

$del = "delete from registration where id=$delid";

if (mysqli_query($conn, $del)) {
  header("location:registrationlist.php");
} else {
  echo "data not deleted";
}
