<?php
    /* /../is to get out of a folder */
    require_once(__DIR__ . "/../model/config.php");
    

    /* use the = sign to assign to a value */
    /* INPUT_POST means were sending in information */
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

    $query = $_SESSION["connection"]->query("INSERT INTO POSTS SET title = '$title', post = '$post' ");
    
    if($query){
        echo"<p>Successfully inserted post: $title</p>";
    }
    else{
        echo"<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
  
