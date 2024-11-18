<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content>
        <meta name="keywords" content>

        <title>Omni International School</title>

        <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            body {
                overflow-y: hidden;
            }
        </style>
    </head>

    <body>

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="facility.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Our Facilities</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Our Facilities</li>
                    </ul>
                </div>
            </div>

            <style>
                .facility-text {
                    text-align: justify;
                }
            </style>


            <div class="facility-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our
                                    Facilities</span>
                                <h2 class="site-title">Let's Check Our <span>Facilities</span></h2>

                            </div>
                        </div>
                        <p style="text-align:justify;margin-bottom:30px">At Omni International School, Basti, we are
                            committed to providing our students with
                            a learning environment that is safe, modern, and conducive to both academic
                            excellence and personal growth. Our state-of-the-art facilities are designed to
                            enhance every aspect of the student experience, from academics and sports to health
                            and safety.</p>
                    </div>
                    <style>
                        body{
                            overflow: hidden;
                        }
                        .alumni .content-img::before{
                            background:none !important;
                        }
                        .alumni .content-img img{
                            transform: scale(1);
                        }
                        .alumni .content-img img:hover{
                            transform: scale(1.3);
                        }
                    </style>
                    <div class="alumni pt-120 pb-120">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-img wow fadeInLeft" data-wow-delay=".25s" style="overflow: hidden;border-radius:20px">
                                        <img src="assets/home/swimming.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                                        <div class="site-heading mb-3">

                                            <h2 class="site-title">
                                                Infrastructure
                                                <span>Overview</span>
                                            </h2>
                                        </div>
                                        <p class="content-text" style="text-align:justify">
                                            Our school campus features modern infrastructure equipped with smart
                                            classrooms, spacious learning areas, and advanced technological tools to
                                            support interactive and engaging learning experiences. The entire campus is
                                            designed to foster a productive and inspiring atmosphere for students of all
                                            ages.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .facility-item:hover{
                            box-shadow: 7px 7px rgba(0,0,0,0.3);
                        }

                    </style>
                    <div class="row">
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/sports.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Sports Facilities</a>
                                    </h3>
                                    <p class="facility-text">
                                        Physical education is a vital part of student life, and our Sports Facilities
                                        are designed to support a wide range of athletic activities. With fields for
                                        football, cricket, and athletics, as well as indoor spaces for badminton and
                                        table tennis, students have ample opportunities to engage in physical fitness,
                                        teamwork, and healthy competition.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/swimming.JPG" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Swimming Pool</a>
                                    </h3>
                                    <p class="facility-text">
                                        Our on-campus Swimming Pool is a favourite among students, offering professional
                                        training and recreational swimming. With certified instructors and regular
                                        practice sessions, students develop important life skills and enjoy the benefits
                                        of physical fitness in a safe, supervised environment.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/transport.avif" alt style="height:250px">
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Transport & Safety</a>
                                    </h3>
                                    <p class="facility-text">
                                        We prioritize the safety of our students, which is why we offer
                                        a transport service with GPS-equipped buses and trained staff to ensure safe
                                        travel. Our security measures include CCTV surveillance,
                                        trained security personnel to maintain a secure
                                        campus.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/medical.jpg" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Cafeteria & Health Services</a>
                                    </h3>
                                    <p class="facility-text">
                                        Our Cafeteria offers healthy, balanced meals and snacks to ensure that students
                                        stay energized throughout the day. In addition, our Health Services include a
                                        full-time nurse and access to medical support, ensuring students’ well-being is
                                        cared for during school hours.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/kindergarden.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Play Zone for Kindergarten Kids</a>
                                    </h3>
                                    <p class="facility-text">
                                        For our youngest learners, we offer a dedicated Play Zone equipped with
                                        age-appropriate toys and play equipment to promote physical development,
                                        creativity, and social interaction in a safe, fun-filled environment.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/science.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Science Labs</a>
                                    </h3>
                                    <p class="facility-text">
                                        Our fully equipped Science Labs provide students with the opportunity to explore
                                        Physics, Chemistry, and Biology through hands-on experiments and practical
                                        learning. These labs are designed to foster scientific curiosity and encourage
                                        critical thinking.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/robotics.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Robotics Lab</a>
                                    </h3>
                                    <p class="facility-text">
                                        Our cutting-edge Robotics Lab offers students the chance to engage in hands-on
                                        STEM learning. With access to robotics kits and programming tools, students can
                                        design, build, and program their own robots, developing skills in
                                        problem-solving, engineering, and coding.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/computer.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Computer Lab</a>
                                    </h3>
                                    <p class="facility-text">
                                        Our modern Computer Lab ensures that students stay up to date with the latest
                                        technological advancements. With access to high-speed internet and the latest
                                        software, students develop digital literacy skills that are essential for the
                                        future.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facility-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="facility-img">
                                    <img src="assets/facility/library.webp" alt>
                                </div>
                                <div class="facility-content">
                                    <h3 class="facility-title">
                                        <a href="facility.php#">Library</a>
                                    </h3>
                                    <p class="facility-text">
                                        The school’s Library is a quiet space for students to explore a wide range of
                                        reading materials, including academic textbooks, fiction, non-fiction, and
                                        reference books. Our librarian encourages students to develop a love for reading
                                        and provides support for independent research and study.
                                    </p>
                                    <div class="facility-arrow">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </main>

        <?php include('includes/footer.php') ?>




        <a href="facility.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/counter-up.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</php>