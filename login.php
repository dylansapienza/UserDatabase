<html>
    <head>
        <title>Account Creation</title>
    </head>

    <body>
        <form method = "post" action="logincheck.php">
        <div class="container">
            <h1>Login</h1>
            <p>Please enter your account credentials.</p>
            <hr>

            <label for="username"><b>Username:</b></label>
            <input type="text" placeholder="Username" name="username" required></br></br>

            <label for="psw"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required></br></br>
            <hr>

            <button type="submit" class="loginbtn">Login</button>
        </div>

        </form>
    </body>

</html>