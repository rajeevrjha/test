<?php
session_start();
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
$_SESSION['a']=0;
?>

<!DOCTYPE html>

<html>
   <head>
      <title>Online Quiz Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
      <script>
      var p,q,r;
      history.pushState(null, null, 'control.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'control.php');
    });
      function retrieve()
      {
         clearTimeout(q);
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("t").innerHTML = xmlhttp.responseText;
                r=setTimeout(retrieve, 5000);
            }
        }
        xmlhttp.open("GET", "u.php", true);
        xmlhttp.send();
      }
      function refresh()
      {
        clearTimeout(r);
        clearTimeout(q);
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("t").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "w.php", true);
        xmlhttp.send();

      }

 function d()
      {
         clearTimeout(r);
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("t").innerHTML = xmlhttp.responseText;
                q=setTimeout(d, 5000);

            }
        }
        xmlhttp.open("GET", "k.php", true);
        xmlhttp.send();

      }
  
      </script>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
         queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page 
         via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
            html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
            respond.min.js"></script>
      <![endif]-->
   </head>
   
    <body class="bg-warning">
<br>
   <br> 
   <br>
   <button onclick="retrieve()" class="btn btn-primary btn-lg " role="button">Buzzer Time</button>
   <button onclick="refresh()" class="btn btn-primary btn-lg " role="button"> Refresh </button>
    <button onclick="d()" class="btn btn-primary btn-lg " role="button"> Delete </button>
     <a href="logout.php"  class="btn btn-primary btn-lg " role="button" >
         LogOut </a>
 <br>
 <div id="t">   <?php if(isset($_GET['id'])) {  ?>
      <p><center><strong> 
      <div class="alert alert-success">
         <p><strong>Item Successfully Deleted</strong></p>
      </div></strong></center></p>
   <?php } ?>
   <?php if(isset($_GET['id1'])) {  ?>
   <p><center><strong> 
      <div class="alert alert-danger">
         <p><strong>No item to Delete</strong></p>
      </div></strong></center></p>
      <?php } ?>
   
  <br>
  <br>
  <br>
  <div id="m">
  
