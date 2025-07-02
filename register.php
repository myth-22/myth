<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <!-- Local Bootstrap 5 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
   
</head>
<body>
    <div class="container position-relative" style="min-height: 100vh; margin-top: 80px;">
        <div class="register-container mt-5">
            <div class="register-header text-center">
                <h6>REGISTER NOW</h6>
                <h2>Sign up For Free.</h2>
                <small>Already have account? <a href="#">Sign up</a></small>
            </div>
            <form>
                <div class="mb-3 position-relative">
                    <label for="username" class="form-label">Username</label>
                    <span class="input-icon"><img src="images/user-logo.png" alt="User"></span>
                    <input type="text" class="form-control ps-5" id="username" placeholder="">
                </div>
                <div class="mb-3 position-relative">
                    <label for="email" class="form-label">E-Mail</label>
                    <span class="input-icon"><img src="images/mail-logo.png" alt="Mail"></span>
                    <input type="email" class="form-control ps-5" id="email" placeholder="">
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <span class="input-icon"><img src="images/password-logo.png" alt="Password"></span>
                    <input type="password" class="form-control ps-5" id="password" placeholder="">
                </div>
                <button type="submit" class="btn sign-in-btn">SIGN IN</button>
            </form>
        </div>
    </div>
    <!-- Local Bootstrap 5 JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
