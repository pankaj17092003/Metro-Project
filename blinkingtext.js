
    i = 0;

    function blink() {


      i = i + 1;
      if (i == 1) {

        document.getElementById("b").innerHTML = "CCS Airport";
        document.getElementById("b").style.color = "brown";
      } else if (i == 2) {
        document.getElementById("b").innerHTML = "Amausi";
        document.getElementById("b").style.color = "green";
      } else if (i == 3) {
        document.getElementById("b").innerHTML = "Transport Nagar";
        document.getElementById("b").style.color = "yellow";
      } else if (i == 4) {
        document.getElementById("b").innerHTML = "Krishna Nagar";
        document.getElementById("b").style.color = "aqua";
      } else if (i == 5) {
        document.getElementById("b").innerHTML = "Singar Nagar";
        document.getElementById("b").style.color = "pink";
      } else if (i == 6) {
        document.getElementById("b").innerHTML = "Alambagh";
        document.getElementById("b").style.color = "red";
      } else if (i == 7) {
        document.getElementById("b").innerHTML = "Alambagh Bus Station";
        document.getElementById("b").style.color = "gray";
      } else if (i == 8) {
        document.getElementById("b").innerHTML = "Mawaiya";
        document.getElementById("b").style.color = "gold";
      } else if (i == 9) {
        document.getElementById("b").innerHTML = "Durgapuri";
        document.getElementById("b").style.color = "black";
      } else if (i == 10) {
        document.getElementById("b").innerHTML = "Charbagh";
        document.getElementById("b").style.color = "silvergold";
      } else if (i == 11) {
        document.getElementById("b").innerHTML = "Husain Ganj";
        document.getElementById("b").style.color = "red";
      } else if (i == 12) {
        document.getElementById("b").innerHTML = "Sachivalaya";
        document.getElementById("b").style.color = "blue";
      } else if (i == 13) {
        document.getElementById("b").innerHTML = "Hazratganj";
        document.getElementById("b").style.color = "black";
      } else if (i == 14) {
        document.getElementById("b").innerHTML = "KD Singh Stadium";
        document.getElementById("b").style.color = "aqua";
      } else if (i == 15) {
        document.getElementById("b").innerHTML = "Vishwavidylay";
        document.getElementById("b").style.color = "red";
      } else if (i == 16) {
        document.getElementById("b").innerHTML = "IT Chauraha";
        document.getElementById("b").style.color = "green";
      } else if (i == 17) {
        document.getElementById("b").innerHTML = "Badshah Nagar";
        document.getElementById("b").style.color = "black";
      } else if (i == 18) {
        document.getElementById("b").innerHTML = "Lekhraj Market";
        document.getElementById("b").style.color = "blue";
      } else if (i == 19) {
        document.getElementById("b").innerHTML = "Bhootnath Market";
        document.getElementById("b").style.color = "aqua";
      } else if (i == 20) {
        document.getElementById("b").innerHTML = "Indira Nagar";
        document.getElementById("b").style.color = "brown";
      } else {
        document.getElementById("b").innerHTML = "Munshipulia";
        document.getElementById("b").style.color = "green";
        i = 0;
      }
      setTimeout("blink()", 1000);
    }