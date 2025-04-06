<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hostel Mangemnet System</title> 


<!-- Horizontal Navigation Bar 

coler type ---- #900C3F red
           ---- #062566

-->

    <style>
            *{margin: 0;}
    ul {
      border-top: 5px solid #900C3F;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #062566;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }
      /*--Css fro frome **********/
     input[type=text] ,input[type=password] , select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      background-color: #062566;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .from{

      width: 70%; height: 50%;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      
    }

    .error{
      color: red;
      border: 1px sloid red;
      padding: 12px;
      font-size: 15px;
      margin-bottom: 10px;
    }


  
 .notavlable {
  
  padding: 8px;
}

.notavlable {
  text-align: center;
  text-transform: uppercase;
  color: #E1045A;
}


   


</style>

</head>


<body>

  <!-- Horizontal Navigation Bar -->   
<ul>
  <li><a class="active" href="Home_page.html">Home</a></li>


 
<?php
 /*left uadata name aka wettenna sallawasanwa/ #profile aka link karanna*/
if(isset($_SESSION["usersName"])){
    echo'<li style="float:right"><a href="inculde/logout.inc.php">Logout</a></li>';
    echo'<li style="float:right"><a href="#">'. $_SESSION["usersName"] . '!</a></li>';

 } else{

 }

?> 

</ul> 





<div class="container" style="margin :20px">