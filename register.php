<html>
    <head>
        <title>Account Creation</title>
    </head>

    <body>
        <form method = "post" action="accountcreation.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="username"><b>Username:</b></label>
            <input type="text" placeholder="Username" name="username" required></br></br>

            <label for="firstname"><b>First Name:</b></label>
            <input type="text" placeholder="First Name" name="first_name" required></br></br>


            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" placeholder="Last Name" name="last_name" required></br></br>


            <label for="email"><b>Email:  </b></label>
            <input type="text" placeholder="Enter Email" name="email" required></br></br>


            <label for="psw"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required></br></br>



            <hr>

            <p>By creating an account you agree to our <a href="https://libraryofbabel.info/random.cgi">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
        </form>
    </body>

</html>