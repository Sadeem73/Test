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
                if(isset($_POST["submit" . $i+1])){
                    $idea = $row['idea'];
                    $upvotes = $row['upvotes'] + 1;
                    $vote = "UPDATE ideas SET upvotes = '$upvotes'  WHERE idea='$idea' ";
                    $vote = mysqli_query($connect, $vote);
                }
            }


            $results = mysqli_query($connect, $query);

            for ($i=0;  $row = $results->fetch_assoc(); $i++) {
                print("<h1>Idea #" . $i+1 . " </h1>");
                print( "<p> " . $row['date'] . "</p>");
                print( "<p> " . $row['idea'] . "</p>");
                print("
                    <form method = 'post' action='list-bonus.php'>
                        <label>(# votes: " . $row['upvotes'] . ")</label>
                        <input type='submit' value = 'upvotes' name='submit" . $i+1 . "' >
                    </form>
                ");
            }
            
        ?>
    </body>
</html>