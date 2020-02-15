
    <?php

    session_start();

        $accountname = $_SESSION['username'];
        $entry = $_POST['entry'];

        $servername = "localhost";
        $username = "dylans";
	    $password = "CSCI2541_sp20";
        $dbname = "dylans";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br/>";
    
          $query = "INSERT INTO journal(username, entry) VALUES ('$accountname', '$entry')";
    
        $result = mysqli_query($conn,$query);

          $userdata = "SELECT * from users where username = '$accountname'";
    
        if($result){
            echo "New entry created successfully, You will recieve an email confirmaiton!<br/>";
            mail($userdata['email'],'Entry Created','Thanks '.$userdata['first_name'].' for creating an entry!');
        }
        else{
            echo "Error: " .$query."<br/>".mysqli_error($conn);
        }
        mysqli_close($conn);

    ?>