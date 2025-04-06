<?php   
    include_once'heder.php'  
?>




<!-- name aka metana dis kara gannawa -->
<h1>Hello <?php

if(isset($_SESSION["usersName"])){
    echo $_SESSION["usersName"] . '!';
    
 } else{
    echo 'user ! ';
 }

?> 

</h1>




<?php   
    include_once'footer.php'  
?>
