<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBook Dashboard</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #dfe9f3, #ffffff);
      display: flex;
      flex-direction: column;
    }

    /* Navbar */
    .navbar {
      background: #1877f2;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .nav-links a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    /* Main */
    .main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Login Box */
    .login-box {
      background: white;
      padding: 35px;
      width: 350px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      text-align: center;
      animation: fadeIn 0.5s ease;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #1877f2;
    }

    .login-box input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      transition: 0.3s;
    }

    .login-box input:focus {
      border-color: #1877f2;
      box-shadow: 0 0 5px rgba(24,119,242,0.3);
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background: #1877f2;
      border: none;
      color: white;
      border-radius: 8px;
      font-size: 15px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-box button:hover {
      background: #0d65d9;
    }

    .forgot {
      display: block;
      margin: 10px 0;
      color: #1877f2;
      font-size: 13px;
      text-decoration: none;
    }

    .create {
      margin-top: 10px;
      background: #42b72a !important;
    }

    .create:hover {
      background: #36a420 !important;
    }

    /* Dashboard */
    .dashboard {
      background: white;
      padding: 30px;
      border-radius: 15px;
      width: 500px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      animation: fadeIn 0.5s ease;
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

  </style>
</head>

<body>

<nav class="navbar">
  <h1>MyBook</h1>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
  </div>
</nav>

        <form class="login-box" id="loginForm">
            <h2>Welcome Back 👋</h2>
            <p class="subtitle">Login to continue</p>

  <section class="content">

    <div class="login-box" id="loginBox">
      <h2>Welcome Back</h2>
      <form id="loginForm">
        <input type="email" id="email" placeholder="Email address" required>
        <input type="password" id="password" placeholder="Password" required>
        <button type="submit">Log In</button>
        <a href="#" class="forgot">Forgot password?</a>
        <hr>
        <button type="button" class="create">Create New Account</button>
      </form>
    </div>

    <div class="dashboard" id="dashboard" style="display:none;">
      <h2 id="title">Welcome</h2>
      <p id="contentText">Login success 🎉</p>
    </div>

  </section>
</div>
<script>
const loginForm = document.getElementById("loginForm");
const loginBox = document.getElementById("loginBox");
const dashboard = document.getElementById("dashboard");

loginForm.addEventListener("submit", function(e) {
  e.preventDefault();

  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  if (email === "akkash@gmail.com" && password === "123") {
    loginBox.style.display = "none";
    dashboard.style.display = "block";
  } else {
    alert("Invalid login");
  }
});
</script>

</body>
</html> 