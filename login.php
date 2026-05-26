<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

    <!-- NAVBAR -->

    <header class="navbar">

        <div class="nav-container">

            <h2 class="logo">
                Smart Lost & Found
            </h2>

            <nav class="nav-links">

                <a href="dashboard.php">Home</a>

                <a href="search.php">Search</a>

                <a href="login.php" class="active">
                    Login
                </a>

                <a href="register.php">
                    Register
                </a>

            </nav>

        </div>

    </header>

    <!-- LOGIN SECTION -->

    <section class="login-section">

        <div class="login-container">

            <h1>
                Welcome Back
            </h1>

            <p>
                Login to continue
            </p>

            <form>

                <!-- EMAIL -->

                <div class="form-group">

                    <label>
                        Email Address
                    </label>

                    <input type="email"
                        placeholder="Enter email">

                </div>

                <!-- PASSWORD -->

                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input type="password"
                        placeholder="Enter password">

                </div>

                <!-- REMEMBER -->

                <div class="remember-section">

                    <input type="checkbox" id="remember">

                    <label for="remember">
                        Remember Me
                    </label>

                </div>

                <!-- BUTTON -->

                <button type="submit" class="login-btn">

                    Login

                </button>

            </form>

            <!-- REGISTER LINK -->

            <div class="register-link">

                <p>

                    Don't have an account?

                    <a href="register.php">
                        Register
                    </a>

                </p>

            </div>

        </div>

    </section>

</body>

</html>