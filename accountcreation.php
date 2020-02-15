<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Creating Account...</title>
</head>
  <body>
    <h2></h2>

    <?php
      $accountname = $_POST['username'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $userpassword = $_POST['psw'];
      $email = $_POST['email'];
      // define connection variable
	    $servername = "localhost";
        $username = "dylans";
	    $password = "CSCI2541_sp20";
	    $dbname = "dylans";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!conn){
		die("Connection Failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br/>";

      $query = "INSERT INTO users (username, first_name,last_name, email, password) VALUES ('$accountname', '$first_name', '$last_name','$email', '$userpassword')";

	$result = mysqli_query($conn,$query);

	if($result){
        echo "New account created successfully, You will recieve an email confirmaiton!<br/>";
        mail($email,'Account Created','Thanks '.$first_name.' for creating an account!');
	}
	else{
		echo "Error: " .$query."<br/>".mysqli_error($conn);
	}
    mysqli_close($conn);
      // Present the information that was used for insert to the user

    ?>
     <a href="login.php">
            <img src="login.png" alt="Login" style="width:140px;height:50px;border:0">
        </a>

  </body>
</html>