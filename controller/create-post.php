<?php
    /* /../is to get out of a folder */
    require_once(__DIR__ . "/../model/config.php");

    $connection = new mysqli($host, $username, $password, $database);

    /* use the = sign to assign to a value */
    /* INPUT_POST means were sending in information */
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

    $query = $connection->query("INSERT INTO POSTS SET title = '$title', post = '$post' ");
    
    if($query){
        echo"<p>Successfully inserted post: $title</p>";
    }
    else{
        echo"<p>$connection->error</p>";
    }
    
    $connection->close();
