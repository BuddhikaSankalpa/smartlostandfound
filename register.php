<?php

$conn = new mysqli("localhost", "root", "", "smartlostfound", 3307);

if($conn->connect_error){
    die("Connection Failed : " . $conn->connect_error);
}

$message = "";

if(isset($_POST['register'])){

    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Debug: Check what values are being received
    error_log("Form submitted - full_name: '$full_name', email: '$email'");

    if(empty($full_name) || empty($email) || empty($password) || empty($confirm_password)){
        $message = "All fields are required!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message = "Invalid email address!";
    }elseif($password != $confirm_password){
        $message = "Passwords do not match!";
    }elseif(strlen($password) < 6){
        $message = "Password must be at least 6 characters!";
    }else{
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $check_email = "SELECT user_id FROM users WHERE email = ?";
        $stmt = $conn->prepare($check_email);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $message = "Email already exists!";
            $stmt->close();
        }else{
            $stmt->close();
            $sql = "INSERT INTO users(full_name, email, password) VALUES(?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $full_name, $email, $hashed_password);

            if($stmt->execute()){
                $message = "Registration Successful!";
            }else{
                $message = "Error : " . $conn->error;
            }
            $stmt->close();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
    <header class="navbar">
        <div class="nav-container">
            <h2 class="logo">
                Smart Lost & Found
            </h2>
            <nav class="nav-links">
                <a href="dashboard.php">Home</a>
                <a href="search.php">Search</a>
                <a href="login.php">Login</a>
                <a href="register.php" class="active">
                    Register
                </a>
            </nav>
        </div>
    </header>
    <section class="register-section">
        <div class="register-container">
            <h1>
                Create Your Account
            </h1>
            <p>
                Join the Smart Lost & Found platform
            </p>
            <?php

                if($message != ""){

                    echo "<div class='message'>$message</div>";

                }

            ?>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label>
                        Full Name
                    </label>
                    <input type="text"
                        name="full_name"
                        placeholder="Enter full name"
                        required>
                </div>
                <div class="form-group">
                    <label>
                        Email Address
                    </label>
                    <input type="email"
                        name="email"
                        placeholder="Enter email"
                        required>
                </div>
                <div class="form-group">
                    <label>
                        Password
                    </label>
                    <input type="password"
                        name="password"
                        placeholder="Enter password"
                        required>
                </div>
                <div class="form-group">

                    <label>
                        Confirm Password
                    </label>

                    <input type="password"
                        name="confirm_password"
                        placeholder="Confirm password"
                        required>

                </div>
                <button type="submit"
                    name="register"
                    class="register-btn">
                    Register
                </button>
            </form>
            <div class="login-link">
                <p>
                    Already have an account?
                    <a href="login.php">
                        Login
                    </a>
                </p>
            </div>
        </div>
    </section>
</body>
</html>