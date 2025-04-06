<?php   
    include_once'heder.php'  
?>

<div class="from" >
<form action="inculde/singin.inc.php" method="post">
   <h1> Welcome To Hostel Mangemant System  </h1>
   <h2>Wayamba University of Sri Lanka</h2>


<input type="text" id="fname" name="fname" placeholder="First Name ">
<input type="text" id="fname" name="lname" placeholder="Last Name">
<input type="text" id="fname" name="email" placeholder="Email">
<input type="text" id="fname" name="address" placeholder="Permanent Address">
<input type="text" id="fname" name="contact" placeholder="Contact ">
<input type="text" id="fname" name="distance" placeholder="Distance from home (Km)">
<input type="text" id="fname" name="regno" placeholder="Register Number">
<input type="text" id="fname" name="year" placeholder="Academic Year">
<input type="password" id="lname" name="pwd" placeholder="Password">
<input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">

<div class="custom-select" style="width:200px;">
  <select name="faculty" value >
    <option value="">Faculty</option>
    <option value="FOT">FOT</option>
    <option value="BSF">BSF</option>
    <option value="BST">BST</option>
    <option value="MED">MED</option>
  </select>
</div>
<!-- errors hadaling-->


<?php   
   if(isset($_GET["error"]))  {
    if($_GET["error"] == "emptyinput"){
      echo '<div class="error">Fill in the all fileds</div>';

    }else if($_GET["error"] == "invalidUid"){
     echo '<div class="error">Invalid Username</div>';
    }

    else if($_GET["error"] == "invalidEmail"){
    echo '<div class="error">Invalid Email</div>';
   }

    else if($_GET["error"] == "Passwordsdontmatch"){
    echo '<div class="error">Invalid passweord not mach </div>';
   }
   else if($_GET["error"] == "stmtfaild"){
    echo '<div class="error">Something wen worng! </div>';
   }


   else if($_GET["error"] == "non"){
    echo '<div class="error">Acount created </div>';
   }
   else if($_GET["error"] == "emptyemailtakan"){
    echo '<div class="error">All rady have Name or Email </div>';
   }
   }

?>
<!--    
<input type="text" id="fname" name="fname" placeholder="First Name ">
<input type="text" id="fname" name="lname" placeholder="Last Name">
<input type="text" id="fname" name="email" placeholder="Email">
<input type="text" id="fname" name="address" placeholder="Permanent Address">
<input type="text" id="fname" name="contact" placeholder="Contact ">
<input type="text" id="fname" name="distance" placeholder="Distance from home (Km)">
<input type="text" id="fname" name="regno" placeholder="Register Number">
<input type="text" id="fname" name="year" placeholder="Academic Year">
<input type="password" id="lname" name="pwd" placeholder="Password">
<input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">

<div class="custom-select" style="width:200px;">
  <select name="faculty">
    <option value="0">Faculty</option>
    <option value="1">FOT</option>
    <option value="2">BSF</option>
    <option value="3">BST</option>
    <option value="4">MED</option>
  </select>
</div>
-->
       <button name="submit"type="submit">Register</button>
</form>
<p> Already have an account ? <a href="login.php">Login</a></p>
</div>

<?php   
    include_once'footer.php'  
?>