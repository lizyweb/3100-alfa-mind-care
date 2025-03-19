<?php
session_start();

// Check if the user is already logged in, redirect to dashboard if logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate login credentials (Replace with your authentication logic)
    $username = "u276255518_alp"; // Replace with your actual username
    $password = "Alpha@2024"; // Replace with your actual password

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username === $username && $input_password === $password) {
        // Authentication successful, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to dashboard after successful login
        header("Location: dashboard.php");
        exit;
    } else {
        $login_err = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Brain Profiling, Physical Wellness, Prenatal Women Health Care, Mental Wellness, Addictions, Counselling, Therapies, After Care, Follow Up, Mental Health Services, Emotional Wellness, Personalized Therapy">
    <meta name="description" content="Alpha Mind Care offers mental and physical wellness services, including brain profiling, prenatal care, addiction support, counseling, and therapies.">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:title" content="Alpha Mind Care">
    <meta name="twitter:description" content="Alpha Mind Care offers mental and physical wellness services, including brain profiling, prenatal care, addiction support, counseling, and therapies.">
    <meta name="twitter:image" content="URL_TO_IMAGE">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Alpha Mind Care">
    <meta property="og:description" content="Alpha Mind Care offers mental and physical wellness services, including brain profiling, prenatal care, addiction support, counseling, and therapies.">
    <meta property="og:image" content="URL_TO_IMAGE">
    <meta property="og:url" content="URL_TO_YOUR_WEBSITE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Alpha Mind Care">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/image-2/favicon.png">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Lato"> -->

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>

    <!-- Assets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate/animate.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
    <!-- <link rel="stylesheet" href="fonts/font-awesome.css"> -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style-5.css">
    <link rel="stylesheet" href="css/style-4.css">
    <link rel="stylesheet" href="css/style-3.css">
    <link rel="stylesheet" href="css/style-2.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
    <style>
        body {
            background-image: linear-gradient(to left, #3051c9 0%, #062590 51%, #3051c9 100%);
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="cta">
   <div class="container">
        <div class="login-container">
            <h2 class="text-center">Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
        <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn_1 btn-block mt-3">Login</button>
        </div>
    </form>

    <?php
    // Display login error, if any
    if (isset($login_err)) {
        echo "<p>$login_err</p>";
    }
    ?>

    <!-- Main JS File -->
    <script src="js/main-5.js"></script>
    <script src="js/main-4.js"></script>
    <script src="js/main-3.js"></script>
    <script src="js/main-2.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="assets/slick/slick-animation.min.js"></script>
    <script src="assets/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/aos/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script>
        (function ($) {
            "use strict";
            
            // Initiate the wowjs
            new WOW().init();
            
        })(jQuery);
    </script>
    <script>
        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
            });
            $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
            return false;
        });
    </script>
    <script>
        // Animation on scroll
        window.addEventListener('load', () => {
            AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
            })
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery.sticky.js"></script>
</body>
</html>