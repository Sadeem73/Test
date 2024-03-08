<?php
require "nav.php";
// TODO reterive the items from the database


?>
<!-- TODO: List the items in the database -->
<html>
    <head>
        <title>List ideas</title>
    </head>
    <body>
        <?php 
            $serverName = "localhost";
            $username = "root";
            $password = "";
            
            $connect = mysqli_connect($serverName, $username, $password, "mid_db");
            if(! $connect )
                die("Connection error." . mysqli_error($connect));
            
            $query = "SELECT * FROM ideas";
            $results = mysqli_query($connect, $query);
            
            for ($i=0;  $row = $results->fetch_assoc(); $i++) {
                print("<h1>Idea #" . $i+1 . " </h1>");
                print( "<p> " . $row['date'] . "</p>");
                print( "<p> " . $row['idea'] . "</p>");
                print( "<p>(# votes: " . $row['upvotes'] . ")</p>");
            }
        ?>
    </body>
</html>