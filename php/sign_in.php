<?php
session_start();
require_once('database.php');
include "headerEm.php";

$conn = db_connect();
?>

<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    // If the user has just tried to log in

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to validate the email and password
    $query = "SELECT email, pass FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Check if the password matches
        if ($row['pass'] === $password) {
            $_SESSION['valid_user'] = $email; // Create session variable
            $_SESSION['valid_pass'] = $password; // Create another session variable
        } else {
            $login_error = "Invalid email or password.";
        }
    } else {
        $login_error = "Invalid email or password.";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/wstyles.css">
</head>

<body>
    <h1>Home Page</h1>
    <?php
    if (isset($_SESSION['valid_user'])) {
        echo '<p>You are logged in as: ' . $_SESSION['valid_user'] . ' successfully!!!<br /></p>';
        echo "<br>";
        echo "<br>";


        echo '<a href="log_out.php">Log out</a></p>';
    } else {
        if (isset($login_error)) {
            echo '<p>' . $login_error . '</p>';
        } else {
            echo '<p>You are not logged in.</p>';
        }
    }
    ?>

    <!-- provide form to log in -->
    <form action="sign_in.php" method="post">
        <fieldset>
            <legend>Login Now!</legend>
            <p><label for="email">Email:</label>
                <input type="email" name="email" id="email" size="30" required />
            </p>
            <p><label for="password">Password:</label>
                <input type="password" name="password" id="password" size="30" required />
            </p>
        </fieldset>
        <button type="submit" name="login">Login</button>
        <button type="reset" class="reset">Reset</button>
        <span>Not a member? <a href="sign_up.php">Sign up</a></span>
    </form>
    <?php include "footerEm.php"; ?>
</body>

</html>
