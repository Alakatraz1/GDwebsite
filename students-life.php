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
    </head>

    <body>

        <?php include('includes/preloader.php') ?>

        <?php include('includes/navbar.php') ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="about.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">

            <div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
                <div class="container">
                    <h2 class="breadcrumb-title">Student Life</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Student Life</li>
                    </ul>
                </div>
            </div>

            <style>
                .more-text {
                    display: none;
                }

                .read-more-btn {
                    background: none;
                    border: none;
                    color: #FDA31B;
                    /* Matches the user's preferred color */
                    cursor: pointer;
                    font-weight: bold;
                }
                .blog-item1{
                    background-color: #ff002a;
                }

                .blog-item2{
                    background-color: #003d69;
                }

                .blog-item3{
                    background-color: #3db2d5;
                }
                .blog-item p{
                    color: white;
                }
                .blog-item h4 a{
                    color: white;
                }
                .blog-item:hover{
                    box-shadow: 7px 7px rgba(0,0,0,0.3);
                }
            </style>

            <div class="blog-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>Student
                                    Life</span>
                                <h2 class="site-title">Student<span> Life</span></h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="my-4">

                            <p>At Omni International School, Basti, we believe that education goes beyond the classroom.
                                Our Student Life program is designed to provide students with a well-rounded experience
                                that nurtures not just their academic talents, but also their personal interests,
                                leadership qualities, and social skills. Through a variety of clubs, sports, cultural
                                activities, and leadership opportunities, we encourage students to explore their
                                passions, develop essential life skills, and contribute positively to their school
                                community.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item1" data-wow-delay=".25s">

                                <div class="blog-item-img">
                                    <img src="assets/student/club.JPG" alt="Thumb">
                                </div>
                                <div class="blog-item-info " style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Clubs & Extracurriculars</a>
                                    </h4>
                                    <p>Our vibrant Clubs & Extracurricular Activities program allows students to pursue
                                        their interests beyond academics. Whether it’s debating, music, art, or science,
                                        <span class="more-text" style="display: none;">
                                            we offer a wide range of clubs that cater to diverse student interests,
                                            encouraging creativity, collaboration, and independent learning</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item2" data-wow-delay=".50s">

                                <div class="blog-item-img">
                                    <img src="assets/student/sports.JPG" alt="Thumb">
                                </div>
                                <div class="blog-item-info" style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Sports Program</a>
                                    </h4>
                                    <p>
                                        Physical education is integral to student life at Omni International School. Our
                                        Sports Program offers students the opportunity to participate in a variety of
                                        <span class="more-text" style="display: none;">
                                            sports, including football, cricket, athletics, and badminton. Through
                                            structured training and competitions, students learn teamwork, discipline,
                                            and
                                            the importance of maintaining a healthy lifestyle.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item3" data-wow-delay=".75s">

                                <div class="blog-item-img">
                                    <img src="assets/student/events.JPG" alt="Thumb">
                                </div>
                                <div class="blog-item-info" style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Competitions & Events</a>
                                    </h4>
                                    <p>
                                        Throughout the year, students participate in various Competitions and Events
                                        that challenge their intellect, creativity, and skills. From academic contests
                                        <span class="more-text" style="display: none;">
                                            to inter-school competitions, these events foster a spirit of healthy
                                            competition and provide platforms for students to showcase their
                                            talents.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item2" data-wow-delay=".25s">

                                <div class="blog-item-img">
                                    <img src="assets/student/cultural.jpg" alt="Thumb">
                                </div>
                                <div class="blog-item-info" style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Cultural Activities</a>
                                    </h4>
                                    <p>
                                        We celebrate the rich diversity of our student community through a wide range of
                                        Cultural Activities. Events such as festivals, music and dance performances,
                                        <span class="more-text" style="display: none;"> and
                                            school plays offer students the chance to engage with cultural traditions,
                                            enhancing their appreciation for heritage while developing confidence and
                                            teamwork.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item3" data-wow-delay=".50s">

                                <div class="blog-item-img">
                                    <img src="assets/student/leadership.JPG" alt="Thumb">
                                </div>
                                <div class="blog-item-info" style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Student Leadership</a>
                                    </h4>
                                    <p>
                                        At Omni International School, we are committed to developing future leaders. Our
                                        Student Leadership programs provide students with opportunities to take on
                                        <span class="more-text" style="display: none;">
                                            responsibilities, whether through student council positions, event
                                            management,
                                            or mentoring peers. Leadership development is a key component of preparing
                                            our
                                            students for success in the real world.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp blog-item1" data-wow-delay=".50s">

                                <div class="blog-item-img">
                                    <img src="assets/student/summer.JPG" alt="Thumb">
                                </div>
                                <div class="blog-item-info" style="padding-top:10px">

                                    <h4 class="blog-title">
                                        <a href="#">Summer Camp</a>
                                    </h4>
                                    <p>
                                        At Omni International School, we prioritize the holistic development of our
                                        students through enriching summer camps. These programs offer a variety of
                                        <span class="more-text" style="display: none;">
                                            activities, including sports, arts, and science, allowing students to
                                            explore
                                            their interests in a fun environment. Our summer camps foster teamwork and
                                            creativity, helping students build confidence and friendships while
                                            developing
                                            essential life skills that prepare them for future challenges.</span>
                                        <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>

            <script>
                function toggleReadMore(button) {
                    const moreText = button.previousElementSibling;
                    if (moreText.style.display === "none") {
                        moreText.style.display = "inline";
                        button.textContent = "Read less";
                    } else {
                        moreText.style.display = "none";
                        button.textContent = "Read more";
                    }
                }
            </script>



            <div class="pb-120 pt-50" style="display:none">
                <div class="container" style="text-align:justify">
                    <div class="row">
                        <div class="col">
                            <div class="terms-content">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Student
                                    Life</span>
                                <h2 class="site-title" id="intro">Student <span>Life</span></h2>
                                <p>At Omni International School, Basti, we believe that education goes beyond the
                                    classroom. Our Student Life program is designed to provide students with a
                                    well-rounded experience that nurtures not just their academic talents, but also
                                    their personal interests, leadership qualities, and social skills. Through a variety
                                    of clubs, sports, cultural activities, and leadership opportunities, we encourage
                                    students to explore their passions, develop essential life skills, and contribute
                                    positively to their school community.
                                </p>
                                <p>
                                <h3>Clubs & Extracurriculars</h3>
                                Our vibrant Clubs & Extracurricular Activities program allows students to pursue
                                their interests beyond academics. Whether it’s debating, music, art, or science, we
                                offer a wide range of clubs that cater to diverse student interests, encouraging
                                creativity, collaboration, and independent learning.
                                </p>
                                <p>
                                <h3>Sports Program</h3>
                                Physical education is integral to student life at Omni International School. Our
                                Sports Program offers students the opportunity to participate in a variety of
                                sports, including football, cricket, athletics, and badminton. Through structured
                                training and competitions, students learn teamwork, discipline, and the importance
                                of maintaining a healthy lifestyle.
                                </p>
                                <p>
                                <h3>Competitions & Events</h3>
                                Throughout the year, students participate in various Competitions and Events that
                                challenge their intellect, creativity, and skills. From academic contests to
                                inter-school competitions, these events foster a spirit of healthy competition and
                                provide platforms for students to showcase their talents.
                                </p>
                                <p>
                                <h3>Cultural Activities</h3>
                                We celebrate the rich diversity of our student community through a wide range of
                                Cultural Activities. Events such as festivals, music and dance performances, and
                                school plays offer students the chance to engage with cultural traditions, enhancing
                                their appreciation for heritage while developing confidence and teamwork.
                                </p>
                                <p>
                                <h3>Student Leadership</h3>
                                At Omni International School, we are committed to developing future leaders. Our
                                Student Leadership programs provide students with opportunities to take on
                                responsibilities, whether through student council positions, event management, or
                                mentoring peers. Leadership development is a key component of preparing our students
                                for success in the real world.

                                </p>


                            </div>


                        </div>
                    </div>
                </div>
            </div>








        </main>

        <?php include('includes/footer.php') ?>



        <a href="about.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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