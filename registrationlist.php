<?php
$conn = mysqli_connect("localhost", "root", "", "metroproject");

$select = "select * from registration";
$r = mysqli_query($conn, $sel);
?>



<htm>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="allcss.css">

  </head>

  <body onload="blink()">

    <!-- start navbar -->
    <div class="container-fluid">
      <div class="row bg-warning">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 text-center mt-4"><img src="logometro.png" height="80px">
          <p class="text-dark">Apna Metro Rail <span class="text-success">Corporation</span></p>
        </div>
        <div class="col-sm-6 mt-4">
          <h4 class="text-dark">Uttar Pradesh Apna Metro -<span class="text-danger">- Rail Corporation
              Limited</span></h4>
          <span class="h4" id="b"></span>
        </div>
        <div class="col-sm-3 mt-5 ">
          <button class="btn-outline-dark form-group rounded text-light b1"><a class="text-light nav-link" href="ragistration.php">Registration</a> </button>
          <button class="btn-outline-dark rounded text-light b2"><a class="text-light nav-link" href="login.php">Login</a></button>
        </div>
      </div>

      <div class="row  text-center fw-5">
        <div class="col-sm-2 mt-2 text-success"><img src="train.png" height="50px"></div>
        <div class="col-sm-2 form-control bg-dark mt-2"><a href="index.php" class="active a1">Home</a></div>
        <div class="col-sm-2 form-control bg-dark mt-2"><a href="iNote.php" class="a1">Apna Metro</a></div>
        <div class="col-sm-2 form-control bg-dark mt-2"><a href="about.php" class="a1">About Metro</a></div>
        <div class="col-sm-2 form-control bg-dark mt-2"><a href="iNote.php" class="a1">Our Services</a></div>
        <div class="col-sm-2 text-center fs-5 mt-2 text-success a"><img src="train.png" height="50px"></div>
      </div>
    </div>
    <!-- end navbar -->

    <div class="cntainer">
      <div class="row">
        <div class="col-sm-12 mt-3">

          <h3 align="center">REGISTRATION USER LIST </h3>
          <table border="1" cellspacing="0" cellpadding="20px" bgcolor="red blue" align="center">
            <tr>
              <th>ID</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th> EMAIL ID</th>
              <th>PASSWORD</th>
              <th>DELETE</th>
              <th>UPDATE</th>
            </tr>

            <?php
            while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
            ?>

              <tr>
                <td><?php echo $k['0'] ?></td>
                <td><?php echo $k['1'] ?></td>
                <td><?php echo $k['2'] ?></td>
                <td><?php echo $k['3'] ?></td>
                <td><?php echo $k['4'] ?></td>
                <td><a href="deleteregistration.php?idd=<?php echo $k['0'] ?>">Delete</a></td>
                <td><a href="edit_registration.php?idd=<?php echo $k['0'] ?>">Edit </a></td>
              </tr>
            <?php
            }
            ?>

          </table>
        </div>
      </div>
    </div>

    <!-- footer start  -->
    <div class="container-fluid  bg-dark mt-5">
      <div class="row">
        <div class="col-sm-3 text-center"><img src="logometro.png" class=" mt-3" height="80px">
          <p class="text-light"><br>Apna Metro Rail Corporation</p>
        </div>
        <div class="col-sm-3 mt-3 ">
          <h5 class="text-light nav-link ">About Metro</h5>
          <a href="iNote.php" class="fa1 nav-link a3">Home</a>
          <a href="iNote.php" class="fa1 nav-link a3">Apna Metro</a>
          <a href="iNote.php" class="fa1 nav-link a3">Project</a>
          <a href="iNote.php" class="fa1 nav-link a3">Government Fund</a>

        </div>
        <div class="col-sm-3 mt-3 ">
          <h5 class="text-light nav-link">Dashboard</h5>

          <a href="registrationlist.php" target="_blank" class="fa1 nav-link a3">All Registration List</a>
          <a href="iNote.php" class="fa1 nav-link a3">Comment User List</a>
          <a href="iNote.php" class="fa1 nav-link a3">Ticket List</a>
          <a href="iNote.php" class="fa1 nav-link a3">Home</a>

        </div>
        <div class="col-sm-3 mt-3 text-light">
          <h5 class="text-light nav-link">Contact Us</h5>
          <a href="https://mail.google.com/mail/u/0/#inbox" class="contact a3"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>&ensp;pkraj725883@gmail.com</a><br>
          <a href="" class="contact a3"> <i class="fa-solid fa-phone " style="color: #ffffff;"></i>
            &ensp;725836052</a> <br><br>

          <a href="https://wa.me/qr/5EGVPAKQ6SRML1" target="_blank"><i class="fa-brands fa-whatsapp a3" style="color: #f7f9fc;"></i></a>&ensp;
          <a href="https://instagram.com/iam_pankajjjj0217?igshid=YTQwZjQ0NmI0OA==" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>&ensp;
          <a href="https://www.facebook.com/pankaj.yadaw.927" target="_blank"><i class="fa-brands fa-facebook" style="color: #f7f7f8;"></i></a>&ensp;
          <a href="https://www.linkedin.com/in/pankaj-yadav-1b9561285?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa-brands fa-linkedin" style="color: #f3f4f7;"></i></a>&ensp;
          <a href=""><i class="fa-brands fa-twitter" style="color: #f2f4f8;"></i></a>&ensp;
          <a href=""><i class="fa-brands fa-github" style="color: #f7f9fc;"></i></a>&ensp;
          <a href="https://youtube.com/@pankaj_yadavv?si=nM7AXORWueDz0E4Z" target="_blank"><i class="fa-brands fa-youtube a3" style="color: #f7f9fc;"></i></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <p class="text-light text-center" style="font-size: 10px;">
            Copyright ©
            <?php echo " 20" . date('y') ?> Apna Metro.Com All Rights Reseved
          </p>
        </div>
      </div>
    </div>
    <!-- footer end -->


    <!-- addd javascript changing word section -->
    <script src="blinkingtext.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

  </body>

  </html>