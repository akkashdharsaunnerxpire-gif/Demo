<!DOCTYPE html>
<html>
<head>
    <title>Advanced Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">

        <form class="login-box">
            <h2>Welcome Back 👋</h2>
            <p class="subtitle">Login to continue</p>

            <div class="field">
                <input type="email" required>
                <label>Email</label>
            </div>

            <div class="field">
                <input type="password" required>
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

</body>
</html>