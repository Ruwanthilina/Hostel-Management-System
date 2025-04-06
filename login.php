<?php   
    include_once'heder.php'  
?>

<div class="from" >
<form action="inculde/login.inc.php" method="post">
   <h2>Hostal Mangemant System</h2>
       
        <input type="text" id="fname" name="username" placeholder="Register Number / Email">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <button name="submit"type="submit">Log in</button>
</form>
<?php   
   if(isset($_GET["error"]))  {
    if($_GET["error"] == "emptyinput"){
      echo '<div class="error"> Fill in the all fileds </div>';
   
    }else if($_GET["error"] == "wronglogin"){
     echo '<div class="error"> Invalid Ditalis </div>';
    }
   
    else if($_GET["error"] == "stmtfaild"){
    echo '<div class="error"> Something wen worng! </div>';
   }
    else if($_GET["error"] == "non"){
    echo '<div class="error"> Acount created </div>';
   }

   }

?>
<p>New Here ? <a href="singup.php">Sign up</a></p>
</div>

<?php   
    include_once'footer.php'  
?>
