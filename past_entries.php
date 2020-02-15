<?php

    session_start();
    $accountname = $_SESSION['username'];

    $servername = "localhost";
    $username = "dylans";
    $password = "CSCI2541_sp20";
    $dbname = "dylans";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br/>";

        $userdata = "SELECT * from users where username = '$accountname'";

        $query = "SELECT * from journal where username = '$accountname'";

    $result = mysqli_query($conn,$query);

    echo"<table border='1'>";
    echo"<tr><td>Name</td><td>Entry</td><tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo"<tr><td>$accountname</td><td>{$row['entry']}</td><tr>";
    }
    mysqli_close($conn);

    
?>

<html>

<form action="logout.php">
         <button type="submit">Logout</button>
      </form>

</html>