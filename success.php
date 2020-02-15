<html>

    <?php

    session_start();

        $username = $_SESSION['username'];

    ?>

    <form method = "post">
    <label for="entry">Write your entry:</label>
    <textarea name="entry">Enter text here...</textarea>

    <input type="submit" value="Submit my Entry" formaction="submitentry.php"/>

    <input type="submit" value="View My Past Entries" formaction="past_entries.php"/></br>


</html>