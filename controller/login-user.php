<?php
   require_once(__DIR__ . "/../model/config.php");
   
   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

   $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
   /*num_rows=1 means that you can only register one time if you register the second time 
    * with the same username and password it will take you to the else statement*/
   if($query->num_rows == 1){
       $row = $query->fetch_array();
       /*the crypt differentiate the capitals and lowercase*/
       if($row["password"] === crypt($password, $row["salt"])){
         /*it tells the user if they been logged in authenticated*/
           $_SESSION["authenticated"] = true;
           header("Location: " . $path . "index.php");
       }
       else{
           echo "<p>Invalid username and password</p>";
       }
   }
   else{
       echo "<p>Invalid username and password2</p>";
   }
   