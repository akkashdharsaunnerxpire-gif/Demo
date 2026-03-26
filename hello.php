<!DOCTYPE html>
<html>
<head>
    <title>Advanced Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">

        <form class="login-box" id="loginForm">
            <h2>Welcome Back 👋</h2>
            <p class="subtitle">Login to continue</p>

            <div class="field">
                <input type="email" id="email" required>
                <label>Email</label>
            </div>

            <div class="field">
                <input type="password" id="password" required>
                <label>Password</label>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit">Login</button>

            <div class="divider">
                <span>OR</span>
            </div>

            <div class="social-login">
                <button type="button" class="google">Google</button>
                <button type="button" class="facebook">Facebook</button>
            </div>

            <p class="signup">
                Don't have an account? <a href="#">Sign up</a>
            </p>
        </form>

    </div>

    <!-- ✅ JavaScript -->
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(e) {
            e.preventDefault();

            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();

            // Dummy credentials
            let correctEmail = "admin@gmail.com";
            let correctPassword = "123456";

            if (email === "" || password === "") {
                alert("Please fill all fields ⚠️");
                return;
            }

            if (email === correctEmail && password === correctPassword) {
                alert("Login Successful ✅");
                window.location.href = "loginsuccess.php";
            } else {
                alert("Invalid Email or Password ❌");
            }
        });
    </script>

</body>
</html>