
<!-- HEADER START HERE -->
<div class="container-fluid m-0 p-0 header" id="header">
    <div class=" header_container">
        <div class="brand_logo  col-md-2 col-lg-2">
            <a class="brand_logo_anchor" href="index.php">
                <img class="img-fluid"  src="image/JSS-LOGO.png" alt="">
            </a>
        </div>
        <div class="navigation">
            <nav class="navigation_content">
                <ul class="menu" id="menu_m" >
                    <li class="menu_item  "><a style="color: black;" class="nav-link" href="index.php">HOME</a></li>
                    <li class="menu_item "><a style="color: black;" class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="menu_item "><a style="color: black;" class="nav-link" href="services.php">SERVICES</a></li>
                    <li class="menu_item "><a style="color: black;" class="nav-link" href="case_study.php">CASE STUDIES</a></li>
                    <li class="menu_item "><a style="color: black;" class="nav-link" href="careers.php">CAREERS</a></li>
                    <li class="menu_item "><a style="color: black;" class="nav-link" href="blg.php">BLOG</a></li>
                </ul>
                <div class="social_wrapper">
                    <div class="anchor_wrapper text_anchor " id="myBtn">
                        <a class="text-decoration-none " href="#"><span>Speak to an Expert</span></a>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="php_script/email.php" method="post" >
                                <div class="modal-form-heading">
                                    <h1>Speak to an Expert</h1>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label for="exampleInputName1" class="form-label">Full Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fullName" id="exampleInputName1"
                                        aria-describedby="emailHelp" autocomplete ="on" required="require">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputCompany1" class="form-label">Company<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" autocomplete ="on" name="company" id="exampleInputCompany1" required="require">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" autocomplete ="on" name="email" id="exampleInputEmail1" required="require">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPhone1" class="form-label">Phone<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" autocomplete ="on" name="phone" id="exampleInputPhone1" required="require">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label for="exampleInputInterest1" class="form-label">I'm Interest in<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" autocomplete ="on" name="interest" id="exampleInputInterest1" required="require">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputBudget1" class="form-label">Budget<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" autocomplete ="on" name="budget" id="exampleInputBudget1" required="require">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label for="exampleInputMessage1" class="form-label">Message<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" autocomplete ="on" name="message" id="exampleInputMessage1" required="require">
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center ">
                                    <button type="submit" name="send" class="btn btn-primary mt-3 d-flex justify-content-center align-items-center w-25  ">Submit</button>
                            </div>
                            </form>
                        </div>

                    </div>

                    <div class="anchor_wrapper">
                        <a class="wh_icon text-decoration-none " style="color: white;"
                            href="https://wa.me/+971523549991" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="anchor_wrapper">
                        <a class="tel_icon text-decoration-none " style="color: white;" href="tel:+971 52 354 9991">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>

                </div>
            </nav>
        </div>
        <!-- MOBILE NAVIGATION -->
        <div class="mobileSide_nav" id="mobile_side_nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="nav_btn mobile_active" href="index.php">Home</a>
            <a class="nav_btn " href="about.php">About</a>
            <a class="nav_btn " href="services.php">Services</a>
            <a class="nav_btn " href="case_study.php">Case Studies</a>
            <a class="nav_btn " href="careers.php">Careers</a>
            <a class="nav_btn " href="blg.php">Blog</a>
        </div>
        <!-- /MOBILE NAVIGATION -->
        <div class="nav-toggle">
            <span id="ham-icon" style="font-size: 30px; cursor: pointer;" onclick="openNav()">&#9776;</span>
        </div>
    </div>
</div>
<!-- HEADER END HERE -->
