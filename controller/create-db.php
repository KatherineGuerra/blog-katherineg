<?php
/*objects lets us store information*/
    require_once(__DIR__ . "/../model/config.php");
    
 
    /*this query creates a table*/
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar (255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id) )");
    
    if($query){
        echo "<p>Successfully created table: posrs</p>";
    }
    else{
        echo"<p>" . $_SESSION["connection"]->error . "</p>";
    }
   /*in SESSION connection is where we stored our database connection*/
    /*AUTO INCREMENT increments our id*/
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char(128) NOT NULL,"
            . "salt char(128) NOT NULL ,"
            . "PRIMARY KEY(id))");
    
    if($query) {
       echo "<p>Successfully created table: users</p>";
    }else{
       echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }