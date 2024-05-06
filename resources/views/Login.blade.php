<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FitHealth | Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-heading {
      text-align: center;
      margin-bottom: 30px;
      font-size: 24px;
      font-weight: bold;
      background: -webkit-linear-gradient(to right, #8A2BE2, #FFD700); /* Gradient Purple to Yellow */
      -webkit-background-clip: text;
      -webkit-text-fill-color: palevioletred;
    }

    .welcome-back {
      font-size: 14px;
      color: #000;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-control {
      border-color: #ced4da;
    }

    .btn-primary {
      background-color: #8A2BE2; /* Purple */
      border-color: #8A2BE2; /* Purple */
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      font-size: 18px;
    }

    .btn-primary:hover {
      background-color: #6a1b9a; /* Darker Purple */
      border-color: #6a1b9a; /* Darker Purple */
    }

    .forgot-password {
      text-align: center;
      margin-top: 20px;
    }

    .forgot-password a {
      color: #dc3545;
    }

    .social-icons {
      text-align: center;
      margin-top: 20px;
    }

    .social-icons img {
      width: 40px;
      margin: 0 10px;
      cursor: pointer;
    }
  </style>

</head>
<body>

<!-- Login Form -->
<div class="container mt-5">
  <div class="login-container">
    <h2 class="login-heading">FITHEALTH</h2>
    <h6 class="welcome-back">Welcome Back</h6>
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <div class="forgot-password">
        <a href="#">Forgot password?</a>
      </div>
    </form>
    <div class="social-icons">
      <img src="img/facebook.png" alt="Facebook">
      <img src="img/google.png" alt="Google">
      <img src="img/telegram.png" alt="Telegram">
    </div>
    <div class="text-center mt-3">
      <p>Do have an account? <a href="#">Register</a></p>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
