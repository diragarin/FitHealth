<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FitHealth | Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    body {
      padding-top: 4.5rem;
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .navbar-nav {
      margin-left: auto; /* Move menu items to the right */
    }
    .nav-link {
      color: #fff;
      margin-left: 20px; /* Add margin between menu items */
    }
    .nav-link:last-child {
      margin-left: 0; /* Remove margin from the last item */
    }
    .nav-link:hover {
      color: #f8f9fa !important;
    }
    .navbar-toggler {
      border-color: #fff;
    }
    .navbar-toggler-icon {
      background-color: #fff;
    }
    .navbar-collapse {
      justify-content: flex-start; /* Align menu items to the left */
    }
    .form-control {
      border-color: #fff;
      color: #fff;
      background-color: rgba(255, 255, 255, 0.15);
    }
    .btn-outline-light {
      border-color: #fff;
      color: #fff;
    }
    .btn-outline-light:hover {
      background-color: #fff;
      color: #dc3545;
    }
    .profile-img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
    }
    .card {
      margin-bottom: 20px;
      background-color: #fff;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-header {
      background-color: #fd7e14; /* orange */
      color: #fff;
      font-weight: bold;
      padding: 15px;
      border-bottom: none;
    }
    .card-body {
      padding: 20px;
      background-color: #f8f9fa; /* light grey */
      color: #343a40; /* text color */
    }
    .user-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .user-info img {
      margin-right: 10px;
    }
    .slogan {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.2rem;
      font-weight: bold;
      color: #dc3545; /* red */
    }
    .navbar {
      background-image: linear-gradient(to right, #8A2BE2, #FFD700); /* Purple to Yellow gradient */
    }
    /* Custom Dropdown Styling */
    .dropdown-toggle::after {
      display: inline-block;
      margin-left: 5px;
      vertical-align: middle;
      content: "";
      border-top: 4px solid;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent;
    }
    .dropdown-menu {
      border: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    .dropdown-item {
      color: #343a40;
    }
    .dropdown-item:hover {
      background-color: #fd7e14 !important;
      color: #fff;
    }
  </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">FITHEALTH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFeatures" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
            <li><a class="dropdown-item" href="#">BMI Tracker</a></li>
            <li><a class="dropdown-item" href="#">Hydration Monitor</a></li>
            <li><a class="dropdown-item" href="#">Daily Nutrition Target</a></li>
            <li><a class="dropdown-item" href="#">Medication Reminder</a></li>
            <li><a class="dropdown-item" href="#">Friend Challenge</a></li>
            <li><a class="dropdown-item" href="#">Health Articles</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Articles</a>
        </li>
        <li class="nav-item">
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <div class="me-2"></div><!-- Spacer -->
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
</li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/atiyah.jpg" class="profile-img" alt="Profile Picture">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownProfile">
            <li><a class="dropdown-item" href="#">Halo! Atiyah Zahra</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form id="logout-form" action="/Login" method="post">
                @csrf
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="btn btn-link dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Challenge
        </div>
        <div class="card-body">
          <p class="card-text">Here you can view and join challenges to stay motivated.</p>
          <a href="#" class="btn btn-danger">View Challenges</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          History Calorie
        </div>
        <div class="card-body">
          <p class="card-text">Track your daily calorie intake and view your history.</p>
          <a href="#" class="btn btn-danger">View History</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Medication Reminder
        </div>
        <div class="card-body">
          <p class="card-text">Stay on track with your medication schedule.</p>
          <a href="#" class="btn btn-danger">View Schedule</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Articles
        </div>
        <div class="card-body">
          <p class="card-text">Read our latest articles on fitness and health.</p>
          <a href="#" class="btn btn-danger">Read Articles</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slogan -->
<div class="slogan">
  <h6>Track your health, transform your life with FitHealth</h6>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
