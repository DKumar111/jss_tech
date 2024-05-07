<?php
if(isset($_POST['send'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $usermesg = $_POST['message'];

        $toEmail = "dk9094293@gmail.com";

        $mailHeaders = "Name: " .$username. 
        "\r\n Email: " . $email .
        "\r\n  Subject: " . $phone . 
        "\r\n Message: " .$usermesg . "\r\n";

        if(mail($toEmail, $username, $mailHeaders)){

            echo "<script>alert('Email sent successfully')</script>";

            // $message = "Your information is recieved successfully.";
        }
            // echo "<script>alert('Message has been sent')</script>";
       
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSS TECHNOLOGIES</title>

    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/responsiv.css">
    <link rel="stylesheet" href="css/query.css">


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
    <div class="services_hero query_services_hero services_inner-banner">
        <div class="services_hero_bgImg">
            <img src="image/service_img/serviceshero.jpeg" alt="">
        </div>
        <!-- SERVICES US BANNER SECTION -->
        <div class="query_form_section">
            <?php
                $get_data = $_GET['text'];
            ?>
            <div class="query_Form-sub_section">

                <div class="query_form_title">
                    <h1 class="query_title">
                        <?php  echo $get_data  ?></h1>
                    <h6 class="query_para">
                        Boost your online growth with JSS Technologies. As a leading digital marketing agency in the
                        UAE,
                        we offer bespoke and multi-channel digital marketing services to a range of big and small
                        businesses from various industries. </h6>
                </div>
                <div class="quey_form_section2 ">
                    <div class="form_content">
                        <div class="form_heading">
                            <h3>Have any questions ?</h3>
                        </div>
                        <form class="form" action="" method="post">
                            <div class="form_fields">
                                <div class="form_input_container">
                                    <label for="name" class="label">Your Name*</label>
                                    <input id="name" class="input" name="fullname" type="text"
                                        placeholder="Enter your Name" tabindex="1">
                                </div>
                            </div>
                            <div class="form_fields">
                                <div class="form_input_container">
                                    <label for="name" class="label">Your Email*</label>
                                    <input id="name" class="input" name="fullname" type="email"
                                        placeholder="Enter your Email" tabindex="1">
                                </div>
                            </div>
                            <div class="form_fields">
                                <div class="form_input_container">
                                    <label for="name" class="label">Your Phone Number*</label>
                                    <input id="name" class="input" name="fullname" type="text"
                                        placeholder="Enter your Phone Number" tabindex="1">
                                </div>
                            </div>
                            <div class="form_fields">
                                <div class="form_input_container">
                                    <label for="name" class="label">Budget*</label>
                                    <input id="name" class="input" name="fullname" type="text"
                                        placeholder="Enter your Budget" tabindex="1">
                                </div>
                            </div>
                            <div class="form_fields">
                                <div class="form_input_container">
                                    <label for="name" class="label">Message*</label>
                                    <input id="name" class="input" name="fullname" type="text"
                                        placeholder="Enter your Message" tabindex="1">
                                </div>
                            </div>
                            <div class="submit_section">
                                <div class="submit_btn">
                                    <button>
                                        <span>Send</span>
                                        <div class="form_send_arrow">
                                        <i style="" class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                                <div class="form_footer_text">
                                    <p>if you have any RFP requirement please share with us at <a
                                            href="mailto:support@jsstechnologiesllc.com"
                                            class="primary-col w-uline">support@jsstechnologiesllc.com</a> and if you are
                                        looking for a career related enquiry please check our <a href="careers.php"
                                            class="primary-col w-uline">Career</a> section.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SERVICE HELP SECTIOIN -->

        <!-- /SERVICE HELP SECTIOIN -->



        <!-- FOATING FIXED ICON -->
        <?php  include 'floatingIcon.php'  ?>
        <!-- /FOATING FIXED ICON -->

        <!-- FOOTER SECTION -->
        <?php  include 'footer.php' ?>


        <!-- /FOOTER SECTION -->

        <script src="js/slider_tab.js"></script>
        <script src="js/sidenav.js"></script>
        <script src="js/removeNav.js"></script>
        <script src="js/activeClass.js"></script>

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