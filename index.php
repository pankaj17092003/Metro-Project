<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-slim.min.js"> </script>
        <script src="js/popper.min.js"> </script>
        <script src="js/bootstrap.js"> </script>
        <title>online metro</title>
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
                <div class="col-sm-2 form-control bg-dark mt-2"><a href="iNote.phpiNote.php" class="a1">Our Services</a></div>
                <div class="col-sm-2 text-center fs-5 mt-2 text-success a"><img src="train.png" height="50px"></div>
            </div>
        </div>
        <!-- end navbar -->
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-12">
                    <video src="metrovideo2.mp4" class="v" autoplay muted loop> </video>
                    <div class="text-center mt-5 text-light mt-5">

                        <form action="station_data.php" method="post">

                            <select name="select1" class="bg-warning rounded mt-5 b" style="height: 60px;color: white;font-weight: bold;">
                                <option class="text-warning">From Station</option>
                                <option>CCS Airport</option>
                                <option>Amausi</option>
                                <option>Transport Nagar</option>
                                <option>Krishna Nagar</option>
                                <option>Singar Nagar</option>
                                <option>Alambagh</option>
                                <option>Alambagh Bus Station</option>
                                <option>Mawaiya</option>
                                <option>Durgapuri</option>
                                <option>Charbagh</option>
                                <option>Husain Ganj</option>
                                <option>Sachivalaya</option>
                                <option>Hazratganj</option>
                                <option>KD Singh Stadium</option>
                                <option>Vishwavidylay</option>
                                <option>IT Chauraha</option>
                                <option>Badshah Nagar</option>
                                <option>Lekhraj Market</option>
                                <option>Bhootnath Market</option>
                                <option>Indira Nagar</option>
                                <option>Munshipulia</option>

                            </select>
                            <span class="text-warning " style="font-size: 30px ;"> &rightleftarrows;</span>
                            <select name="select2" class="bg-warning rounded b" style="height: 60px;color: #fff;font-weight: bold; border-radius: 50%;">
                                <option class="text-warning"> To Station</option>
                                <option>CCS Airport</option>
                                <option>Amausi</option>
                                <option>Transport Nagar</option>
                                <option>Krishna Nagar</option>
                                <option>Singar Nagar</option>
                                <option>Alambagh</option>
                                <option>Alambagh Bus Station</option>
                                <option>Mawaiya</option>
                                <option>Durgapuri</option>
                                <option>Charbagh</option>
                                <option>Husain Ganj</option>
                                <option>Sachivalaya</option>
                                <option>Hazratganj</option>
                                <option>KD Singh Stadium</option>
                                <option>Vishwavidylay</option>
                                <option>IT Chauraha</option>
                                <option>Badshah Nagar</option>
                                <option>Lekhraj Market</option>
                                <option>Bhootnath Market</option>
                                <option>Indira Nagar</option>
                                <option>Munshipulia</option>

                            </select>
                            <br>
                            <button class="btn btn-outline-primary mt-5 b" style="font-weight: bold;width:200px;height:60px">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- footer start  -->
        <div class="container-fluid footer bg-dark mt-5">
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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</php>