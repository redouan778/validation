function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var password = document.forms["myForm"]["password"].value;
  var zip = document.forms["myForm"]["zip"].value;
  var phone = document.forms["myForm"]["phone"].value;
  var mail = document.forms["myForm"]["mail"].value;
  var city = document.forms["myForm"]["city"].value;
  var sport = document.forms["myForm"]["sport"].value;
  var soccerPlayer = document.forms["myForm"]["soccerPlayer"].value;
  var car = document.forms["myForm"]["car"].value;

  var alert = document.getElementById('alert');

  if (name == "") {
    alert.style.display = "block";
    document.getElementById('error1').style.display = "block";
    setTimeout(function(){
    document.getElementById('error1').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (password == "") {
    alert.style.display = "block";
    document.getElementById('error2').style.display = "block";
    setTimeout(function(){
    document.getElementById('error2').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (zip == "") {
    alert.style.display = "block";
    document.getElementById('error3').style.display = "block";
    setTimeout(function(){
    document.getElementById('error3').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (phone == "") {
    alert.style.display = "block";
    document.getElementById('error4').style.display = "block";
    setTimeout(function(){
    document.getElementById('error4').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
     return false;
  }
  if (mail == "") {
    alert.style.display = "block";
    document.getElementById('error5').style.display = "block";
    setTimeout(function(){
    document.getElementById('error5').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (city == "") {
    alert.style.display = "block";
    document.getElementById('error6').style.display = "block";
    setTimeout(function(){
    document.getElementById('error6').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }

  if (sport == "") {
    alert.style.display = "block";
    document.getElementById('error7').style.display = "block";
    setTimeout(function(){
    document.getElementById('error7').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }


  if (soccerPlayer == "") {
    alert.style.display = "block";
    document.getElementById('error8').style.display = "block";
    setTimeout(function(){
    document.getElementById('error8').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }

  if (car == "") {
    alert.style.display = "block";
    document.getElementById('error9').style.display = "block";
    setTimeout(function(){
    document.getElementById('error9').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
}
