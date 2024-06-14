<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="css/login.css">

    <!-- SweetAlert for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>   
    <div class="background">
        <img src="images/landingpage.jpg" alt="background image">
    </div>
    <div class="main">
        <form id="loginForm" action="logincon1.php" method="post">
            <a href="index.php" class="close-button">×</a>
            <h1>Login</h1>

            <div class="input-box">
            <select id="roleSelect" onchange="redirectBasedOnRole()" required>
              <option value="" disabled selected>Select your role</option>
              <option value="User">User</option>
              <option value="Doctor">Doctor</option>
            </select>
          </div>

            <div class="input-box">
                <input name="username" type="text" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Password" required>
            </div>
            <br>
            <div class="btn-container">
                <button type="submit" class="btn">Login</button>
            </div>
            <div class="register">
                <p> Don't have an account? <a href="register.php">Register Here!</a></p>
            </div>
        </form>
    </div>

    <script>
       document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    fetch('logincon1.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Success!',
                text: 'Login successful!',
                icon: 'success'
            }).then(() => {
                window.location.href = data.redirect;
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: data.message || 'Invalid username or password!',
                icon: 'error'
            });
        }
    })
    .catch(error => {
        Swal.fire({
            title: 'Error!',
            text: 'An error occurred while processing your request.',
            icon: 'error'
        });
        console.error('Error:', error);
    });
});


function redirectBasedOnRole() {
            var selectedRole = document.getElementById('roleSelect').value;
            if (selectedRole === 'User') {
                window.location.href = 'login.php';
            } else if (selectedRole === 'Doctor') {
                
            }
        }
    </script>
</body>
</html>
