<?php
$conn = mysqli_connect("localhost", "root", "", "metroproject");

$editid = $_REQUEST['idd'];

$sel = "select * from registration where id=$editid";

$r = mysqli_query($conn, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>

<body>
    <h1> Edit page<h1>
            <form action="updateregistrationlist.php" method="post">

                <input type="hidden" name="id" value="<?php echo $k['0'] ?>">

                First Name <br><input type="text" name="fname" value="<?php echo $k['1'] ?>"><br>
                Last Number<br> <input type="text" name="lname" value="<?php echo $k['2'] ?>"><br>
                Email <br><input type="Email" name="email" value="<?php echo $k['3'] ?>"><br>
                Password <br><input type="text" name="pass" value="<?php echo $k['4'] ?>"><br>

                <br><button> Update </button>
            </form>
</body>

</html>