<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
    }

    /* Add some content at the bottom of the video/page */
    .content {
      position: fixed;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }

    /* Style the button used to pause/play the video */
    #myBtn {
      width: 200px;
      font-size: 18px;
      padding: 10px;
      border: none;
      background: rgb(162, 31, 227);
      color: #fff;
      cursor: pointer;
    }

    #myBtn:hover {
      background: #ddd;
      color: black;
    }

    .home {
      text-align: center;

      text-decoration: none;
    }

    a {
      text-decoration: none;
      background-color: blueviolet;
      color: white;
      padding: 15px;
      border-radius: 5px;

    }

    a:hover {
      background-color: dodgerblue;
    }
  </style>
</head>

<body>

  <!-- The video -->
  <video autoplay muted loop id="myVideo">
    <source src="coming4pic.mp4" type="video/mp4">
  </video>

  <!-- Optional: some overlay text to describe the video -->
  <div class="content">
    <h1>Comming Soon.</h1>
    <p>Notes Comming...</p>
    <h1 class="home"><a href="index.php">Back To Home</a></h1><br><br>
    <!-- Use a button to pause/play the video with JavaScript -->
    <button id="myBtn" onclick="myFunction()">Pause</button>
  </div>


  <script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>