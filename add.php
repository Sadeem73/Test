<?php
require "nav.php";


//  the following should be only performed if there are submitted form
if ($_POST) {

// TODO: add the submitted form to database
$serverName = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($serverName, $username, $password, "mid_db");
if(! $connect )
    die("Connection error." . mysqli_error($connect));

$idea = $_POST["idea"];
$date = $_POST["date"];

$query = "INSERT INTO ideas(idea, date) VALUES ('$idea', '$date')";
$results = mysqli_query($connect, $query);

if (! $results) {
    echo mysqli_error($connect);
    exit;
} else {
    // The the following will redirect the user 
    header('Location: list.php?orderby=upvotes');
    exit;
}
}
// end 
?>
<!-- Write your form here -->
<html>
    <head>
        <title>Add idea</title>
    </head>

    <body>
        <form method = 'post' action="add.php">
            <p>
                <label>Idea</label>
                <textarea name="idea"></textarea>
            </p>
            <p>
                <label>Due Date</label>
                <input type="date" name="date">
            </p>
            <p>
                <input type="submit" value = 'submit' name="submit" >
            </p>
        </form>
    </body>
</html>
