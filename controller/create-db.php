<?php
/*objects lets us store information*/
    require_once(__DIR__ . "/../model/config.php");
 
    /*this query creates a table*/
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar (255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id) )");
    
    if($query){
        echo "<p>Successfully created table: posrs</p>";
    }
    else{
        echo"<p>$connection->error</p>";
    }
   
