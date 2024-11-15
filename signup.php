<?php 
session_start();

include("connection.php");
include("functions.php");

$error_message = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve and sanitize user input
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Check if the user already exists in the database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $error_message = "Username already exists! Please choose a different username.";
        } else {
            // If the user doesn't exist, proceed to save to the database
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";

            if(mysqli_query($con, $query)) {
                header("Location: login.php");
                die;
            } else {
                $error_message = "Error occurred. Please try again.";
            }
        }
    } else {
        $error_message = "Please enter a valid username and password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Planetwise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Sign Up</h2>
        <?php if(!empty($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        
        <form action="signup.php" method="POST">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign Up">
        </form>
        
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>