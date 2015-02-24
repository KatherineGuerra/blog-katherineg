<?php
   require_once(__DIR__ . "/controller/login-verify.php");
   require_once(__DIR__ . "/view/header.php");
   /*this if statement will only be fire if it has been authenticated*/
   if(authenticateUser()){
    /*we want to make sure that navigation only gets display depending on whether the user been logged in or not*/   
      require_once(__DIR__ . "/view/navigation.php");
   }else{
      require_once(__DIR__ . "/view/loggedOutNav.php");
   }
   require_once(__DIR__ . "/controller/create-db.php");
   require_once(__DIR__ . "/view/footer.php");
   require_once(__DIR__ . "/controller/read-posts.php");
?>
