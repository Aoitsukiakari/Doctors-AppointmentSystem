<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Hotel Booking</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  <link rel="stylesheet" href="css/style.css">

</head>

<body> 
     <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">OXFORDS PH</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#doctors">DOCTORS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">FACILITIES</a>
          </li>
          <li class="nav-item" style="margin-right: 50px;">
            <a class="nav-link" href="#book">BOOK</a>
          </li>

      <div class="dropdown">
          <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"></i> <!-- User icon -->
            <?php if (isset($_SESSION['username'])): ?>
                <?php echo $_SESSION['username']; ?>
              <?php else: ?>
                User
              <?php endif; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a class="dropdown-item" d-none id="logoutLink" href="login.php">LOG OUT</a></li>
            <?php else: ?>
            <li><a class="dropdown-item" href="login.php">LOG OUT</a></li>
            <li><a class="dropdown-item" href="register.php">SIGN UP</a></li>
            <?php endif; ?>
          </ul>
        </div>
    </div>
  </nav>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      fetch('session_check.php')
        .then(response => response.json())
        .then(data => {
          if (data.loggedIn) {
            document.querySelector('#userDropdown').innerHTML = `<i class="bi bi-person"></i> ${data.username}`;
            document.querySelector('a[href="login.php"]').style.display = 'none';
            document.querySelector('a[href="register.php"]').style.display = 'none';
            document.querySelector('#logoutLink').classList.remove('d-none');
          }
        });
    });
  </script>

</html>
