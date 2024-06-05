<!DOCTYPE html>
<htmnl lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-slim.min.js"> </script>
        <script src="js/popper.min.js"> </script>
        <script src="js/bootstrap.js"> </script>
        <title>online metro</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="allcss.css">
        <script src="blinkingtext.js"></script>


    </head>

    <body onload="blink()" id="body">

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
                <div class="col-sm-2 form-control bg-dark mt-2"><a href="" class="a1">Apna Metro</a></div>
                <div class="col-sm-2 form-control bg-dark mt-2"><a href="about.php" class="a1">About Metro</a></div>
                <div class="col-sm-2 form-control bg-dark mt-2"><a href="" class="a1">Our Services</a></div>
                <div class="col-sm-2 text-center fs-5 mt-2 text-success a"><img src="train.png" height="50px"></div>
            </div>
        </div>
        <!-- end navbar -->

        <!-- start genrate of token -->

        <div class="container">
            <div class="row">
                <div class="col-sm-5 mt-2">

                    <?php

                    $data1 = $_POST['select1'];
                    //echo $data1;
                    $data2 = $_POST['select2'];
                    //echo $data2;
                    $c = $data1 . $data2;
                    $d = $data1 . $data2;
                    $date = date('d M Y');
                    $date2 = date('h:i:s A');
                    $orderid = uniqid();

                    if ($data1 == $data2) {
                        echo "<table>
                        <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>
                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    </tr>

                    <tr>
                    <th colspan=''>You Can Check Your Current Station Because you are same station </th>
                    </tr>
                        
                        </table>";
                    } elseif ($c == 'CCS AirportAmausi' || $c == 'AmausiCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportTransport Nagar' || $c == 'Transport NagarCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportKrishna Nagar' || $c == 'Krishna NagarCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportSingar Nagar' || $c == 'Singar NagarCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportAlambagh' || $c == 'AlambaghCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportAlambagh Bus Station' || $c == 'Alambagh Bus StationCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportMawaiya' || $c == 'MawaiyaCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportDurgapuri' || $c == 'DurgapuriCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportCharbagh' || $c == 'CharbaghCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportHusain Ganj' || $c == 'Husain GanjCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportSachivalaya' || $c == 'SachivalayaCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportHazratganj' || $c == 'HazratganjCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportHazratganj' || $c == 'HazratganjCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportKD Singh Stadium' || $c == 'KD Singh StadiumCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportVishwavidylay' || $c == 'VishwavidylayCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportIT Chauraha' || $c == 'IT ChaurahaCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportBadshah Nagar' || $c == 'Badshah NagarCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportLekhraj Market' || $c == 'Lekhraj MarketCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportBhootnath Market' || $c == 'Bhootnath MarketCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportIndira Nagar' || $c == 'Indira NagarCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CCS AirportMunshipulia' || $c == 'MunshipuliaCCS Airport') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }

                    // amausi to other
                    elseif ($c == 'AmausiAmausi' || $c == 'AmausiAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiTransport Nagar' || $c == 'Transport NagarAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiKrishna Nagar' || $c == 'Krishna NagarAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiSingar Nagar' || $c == 'Singar NagarAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiAlambagh' || $c == 'AlambaghAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiAlambagh Bus Station' || $c == 'Alambagh Bus StationAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiMawaiya' || $c == 'MawaiyaAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiDurgapuri' || $c == 'DurgapuriAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiCharbagh' || $c == 'CharbaghAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiHusain Ganj' || $c == 'Husain GanjAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiSachivalaya' || $c == 'SachivalayaAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiHazratganj' || $c == 'HazratganjAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiHazratganj' || $c == 'HazratganjAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiKD Singh Stadium' || $c == 'KD Singh StadiumAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiVishwavidylay' || $c == 'VishwavidylayAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiIT Chauraha' || $c == 'IT ChaurahaAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiBadshah Nagar' || $c == 'Badshah NagarAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiLekhraj Market' || $c == 'Lekhraj MarketAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiBhootnath Market' || $c == 'Bhootnath MarketAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiIndira Nagar' || $c == 'Indira NagarAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AmausiMunshipulia' || $c == 'MunshipuliaAmausi') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }
                    // end amausi


                    // start transport nagar
                    elseif ($c == 'Transport Nagar' || $c == 'Transport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarTransport Nagar' || $c == 'Transport NagarTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarKrishna Nagar' || $c == 'Krishna NagarTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarSingar Nagar' || $c == 'Singar NagarTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarAlambagh' || $c == 'AlambaghTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarAlambagh Bus Station' || $c == 'Alambagh Bus StationTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarMawaiya' || $c == 'MawaiyaTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarDurgapuri' || $c == 'DurgapuriTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarCharbagh' || $c == 'CharbaghTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarHusain Ganj' || $c == 'Husain GanjTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarSachivalaya' || $c == 'SachivalayaTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarHazratganj' || $c == 'HazratganjTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarHazratganj' || $c == 'HazratganjTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarKD Singh Stadium' || $c == 'KD Singh StadiumTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarVishwavidylay' || $c == 'VishwavidylayTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarIT Chauraha' || $c == 'IT ChaurahaTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarBadshah Nagar' || $c == 'Badshah NagarTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarLekhraj Market' || $c == 'Lekhraj MarketTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarBhootnath Market' || $c == 'Bhootnath MarketTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarIndira Nagar' || $c == 'Indira NagarTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Transport NagarMunshipulia' || $c == 'MunshipuliaTransport Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }
                    // end transport nagar

                    // star krishna nagar
                    elseif ($c == 'Krishna Nagar' || $c == 'Krishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna Nagar' || $c == 'Krishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarKrishna Nagar' || $c == 'Krishna NagarKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarSingar Nagar' || $c == 'Singar NagarKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarAlambagh' || $c == 'AlambaghKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarAlambagh Bus Station' || $c == 'Alambagh Bus StationKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarMawaiya' || $c == 'MawaiyaKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarDurgapuri' || $c == 'DurgapuriKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarCharbagh' || $c == 'CharbaghKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarHusain Ganj' || $c == 'Husain GanjKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarSachivalaya' || $c == 'SachivalayaKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarHazratganj' || $c == 'HazratganjKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarHazratganj' || $c == 'HazratganjKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarKD Singh Stadium' || $c == 'KD Singh StadiumKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarVishwavidylay' || $c == 'VishwavidylayKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarIT Chauraha' || $c == 'IT ChaurahaKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarBadshah Nagar' || $c == 'Badshah NagarKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarLekhraj Market' || $c == 'Lekhraj MarketKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarBhootnath Market' || $c == 'Bhootnath MarketKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarIndira Nagar' || $c == 'Indira NagarKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Krishna NagarMunshipulia' || $c == 'MunshipuliaKrishna Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }
                    // end  krishna nagar


                    // start Singar Nagar
                    elseif ($c == 'Singar Nagar' || $c == 'Singar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar Nagar' || $c == 'Singar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarSingar Nagar' || $c == 'Singar NagarSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarSingar Nagar' || $c == 'Singar NagarSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarAlambagh' || $c == 'AlambaghSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarAlambagh Bus Station' || $c == 'Alambagh Bus StationSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarMawaiya' || $c == 'MawaiyaSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarDurgapuri' || $c == 'DurgapuriSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarCharbagh' || $c == 'CharbaghSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarHusain Ganj' || $c == 'Husain GanjSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarSachivalaya' || $c == 'SachivalayaSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarHazratganj' || $c == 'HazratganjSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarHazratganj' || $c == 'HazratganjSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarKD Singh Stadium' || $c == 'KD Singh StadiumSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarVishwavidylay' || $c == 'VishwavidylaySingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarIT Chauraha' || $c == 'IT ChaurahaSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarBadshah Nagar' || $c == 'Badshah NagarSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarLekhraj Market' || $c == 'Lekhraj MarketSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarBhootnath Market' || $c == 'Bhootnath MarketSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarIndira Nagar' || $c == 'Indira NagarSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Singar NagarMunshipulia' || $c == 'MunshipuliaSingar Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    // end Singar Nagar

                    // start Alambagh
                    elseif ($c == 'Alambagh' || $c == 'Alambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh' || $c == 'Alambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghAlambagh' || $c == 'AlambaghAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghAlambagh' || $c == 'AlambaghAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghAlambagh' || $c == 'AlambaghAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghAlambagh Bus Station' || $c == 'Alambagh Bus StationAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghMawaiya' || $c == 'MawaiyaAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghDurgapuri' || $c == 'DurgapuriAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghCharbagh' || $c == 'CharbaghAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghHusain Ganj' || $c == 'Husain GanjAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghSachivalaya' || $c == 'SachivalayaAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghHazratganj' || $c == 'HazratganjAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghHazratganj' || $c == 'HazratganjAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghKD Singh Stadium' || $c == 'KD Singh StadiumAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghVishwavidylay' || $c == 'VishwavidylayAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghIT Chauraha' || $c == 'IT ChaurahaAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghBadshah Nagar' || $c == 'Badshah NagarAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghLekhraj Market' || $c == 'Lekhraj MarketAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghBhootnath Market' || $c == 'Bhootnath MarketAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghIndira Nagar' || $c == 'Indira NagarAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'AlambaghMunshipulia' || $c == 'MunshipuliaAlambagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }

                    // end Alambagh

                    //start Alambagh Bus Station
                    elseif ($c == 'Alambagh Bus Station' || $c == 'Alambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus Station' || $c == 'Alambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationAlambagh Bus Station' || $c == 'Alambagh Bus StationAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationAlambagh Bus Station' || $c == 'Alambagh Bus StationAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationAlambagh Bus Station' || $c == 'Alambagh Bus StationAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationAlambagh Bus Station Bus Station' || $c == 'Alambagh Bus Station Bus StationAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationMawaiya' || $c == 'MawaiyaAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationDurgapuri' || $c == 'DurgapuriAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationCharbagh' || $c == 'CharbaghAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationHusain Ganj' || $c == 'Husain GanjAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationSachivalaya' || $c == 'SachivalayaAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationHazratganj' || $c == 'HazratganjAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationHazratganj' || $c == 'HazratganjAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationKD Singh Stadium' || $c == 'KD Singh StadiumAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationVishwavidylay' || $c == 'VishwavidylayAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationIT Chauraha' || $c == 'IT ChaurahaAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationBadshah Nagar' || $c == 'Badshah NagarAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationLekhraj Market' || $c == 'Lekhraj MarketAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationBhootnath Market' || $c == 'Bhootnath MarketAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationIndira Nagar' || $c == 'Indira NagarAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Alambagh Bus StationMunshipulia' || $c == 'MunshipuliaAlambagh Bus Station') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }
                    //end Alambagh Bus Station

                    //start Mawaiya
                    elseif ($c == 'Mawaiya' || $c == 'Mawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Mawaiya' || $c == 'Mawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMawaiya' || $c == 'MawaiyaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMawaiya' || $c == 'MawaiyaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMawaiya' || $c == 'MawaiyaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMawaiya Bus Station' || $c == 'Mawaiya Bus StationMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMawaiya' || $c == 'MawaiyaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaDurgapuri' || $c == 'DurgapuriMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaCharbagh' || $c == 'CharbaghMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaHusain Ganj' || $c == 'Husain GanjMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaSachivalaya' || $c == 'SachivalayaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaHazratganj' || $c == 'HazratganjMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaHazratganj' || $c == 'HazratganjMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaKD Singh Stadium' || $c == 'KD Singh StadiumMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaVishwavidylay' || $c == 'VishwavidylayMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaIT Chauraha' || $c == 'IT ChaurahaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaBadshah Nagar' || $c == 'Badshah NagarMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaLekhraj Market' || $c == 'Lekhraj MarketMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaBhootnath Market' || $c == 'Bhootnath MarketMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaIndira Nagar' || $c == 'Indira NagarMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MawaiyaMunshipulia' || $c == 'MunshipuliaMawaiya') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }
                    //end Mawaiya
                    //start Durgapuri
                    elseif ($c == 'Durgapuri' || $c == 'Durgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Durgapuri' || $c == 'Durgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri' || $c == 'DurgapuriDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri' || $c == 'DurgapuriDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri' || $c == 'DurgapuriDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri Bus Station' || $c == 'Durgapuri Bus StationDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri' || $c == 'DurgapuriDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriDurgapuri' || $c == 'DurgapuriDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriCharbagh' || $c == 'CharbaghDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriHusain Ganj' || $c == 'Husain GanjDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriSachivalaya' || $c == 'SachivalayaDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriHazratganj' || $c == 'HazratganjDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriHazratganj' || $c == 'HazratganjDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriKD Singh Stadium' || $c == 'KD Singh StadiumDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriVishwavidylay' || $c == 'VishwavidylayDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriIT Chauraha' || $c == 'IT ChaurahaDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriBadshah Nagar' || $c == 'Badshah NagarDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriLekhraj Market' || $c == 'Lekhraj MarketDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriBhootnath Market' || $c == 'Bhootnath MarketDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriIndira Nagar' || $c == 'Indira NagarDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'DurgapuriMunshipulia' || $c == 'MunshipuliaDurgapuri') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Durgapuri

                    // start Charbagh
                    elseif ($c == 'Charbagh' || $c == 'Charbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Charbagh' || $c == 'Charbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh Bus Station' || $c == 'Charbagh Bus StationCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghCharbagh' || $c == 'CharbaghCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghHusain Ganj' || $c == 'Husain GanjCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghSachivalaya' || $c == 'SachivalayaCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghHazratganj' || $c == 'HazratganjCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghHazratganj' || $c == 'HazratganjCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghKD Singh Stadium' || $c == 'KD Singh StadiumCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghVishwavidylay' || $c == 'VishwavidylayCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghIT Chauraha' || $c == 'IT ChaurahaCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghBadshah Nagar' || $c == 'Badshah NagarCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghLekhraj Market' || $c == 'Lekhraj MarketCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghBhootnath Market' || $c == 'Bhootnath MarketCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghIndira Nagar' || $c == 'Indira NagarCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'CharbaghMunshipulia' || $c == 'MunshipuliaCharbagh') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Charbagh

                    //start Husain Ganj
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjSachivalaya' || $c == 'SachivalayaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Husain Ganj

                    //start Sachivalaya
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjSachivalaya' || $c == 'SachivalayaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'SachivalayaMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  Sachivalaya

                    //start Hazratganj
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHazratganj' || $c == 'HazratganjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'HazratganjMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Hazratganj

                    //start KD Singh Stadium
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjKD Singh Stadium' || $c == 'KD Singh StadiumHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'KD Singh StadiumMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  KD Singh Stadium

                    //start Vishwavidylay
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjVishwavidylay' || $c == 'VishwavidylayHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'VishwavidylayMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  Vishwavidylay

                    //start IT Chauraha
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIT Chauraha' || $c == 'IT ChaurahaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'IT ChaurahaMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  IT Chauraha

                    //start Badshah Nagar
                    elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain Ganj' || $c == 'Husain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj Bus Station' || $c == 'Husain Ganj Bus StationHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjHusain Ganj' || $c == 'Husain GanjHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBadshah Nagar' || $c == 'Badshah NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjLekhraj Market' || $c == 'Lekhraj MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjBhootnath Market' || $c == 'Bhootnath MarketHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Husain GanjIndira Nagar' || $c == 'Indira NagarHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Badshah NagarMunshipulia' || $c == 'MunshipuliaHusain Ganj') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  Badshah Nagar

                    //start Lekhraj Market
                    elseif ($c == 'Lekhraj Market' || $c == 'Lekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj Market' || $c == 'Lekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market Bus Station' || $c == 'Lekhraj Market Bus StationLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketSachivalaya' || $c == 'SachivalayaLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketHazratganj' || $c == 'HazratganjLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketHazratganj' || $c == 'HazratganjLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketKD Singh Stadium' || $c == 'KD Singh StadiumLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketVishwavidylay' || $c == 'VishwavidylayLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketIT Chauraha' || $c == 'IT ChaurahaLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketBadshah Nagar' || $c == 'Badshah NagarLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketLekhraj Market' || $c == 'Lekhraj MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketBhootnath Market' || $c == 'Bhootnath MarketLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketIndira Nagar' || $c == 'Indira NagarLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Lekhraj MarketMunshipulia' || $c == 'MunshipuliaLekhraj Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end  Lekhraj Market

                    //start Bhootnath Market
                    elseif ($c == 'Bhootnath Market' || $c == 'Bhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath Market' || $c == 'Bhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market Bus Station' || $c == 'Bhootnath Market Bus StationBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketSachivalaya' || $c == 'SachivalayaBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketHazratganj' || $c == 'HazratganjBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketHazratganj' || $c == 'HazratganjBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketKD Singh Stadium' || $c == 'KD Singh StadiumBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketVishwavidylay' || $c == 'VishwavidylayBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketIT Chauraha' || $c == 'IT ChaurahaBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBadshah Nagar' || $c == 'Badshah NagarBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketBhootnath Market' || $c == 'Bhootnath MarketBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketIndira Nagar' || $c == 'Indira NagarBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Bhootnath MarketMunshipulia' || $c == 'MunshipuliaBhootnath Market') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Bhootnath Market

                    //start Indira Nagar
                    elseif ($c == 'Indira Nagar' || $c == 'Indira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira Nagar' || $c == 'Indira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar Bus Station' || $c == 'Indira Nagar Bus StationIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarSachivalaya' || $c == 'SachivalayaIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarHazratganj' || $c == 'HazratganjIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarHazratganj' || $c == 'HazratganjIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarKD Singh Stadium' || $c == 'KD Singh StadiumIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarVishwavidylay' || $c == 'VishwavidylayIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIT Chauraha' || $c == 'IT ChaurahaIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarBadshah Nagar' || $c == 'Badshah NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarIndira Nagar' || $c == 'Indira NagarIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Indira NagarMunshipulia' || $c == 'MunshipuliaIndira Nagar') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    }



                    //end Indira Nagar

                    //start Munshipulia
                    elseif ($c == 'Munshipulia' || $c == 'Munshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 10.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'Munshipulia' || $c == 'Munshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 15.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia Bus Station' || $c == 'Munshipulia Bus StationMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 30.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 20.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaSachivalaya' || $c == 'SachivalayaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaHazratganj' || $c == 'HazratganjMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaHazratganj' || $c == 'HazratganjMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaKD Singh Stadium' || $c == 'KD Singh StadiumMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 40.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaVishwavidylay' || $c == 'VishwavidylayMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaIT Chauraha' || $c == 'IT ChaurahaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaBadshah Nagar' || $c == 'Badshah NagarMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 50.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  </tr>

                  </table><hr>";
                    } elseif ($c == 'MunshipuliaMunshipulia' || $c == 'MunshipuliaMunshipulia') {

                        echo "<table border='0' cellspacing='5' cellpadding='5px' height='300px' width='100%'>

                    <tr>
                    <th>From $data1 ---></th>
                    <th colspan='2'>To $data2</th>
                    <th></th>
                    <hr>
                    </tr>
          
                    <tr>                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>No Of Ticket</th>
                    </tr>

                    <tr>                 
                    <td>$date</td>
                    <td>$date2</td> 
                    <td align='center'>1</td>
                    </tr>

                    <tr>                 
                    <th>Total Amount :-</th>
                    <td>Rs 60.0</td> 
                   
                     </tr>

                  <tr>        
                  <th>Order Id :-</th> 
                  <td>$orderid</td> 
                 
                  </tr>

                  <tr>
                  <th colspan='2'>Select Your Payment Method :-</th><th></th>
                  </tr>
                  <tr>
                 <td> <label><input type='radio' name='x' class='text-warning'><img src='paytm.png' height='60px' class='mb-1'></label></td>
                 <td>  <label><input type='radio'name='x'><img src='phonepe.png' height='60px' class='mb-1'></label></td>
                 <td >  <label><input type='radio' name='x'><img src='google_pay.png' height='60px' class='mb-1' width='70px'> </label></td>
                  </tr>

                  <tr>
                  <td><button onclick='payment()' class='btn-primary rounded mt-2 form-control'>Proceed To Pay</button></td> 
                  <td><button onclick='print()' class='btn rounded mt-2 form-control'> Print </button></td>
                  
                 
                  </tr>

                  </table><hr>";
                    }



                    //end Munshipulia

                    ?>
                </div>


                <div class="col-sm-7">
                    <img class="mt-3" src="lucknow maps.jpg" alt="metro maps" height="450px" width="100%">
                </div>
            </div>
        </div>

        <!-- end genrate of token -->

        <!-- footer start  -->
        <div class="container-fluid  bg-dark mt-5">
            <div class="row">
                <div class="col-sm-3 text-center"><img src="logometro.png" class=" mt-3" height="80px">
                    <p class="text-light"><br>Apna Metro Rail Corporation</p>
                </div>
                <div class="col-sm-3 mt-3 ">
                    <h5 class="text-light nav-link ">About Metro</h5>
                    <a href="" class="fa1 nav-link a3">Home</a>
                    <a href="" class="fa1 nav-link a3">Apna Metro</a>
                    <a href="" class="fa1 nav-link a3">Project</a>
                    <a href="" class="fa1 nav-link a3">Government Fund</a>

                </div>
                <div class="col-sm-3 mt-3 ">
                    <h5 class="text-light nav-link">Dashboard</h5>

                    <a href="registrationlist.php" target="_blank" class="fa1 nav-link a3">All Registration List</a>
                    <a href="" class="fa1 nav-link a3">Comment User List</a>
                    <a href="" class="fa1 nav-link a3">Ticket List</a>
                    <a href="" class="fa1 nav-link a3">Home</a>

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
        <!-- start js -->
        <Script>
            function payment() {
                alert("Ticket Booked Successfully");
            }
        </Script>
        <!-- end js -->


    </body>

    </html>