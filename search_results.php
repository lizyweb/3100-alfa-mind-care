<?php
session_start();

// Check if the user is logged in, redirect to login page if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit;
}

// Logout logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page after logout
    header("Location: index.html");
    exit;
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

    <title>Search Results</title>
    <style>
        .breadcrumbs {
            padding: 15px 0;
            background: #ecf6fe;
            }

            .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0 0 10px 0;
            margin: 0;
            font-size: 14px;
            }

            .breadcrumbs ol li+li {
            padding-left: 10px;
            }

            .breadcrumbs ol li+li::before {
            display: inline-block;
            padding-right: 10px;
            color: #f8c255;
            content: "/";
            }
            .get-quote{
                margin-right:50px;
                margin-top:50px
            }

            @media (max-width: 767px) {
                .get-quote{
                margin-right:10px;
            }
            }
    </style>
    <style>
    .container-1 {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      color: #333;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .dashboard-links {
      display: flex;
      flex-wrap: wrap;
    }

    .dashboard-links li {
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .dashboard-links a {
      display: block;
      padding: 10px;
      background-color: #3051c9;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .dashboard-links a:hover {
      background-color: #062590;
    }

    @media (max-width: 768px) {
      .dashboard-links li {
        width: 100%;
        margin-right: 0;
      }
    }
  </style>
  <style>
        /* Add a style block to include custom styles */
        .btn-brand {
          white-space: nowrap;
          background-color: transparent;
          color: var(--brand);
          border: 1px solid var(--brand);
        }
        .btn-brand:hover{
            background: linear-gradient(to right,rgb(31,191,183), rgb(25,190,182));
            border: 1px solid rgb(31,191,183);
            color: white;
        }
    </style>
</head>
<body style="background-color: rgb(233,233,233);">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Search Results</a></li>
        </ol>

        <div class="ms-auto" style="margin-top: 20px;">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="submit" name="logout" value="Logout"  class="btn_1 get-quote position-absolute end-0 top-0 mt-2 x-5">
          </form>
        </div>

      </div>
    </section>
    
<?php
// Your database connection details
$servername = "Localhost";
$username = "u276255518_alp";
$password = "Alpha@2024";
$dbname = "u276255518_alp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['search_criteria']) && isset($_GET['search_term'])) {
        // Search for patient information
        $search_criteria = $_GET['search_criteria'];
        $search_term = $_GET['search_term'];

        $search_criteria = mysqli_real_escape_string($conn, $search_criteria);
        $search_term = mysqli_real_escape_string($conn, $search_term);

        $sql = "SELECT * FROM patient_records WHERE $search_criteria = '$search_term'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display retrieved information with an edit link
            echo "<h3>Search Results:</h3>";
            while ($row = $result->fetch_assoc()) {
                echo "Record ID: " . $row['record_id'] . ",</br> Patient ID: " . $row['patient_id'] . ",</br> Name: " . $row['name'] . ", </br>Age: " . $row['age'] . ", </br>Gender: " . $row['gender'] . ", </br>Phone: " . $row['phone'] . ",   </br>Address: " . $row['address'] . ", </br>Treatment: " . $row['treatment'] . ", </br>Medication: " . $row['medication'] . ", </br>Next Appointment: " . $row['next_appointment'] . "</br> <a href='edit_patient.php?record_id=" . $row['record_id'] . "'> . Edit</a><br>";
            }
        } else {
            echo "No results found.</br></br>";
               

                    }
    } elseif (isset($_GET['record_id'])) {
        // Redirect to the edit page with the record ID for editing
        $record_id = $_GET['record_id'];
        header("Location: edit_patient.php?record_id=$record_id");
               exit();
    }
}

// Close the connection
$conn->close();
?>


<div class="container-1 mt-5 mb-5" style="background-color: rgb(233,233,233);">
      <h3 class="d-flex align-items-center justify-content-center text-brand mb-3">Dashboard Links</h3>
      <ul class="dashboard-links d-flex align-items-center justify-content-center">
        <li><a href="patient.php">Patient Details</a></li>
        <li><a href="search.php">Patient Database</a></li>
      </ul>
    </div>


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