<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSS TECHNOLOGIES</title>

    <link rel="shortcut icon" href="image/JSS-LOGO.png" type="image/x-icon">

    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/responsiv.css">
    <link rel="stylesheet" href="css/blg.css">
    <link rel="stylesheet" href="css/tablet.css">

    <!-- AOS CSS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

    </style>
</head>

<body>

    <?php include 'header.php';  ?>

    <!-- ABOUT US BANNER SECTION -->
    <div class="aboutUs_hero inner-banner">
        <div class="about_container">
            <div class="twocol__row">
                <div class="col-36">
                    <h6 class="generic--head__subhead left-element">
                        Digital Marketing Agency In Dubai
                    </h6>
                    <h1 class="generic--head__head ">
                        Our Content Professionals &amp; Influencers Put You On Top Of The <span
                            class="primary-col text-primary ">Search
                            Engine </span>
                    </h1>
                </div>
                <div class="col-30">
                    <p class="aboutUs_para text-white">At JSS Technologies, we have leading industry professionals and
                        state-of-the-art
                        technology to ensure your business and brands lift up on the digital front.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT US BANNER SECTION -->

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('branding')"> Branding &amp; Communication</button>
        <button class="btn" onclick="filterSelection('uiux')"> UI/UX</button>
        <button class="btn" onclick="filterSelection('webdev')"> Web Development</button>
        <button class="btn" onclick="filterSelection('digitalm')"> Digital Marketing</button>
        <button class="btn" onclick="filterSelection('crtpdt')"> Creative Production</button>
        <button class="btn" onclick="filterSelection('stfa')"> Staff Augmentation</button>
    </div>

    <div class="container">
        <div class="filterDiv branding">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Decoding-UAE-Social-Media-Trends-Insights-and-Statistics-for-2024-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">In the dynamic landscape of the United Arab Emirates (UAE), where
                        innovation and technology intertwine</p>

                </div>
            </div>
        </div>
        <div class="filterDiv uiux">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/The-Rise-of-Augmented-Reality-in-Mobile-App-Development-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mobile Apps</h5>
                    <p class="card-text">In the dynamic world of technology, innovations emerge at a
                                breathtaking pace, constantly  </p>

                </div>
            </div>
        </div>
        <div class="filterDiv cars">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Discover-the-Magic-of-Mobile-First-Indexing-for-your-SEO-Strategy-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Search Engine Optimization (SEO)</h5>
                    <p class="card-text">In the fast-evolving landscape of digital marketing, staying ahead of
                                the curve</p>

                </div>
            </div>
        </div>
        <div class="filterDiv crtpdt">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/The-Power-of-Corporate-Films-Enhancing-Business-Success-through-Video-Production-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Creative Production</h5>
                    <p class="card-text">In the dynamic landscape of modern business, staying ahead requires
                                innovative approaches</p>

                </div>
            </div>
        </div>
        <div class="filterDiv digitalm">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Eid-ul-Fitr-2024-UAEs-Fun-filled-Week-of-Festivities.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">As the crescent moon graces the skies, signaling the conclusion of
                                Ramadan</p>

                </div>
            </div>
        </div>
        <div class="filterDiv digitalm">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Planning-Your-2024-Eid-ul-Fitr-Holidays-in-the-UAE.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">Are you ready to mark your calendars and plan ahead for the joyous</p>

                </div>
            </div>
        </div>
        <div class="filterDiv uiux">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/03/9-Key-Benefits-of-Hybrid-App-Development-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mobile Apps</h5>
                    <p class="card-text">From its inception, hybrid app development has been quite in trend.</p>

                </div>
            </div>
        </div>
        <div class="filterDiv webdev">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/03/Top-10-Mobile-App-Development-Frameworks-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mobile Apps</h5>
                    <p class="card-text">In today's digitally-driven world, mobile app frameworks have emerged
                                as indispensable tools</p>

                </div>
            </div>
        </div>
        <div class="filterDiv webdev">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/03/10-Tips-for-Keeping-Your-Website-Healthy-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">In the fast-paced digital landscape of today, your website serves as
                                the virtual</p>

                </div>
            </div>
        </div>
        <!-- <div class="filterDiv fruits animals">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Decoding-UAE-Social-Media-Trends-Insights-and-Statistics-for-2024-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">In the dynamic landscape of the United Arab Emirates (UAE), where
                        innovation and technology intertwine...</p>

                </div>
            </div>
        </div> -->
        <!-- <div class="filterDiv fruits">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Decoding-UAE-Social-Media-Trends-Insights-and-Statistics-for-2024-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">In the dynamic landscape of the United Arab Emirates (UAE), where
                        innovation and technology intertwine...</p>

                </div>
            </div>
        </div> -->
        <!-- <div class="filterDiv fruits">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Decoding-UAE-Social-Media-Trends-Insights-and-Statistics-for-2024-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">In the dynamic landscape of the United Arab Emirates (UAE), where
                        innovation and technology intertwine...</p>

                </div>
            </div>
        </div> -->
        <!-- <div class="filterDiv animals">
            <div class="card  shadow bg-body-tertiary rounded" id="tab_77">
                <img src="https://www.digitalgravity.ae/blog/wp-content/uploads/2024/04/Decoding-UAE-Social-Media-Trends-Insights-and-Statistics-for-2024-624x285.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Social Media Marketing</h5>
                    <p class="card-text">In the dynamic landscape of the United Arab Emirates (UAE), where
                        innovation and technology intertwine...</p>

                </div>
            </div>
        </div> -->
    </div>

    <!-- FLOATING ICONS ON THE RIGHT SEIDE OF THE SCREEN -->
    <div class="socialIcon_right">
        <div class="socializerIcon_right">

        </div>
    </div>
    <!-- /FLOATING ICONS ON THE RIGHT SEIDE OF THE SCREEN -->

    <!-- FOATING FIXED ICON -->
    <?php include 'floatingIcon.php'  ?>

    <button class="floating_btn">
        <i width="2rem" height="2rem" class="fa-regular fa-comment"></i>
    </button>
    <!-- /FOATING FIXED ICON -->

    <!-- FOOTER SECTION -->
    <?php  include 'footer.php'  ?>


    <!-- /FOOTER SECTION -->

    <script src="js/activeClass.js"></script>
    <script src="js/sidenav.js"></script>
    <script src="js/popup-modal.js"></script>
    <script src="js/blog_tab.js"></script>
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