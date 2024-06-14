<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="background">
    <img src="images/landingpage.jpg" alt="background image">
</div>
<div class="main">

    <!-- Notification Div -->
    <div id="notification" class="notification">
        <p id="notification-message"></p>
    </div>
    
    <form id="registrationForm" action="registercon.php" method="post">
        <a href="index.php" class="close-button">×</a>
        <h1>Sign-Up</h1>
        <div class="input-box">
            <input name="username" type="text" placeholder="Username" required>
        </div>
        <div class="input-box">
            <input name="email" type="text" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input name="contact_no" type="text" placeholder="Contact No." required>
        </div>
        <div class="input-box">
            <input name="password" type="password" placeholder="Password" required>
        </div>
        <div class="input-box">
            <input name="confirm_password" type="password" placeholder="Confirm Password" required>
        </div>
        <br>
        <div class="btn-container">
            <button type="submit" class="btn">Sign Up</button>
        </div>
        <div class="register">
            <p> Already have an account? <a href="login.php">Login</a> <a href="login1.php">Here!</a></p>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const registrationStatus = urlParams.get('status');
    const notificationMessage = urlParams.get('message');
    const notification = document.getElementById('notification');
    const notificationMessageElement = document.getElementById('notification-message');

    if (registrationStatus === 'success') {
        notificationMessageElement.textContent = 'Registration successful';
        notification.classList.add('success');
        notification.style.display = 'block';

        // Redirect after a delay
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 1000); // Redirects after 1 second
    } else if (registrationStatus === 'error' && notificationMessage === 'password_mismatch') {
        notificationMessageElement.textContent = 'Passwords do not match';
        notification.classList.add('error');
        notification.style.display = 'block';
    }
});
</script>

</body>
</html>
