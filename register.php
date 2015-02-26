<?php
   require_once(__DIR__ . "/view/header.php");
   require_once(__DIR__ . "/view/register-form.php");
   require_once(__DIR__ . "/view/footer.php");
      if(authenticateUser()){
    /*we want to make sure that navigation only gets display depending on whether the user been logged in or not*/   
      require_once(__DIR__ . "/view/navigation.php");
   }else{
      require_once(__DIR__ . "/view/loggedOutNav.php");
   }