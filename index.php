<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Scheduling System</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php
include("header.php");
?>
 

 <!-- Landing Page -->
 <section id="home" class="landing-page">
  <img src="images/landingpage.jpg" class="background-image" alt="Background Image">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Compassionate Care, Advanced Healing</h1>
        <br>
      </div>
      <div class="col-md-12 text-center"> 
        <div class="text-center">
          <p>OXFORDS PH, ENSURING YOU A GOOD HEALTH</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- About -->
<section id="about" class="about-section">
  <div class="container">
    <p class="desc">KNOW SOMETHING ABOUT US</p>
    <h2 class="text-center mb-4">About Us</h2>
    <br>
    <div class="row">
      <div class="col-md-6">
        <p>Welcome to OXFORDS PH, a trusted name in the healthcare industry dedicated to providing comprehensive and compassionate care. Our team of experienced professionals is committed to enhancing the quality of life for our patients through innovative medical solutions, personalized treatment plans, and continuous support. We believe in the power of advanced healthcare to transform lives, and we are here to guide you on your journey to better health.
          <br><br>Our mission is to deliver high-quality healthcare services that are accessible, patient-centered, and tailored to the unique needs of each individual. We strive to foster a healing environment that promotes wellness, encourages patient engagement, and supports long-term health outcomes. We are dedicated to improving health and well-being through excellence in clinical care, education, and community partnerships.
          <br><br>To be a leader in healthcare by setting the highest standards of patient care, clinical innovation, and medical education. We envision a future where our integrated approach to healthcare delivery sets a benchmark for quality and efficiency, and where every patient feels empowered and supported in their health journey.
        </p>
        </div>
      <div class="col-md-6">
        <img src="images/about.jpg" alt="about image" class="img-fluid">
      </div>
    </div>
  </div>
</section>


  <!-- Doctors Section -->
  <section id="doctors" class="rooms-section">
    <div class="container">
      <p>OUR DOCTORS AND THEIR EXPERTIES</p>
      <h2 class="text-center mb-4">Our Doctors</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card room-card">
            <img src="images/alvin.webp" class="card-img-top" alt="Room 1">
            <div class="card-body">
              <h5 class="card-title">Dhennis Nizal</h5>
              <p class="card-text">PEDIATRICIAN</p>
              <p class="card-text" style="color: gray";>Php 500 per check up</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card room-card">
            <img src="images/selwyn.jpg" class="card-img-top" alt="Room 2">
            <div class="card-body">
            <h5 class="card-title">Selwyn Gaspi</h5>
              <p class="card-text">NEUROLOGIST</p>
              <p class="card-text" style="color: gray";>Php 500 per check up</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card room-card">
            <img src="images/nizal.jpg" class="card-img-top" alt="Room 2">
            <div class="card-body">
            <h5 class="card-title">Alvin Somera</h5>
              <p class="card-text">OPTALMOLOGIST</p>
              <p class="card-text" style="color: gray";>Php 500 per check up</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card room-card">
            <img src="images/geraldine.jpg" class="card-img-top" alt="Room 3">
            <div class="card-body">
            <h5 class="card-title">Geraldine Samson</h5>
              <p class="card-text">CARDIOLOGIST</p>
              <p class="card-text" style="color: gray";>Php 500 per check up</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="gallery-section">
    <div class="container">
      <p>TAKE A LOOK OF OUR PLACE</p>
      <h2 class="text-center mb-4">Our Facilities</h2>
      <hr>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images\6.jpg" class="d-block h-30 w-100" alt="Gallery Image 1">
              </div>
              <div class="carousel-item">
                <img src="images\7.webp" class="d-block h-30 w-100" alt="Gallery Image 2">
              </div>
              <div class="carousel-item">
                <img src="images\8.webp" class="d-block h-30 w-100" alt="Gallery Image 3">
              </div>
              <div class="carousel-item">
                <img src="images\9.jpg" class="d-block h-30 w-100" alt="Gallery Image 3">
              </div>
              <div class="carousel-item">
                <img src="images\10.jpg" class="d-block h-30 w-100" alt="Gallery Image 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Booking Form -->
<section id="book" class="booking-form">
  <div class="container">
    <h2 class="text-center mb-4">Book Appointment</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form id="bookingForm" action="bookcon.php" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <select class="form-control" name="doctor" required>
              <option value="" disabled selected>Doctor</option>
              <option value="Dhennis Nizal">Dhennis Nizal</option>
              <option value="Selwyn Gaspi">Selwyn Gaspi</option>
              <option value="Alvin Somera">Alvin Somera</option>
              <option value="Geraldine Samson">Geraldine Samson</option>
            </select>
          </div>
          <div class="mb-3">
            <p><strong>Date</strong></p>
            <input type="date" class="form-control" name="date" required>
          </div>
          <div class="mb-3">
            <p><strong>Time</strong></p>
            <select class="form-control" name="time" required>
              <option value="" disabled selected>Select Time</option>
              <option value="8:00-9:00 AM">8:00-9:00 AM</option>
              <option value="9:00-10:00 AM">9:00-10:00 AM</option>
              <option value="10:00-11:00 AM">10:00-11:00 AM</option>
              <option value="1:00-2:00 PM">1:00-2:00 PM</option>
              <option value="2:00-3:00 PM">2:00-3:00 PM</option>
              <option value="3:00-4:00 PM">3:00-4:00 PM</option>
            </select>
          </div>
          <div class="mb-3 text-center">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
        <div id="notification" style="display:none;" class="alert" role="alert"></div>
      </div>
    </div>
  </div>
</section>


  <?php
include("footer.php");
?>

<script>
  document.getElementById('bookingForm').onsubmit = function(event) {
    event.preventDefault();

    var form = event.target;
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();

    xhr.open('POST', form.action, true);
    xhr.onload = function() {
      var notification = document.getElementById('notification');
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        if (response.success) {
          notification.className = 'alert alert-success';
          notification.textContent = 'Appointment booked successfully! Wait for the admin call for confirmation.';
        } else {
          notification.className = 'alert alert-danger';
          notification.textContent = response.message || 'Invalid username or other error.';
        }
        notification.style.display = 'block';
      }
    };
    xhr.send(formData);
  };
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
