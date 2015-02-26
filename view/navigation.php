<?php
   require_once(__DIR__ . "/../model/config.php");
   require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        /*we are redirecting the user before we kill off the program*/
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
    <ul>
        <li><a href='<?php echo $path . "post.php"?>'>Blog Post Form</a></li>
        <button><a href = "controller/logout-user.php">LogOut</a></button>
        
    </ul>
</nav>