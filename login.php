<?php 
session_start();

include("connection.php");
include("functions.php");

$error_message = ""; // Variable to store error messages

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Read from database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result) {
            if(mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    // Redirect to shop page upon successful login
                    header("Location: shop.php");
                    die;
                } else {
                    $error_message = "Incorrect password!";
                }
            } else {
                $error_message = "Username not found!";
            }
        } else {
            $error_message = "Database error. Please try again later.";
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
    <title>Login - Planetwise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        
        <?php if(!empty($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        
        <form action="login.php" method="POST">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
</body>
</html>