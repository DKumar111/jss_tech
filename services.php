<?php
// include 'dbconnect.php';

if(isset($_POST['submit'])){
    $subject = "Enquiry form JSS Technologies website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $toEmail = "info@jsstechnologiesllc.com";

  // $insert_sql = "INSERT INTO `emails`(`full_name`, `company`, `email`, `phone`, `interest`, `budget`, `message`, `send_at`) 
   // VALUES ('$fullname','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";


$headers = [
    'Name' => $name,
    'From' => $email,
    'Phone Number' => $phone,
    'Message' => $message,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=iso-8859-1'
];

$headers = implode("\r\n", $headers);


    // $header = "Name: " . $name .
    // "\r\n Email: " . $email .
    // "\r\n Phone: " . $phone .
    // "\r\n Message: " . $message . "\r\n";

    mail($toEmail, $subject, $name, $headers);
        // echo "Mail sent successfully!";
        echo "<script>alert('Your information is recieved successfully!.')</script>";
        // echo "<script>window.open('../index.php','_self')</script>"; 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSS TECHNOLOGIES</title>

    <link rel="shortcut icon" href="image/JSS-LOGO.png" type="image/x-icon">

    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/responsiv.css">
    <link rel="stylesheet" href="css/tablet.css">

   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- HEADER START HERE -->
    <?php include 'header.php'  ?>
    <!-- HEADER END HERE -->

    <!-- SERVICES US BANNER SECTION -->
    <div class="services_hero services_inner-banner">
        <div class="services_hero_bgImg">
            <img src="image/service_img/serviceshero.jpeg" alt="">
        </div>
        <div class="services_hero_container">
            <div class="services_hero_head">
                <h1 class="services_head__head text-white ">
                    Our Digital Services Create Lovely Projects &amp; Deliver Memorable Experiences
                </h1>
            </div>
            <div class="service_hero_form_section">
                <div class="">
                    <h3>Speak to an Expert</h3>
                    <p class="text-secondary ">
                        if you have any RFP requirement please share with us at
                        <a href="mailto:support@jsstechnologiesllc.com"
                            class="primary-col w-uline">support@jsstechnologiesllc.com</a> and if you
                        are looking for a career related
                        enquiry please check our <a href="careers.php" class="primary-col w-uline">Career</a> section.
                    </p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form_control">
                        <input type="text" name="name" autocomplete ="on"  id="" required="required">
                        <label for="name">Your Name*</label>
                    </div>
                    <div class="form_control">
                        <input type="email" autocomplete ="on" name="email"  id="" required="required">
                        <label for="name">Your Email*</label>
                    </div>
                    <div class="form_control">
                        <input type="text" name="phoneNumber" autocomplete ="on"  id="" required="required">
                        <label for="name">Your Phone*</label>
                    </div>
                    <div class="form_control">
                        <input type="text" name="message " autocomplete ="on"  id="" required="required">
                        <label for="name">Your Message*</label>
                    </div>
                    <div class="form_button_wrapper">
                        <button class="form_submit_btn" name="submit" type="submit">Send</button>
                        <div class="form_arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SERVICES US BANNER SECTION -->


    <!-- SERVICE HELP SECTIOIN -->
    <div class="service_help-section">
        <div class="service_help_container">
            <div class="service_help_head">
                <h2 class="service_head_title">
                    A Full Service <br> <span class="text_gradiant">Creatice Digital Agency</span>
                </h2>
            </div>

            <div class="service_help_card_wrapper">
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">Web Development</h3>
                    <p class="service_card_para">
                        Desktop &amp; Mobile websites done right by professional web development experts.</p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">
                        Mobile Application </h3>
                    <p class="service_card_para">

                        High performance mobile apps for your business. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">
                        Digital Marketing </h3>
                    <p class="service_card_para">

                        Strategies to boost your conversions & ROI done by gurus. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">
                        UI/UX Design </h3>
                    <p class="service_card_para">

                        Great user experience, with responsive web design. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">
                        E-Commerce Solution </h3>
                    <p class="service_card_para">

                        Ecommerce: We create awesome online stores for simple, better and convenient shopping. Greater
                        ecommerce experience, every time! </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">
                        Branding & Communication </h3>
                    <p class="service_card_para">

                        We cover the entire spectrum of digital marketing, including, designing your company logo. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">

                        Video Animation </h3>
                    <p class="service_card_para">


                        Video Animation: Giving Your World a Better, More Inspirational Look. Tell Amazing Stories with
                        Our Video Animation. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <a class="service_card text-decoration-none " data-aos="fade-up" data-aos-once="ture" href="query.php">
                    <div class="card_img">
                        <img src="image/card-1.svg" alt="">
                    </div>
                    <h3 class="service_card-title">

                        IT Resource Outsourcing </h3>
                    <p class="service_card_para">


                        Resource Outsourcing: We Empower Your Business & Boost Competitiveness with Valuable Skillset &
                        the Right Talent. </p>
                    <div class="card_arrow_wrapper">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!-- /SERVICE HELP SECTIOIN -->



    <!-- FOATING FIXED ICON -->
    <?php  include 'floatingIcon.php'  ?>
    <!-- /FOATING FIXED ICON -->

    <!-- FOOTER SECTION -->
    <?php  include 'footer.php' ?>


    <!-- /FOOTER SECTION -->

    <script src="js/sidenav.js"></script>
    <script src="js/removenav.js"></script>
    <script src="js/activeClass.js"></script>
    <script src="js/popup-modal.js"></script>
    <script src="js/collapsibleList.js"></script>

    <!-- BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- AOS JS CDN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300,
        duration: 2000,
        anchorPlacement: 'top-bottom',
    });
    </script>
</body>

</html>