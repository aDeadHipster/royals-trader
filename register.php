<?php

/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6-2-2018
 * Time: 20:55
 */

// If session variable is  set it will redirect to home page
if(isset($_SESSION['username']) && empty($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $discord = "";
$username_err = $password_err = $email_err = $discord_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }


    // Validate password
    if (empty(trim($_POST['password']))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST['password']);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = 'Please confirm password.';
    } else {
        $confirm_password = trim($_POST['confirm_password']);
        if ($password != $confirm_password) {
            $confirm_password_err = 'Password did not match.';
        }
    }

    // Validate discord
    if (empty(trim($_POST['discord']))) {
        $discord_err = "Please enter a discord ID.";
    }else {
        $discord = trim($_POST['discord']);
    }

    // Validate email
    if (empty(trim($_POST['email']))) {
        $email_err = "Please enter an email.";
    }else {
        $email = trim($_POST['email']);
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($discord_err) && empty($email_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, discord, email) VALUES (?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_discord, $param_email);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_discord = $discord;
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <h2>Sign Up</h2>

    <p>Please fill this form to create an account.</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

            <label>Username</label>

            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">

            <span class="help-block"><?php echo $username_err; ?></span>

        </div>

        <div class="form-group <?php echo (!empty($discord_err)) ? 'has-error' : ''; ?>">

            <label>Discord ID</label>

            <input type="text" name="discord" class="form-control" value="<?php echo $discord; ?>">

            <span class="help-block"><?php echo $discord_err; ?></span>

        </div>

        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

            <label>Email</label>

            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">

            <span class="help-block"><?php echo $email_err; ?></span>

        </div>

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

            <label>Password</label>

            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

            <span class="help-block"><?php echo $password_err; ?></span>

        </div>

        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

            <label>Confirm Password</label>

            <input type="password" name="confirm_password" class="form-control"
                   value="<?php echo $confirm_password; ?>">

            <span class="help-block"><?php echo $confirm_password_err; ?></span>

        </div>

        <div class="form-group">

            <input type="submit" class="btn btn-primary" value="Submit">

            <input type="reset" class="btn btn-default" value="Reset">

        </div>

        <p>Already have an account? <a href="login.php">Login here</a>.</p>

    </form>

</div>

</body>

</html>