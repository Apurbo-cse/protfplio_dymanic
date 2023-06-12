<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/harold/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 16:30:43 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Harold - Landing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/tiny-slider.css.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css" />


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>


    <!--Navbar Start-->
    @include('frontend.layout.nav')
    <!-- Navbar End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="row g-3 needs-validation">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">First name <span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Email <span
                                    class="text-primary">*</span></label>
                            <input type="email" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Subject <span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Password <span
                                    class="text-primary">*</span></label>
                            <input type="password" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="validationTextarea" class="form-label">Textarea<span
                                    class="text-primary">*</span></label>
                            <textarea class="form-control" id="validationTextarea" required></textarea>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->


    <!-- home section -->
    <section class="home" id="home" style="background-image: url(images/bg-home.png);">
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-slider" id="home-slider">
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-warning fw-semibold mb-0">Hello! I AM</p>
                                        <div class="home-title mb-0 fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Apurbo Roy","Software Developer.","Javascript | Reactjs | React Native." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Passionate developer living in Dhaka with over 1.9 years of solid experience dedicated to creating web applications and mobile application. Specializing in Reactjs, React Native and laravel development. Self-motivated, responsible, creative, team-worker, and holds a Bachelor’s degree in Computer Science & Engineering. Looking forward to a promising career in the position of Software Engineer/Developer.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-inline-block mt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="btn-link ">
                                                    <a href="#" class="text-dark h6">
                                                        <div class="read-link btn-link-warning"><span>See my work
                                                            </span></div>
                                                    </a>
                                                </div>
                                                <div class="btn-link-icon">
                                                    <img src="images/home/right-arrow.png" alt=""
                                                        class="img-fluid ms-3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="images/apubro.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->

                        <!-- <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-primary fw-semibold mb-0">Hello! I AM</p>
                                        <div class="home-title mb-0 text-dark fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Marie Jons.","Devloper.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="#" class="text-dark h6">
                                                    <div class="read-link"><span>See my work </span></div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="images/home/right-arrow.png" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="images/home/home-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- slider item -->
                        <!-- <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-danger fw-semibold mb-0">Hello! I AM</p>
                                        <div class="home-title mb-0 text-dark fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Ray Glam.","Web Enthusiast.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="#" class="text-dark h6">
                                                    <div class="read-link btn-link-denger"><span>See my work </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="images/home/right-arrow.png" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="images/home/home-3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- slider item -->
                        <!-- <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-blue fw-semibold mb-0">Hello! I AM</p>
                                        <h1 class="home-title mb-0 text-dark fw-bold">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Ray Glam.","Web Enthusiast.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </h1>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="#" class="text-dark h6">
                                                    <div class="read-link btn-link-blue"><span>See my work </span></div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="images/home/right-arrow.png" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="images/home/home-4.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- slider item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end home section -->



    <!-- about-me section -->
    <section class="section about-me" id="aboutme">
        <!-- container -->
        <div class="container">
            <div class="about-box">
                <div class="row">

                    <div class="col-lg-6 position-relative">
                        <div class="image-round"></div>
                        <div class="about-image p-4 pb-0">
                            <img src="images/about.png" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-item p-5">
                            <h2 class="display-5 fw-semibold">About Me</h2>
                            <p class="text-muted fs-14">It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout. The point of using normal
                                distribution of letters, as opposed to using 'Content here, content here', making it
                                look like readable English..</p>

                            <ul class="nav nav-pills mb-3 mt-4 pt-2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Skills</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Experience</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">

                                    <div class="skill-item mt-4 pt-2">
                                        <div class="">
                                            <h6>Language :</h6>
                                            <small>
                                                JavaScript, HTML, CSS, SCSS (SASS), SQL
                                                (Basic), PHP(prior experience), C
                                                programming.</small>
                                        </div>
                                    </div>
                                    <div class="skill-item pt-2">
                                        <div class="">
                                            <h6>Libraries & Frameworks :</h6>
                                            <small>React JS, React Native, Laravel, Bootstrap,
                                                React-Bootstrap, jQuery, Redux, Express
                                                (basic), Mongoose (basic).
                                                </small>
                                        </div>
                                    </div>

                                    <div class="skill-item pt-2">
                                        <div class="">
                                            <h6>Version Control :</h6>
                                            <small>GIT, GitHub.</small>
                                        </div>
                                    </div>

                                    <div class="skill-item pt-2">
                                        <div class="">
                                            <h6>Soft Skills :</h6>
                                            <small>Effective communication, Critical and
                                                Creative Thinking, Willingness to learn.</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="experience">
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>Developer</h5>
                                                    <p class="text-muted fs-15 fw-bold">TFP Solutions Bangladesh Ltd. ( Sep. 2021 - present) </p>
                                                    <p class="text-muted fs-15">The front end of the application has been created through attractive
                                                        visual design. Software testing and troubleshooting, debugging and
                                                        upgrading software to ensure responsiveness and efficiency. Pixel
                                                        perfect implementation of user interface.
                                                        Integrating front end UI with built in API. Meet both technical and
                                                        consumer needs. Created and maintained React Native components,
                                                        screens and features for mobile apps.
                                                        Collaborated with other developers to implement new features in a
                                                        manner consistent with existing codebase conventions.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="experience">
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>BSc in Computer Science & Engineering</h5>
                                                    <p class="text-muted fs-15 mb-0">Daffodil International University</p>
                                                    <p class="text-muted fs-15 mb-0">Graduate - 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end about-me -->


    <!-- start service -->
    <section class="section service" id="service">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h6 class="mb-0 text-muted fs-15">WHAT WE OFFER</h6>
                        <h2>Affordable Services</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-purple text-center">
                                <i class="mdi mdi-cached fs-24 text-purple"></i>
                            </div>
                            <h6 class="mt-4">Research & Analysis</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-danger text-center">
                                <i class="mdi mdi-comment-plus-outline fs-24 text-danger"></i>
                            </div>
                            <h6 class="mt-4">Web Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-warning text-center">
                                <i class="mdi mdi-layers fs-24 text-warning"></i>
                            </div>
                            <h6 class="mt-4">Network Management</h6>
                            <p class="text-muted fs-15 ">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-blue text-center">
                                <i class="mdi mdi-inbox-arrow-up fs-24 text-blue"></i>
                            </div>
                            <h6 class="mt-4">UI/UX Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-primary text-center">
                                <i class="mdi mdi-chart-line fs-24 text-primary"></i>
                            </div>
                            <h6 class="mt-4">Mobile App Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-pink text-center">
                                <i class="mdi mdi-email-open fs-24 text-pink"></i>
                            </div>
                            <h6 class="mt-4">Network Management</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end service -->



    <!-- start counter -->
    <section class="section counter" id="counter">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h6 class="mb-0 text-muted fs-15">Counter</h6>
                        <h2>Our Achievement</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="images/counter/heart.png" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="800">0</h2><span
                                class="h2 fw-bold">K</span><span class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="images/counter/blueprint.png" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="400">0</h2>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Project Done</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="images/counter/star.png" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="1000">0</h2><span
                                class="h2 fw-bold">K</span><span class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Clients Review</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="images/counter/idea.png" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="20">0</h2><span
                                class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Year Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->



    <!-- start my-work -->
    <section class="section my-work" id="work">
        <!-- start container -->
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center">
                    <div class="left-text">
                        <h2 class="mb-0">My Latest Work</h2>
                        <p class="fs-15 text-muted">Prefect solution for digital experience</p>
                    </div>
                    <div class="right-text ms-auto">
                        <a href="#" class="text-primary border-2 border-primary border-bottom">More Work <img
                                src="images/home/right-arrow-primary.png" alt="" class="img-fluid mb-1 ms-2"></a>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="work-slider" id="work-slider">
                        <div class="item">
                            <div class="work-image position-relative">
                                <a href="#">
                                    <img src="images/work/img-1.png" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5">
                                        <h4 class="mb-0">Web Design</h4>
                                        <p>E-Commerce</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="#">
                                    <img src="images/work/img-2.png" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5">
                                        <h4 class="mb-0">NFT Web Design</h4>
                                        <p>NFT Maerketplace</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="#">
                                    <img src="images/work/img-3.png" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5 text-white">
                                        <h4 class="mb-0">App Design</h4>
                                        <p class="text-white-50">Mobile App </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="#">
                                    <img src="images/work/img-4.png" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5 text-white">
                                        <h4 class="mb-0">Web Design</h4>
                                        <p class="text-white-50">E-Commerce</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end my-work -->




    <!-- start testimonial -->
    <section class="section testimonial" id="testi">
        <div class="shape-1">
            <img src="images/testi/shape.png" alt="" class="img-fluid">
        </div>
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h6 class="mb-0 text-muted fs-15 text-uppercase">Testimonial</h6>
                        <h2>People talk about us</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper-container py-5">
                <div class="swiper-wrapper pt-3">
                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="images/team/img1.png" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="images/team/img2.png" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="images/team/img3.png" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="images/team/img4.png" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="images/team/img5.png" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->
                </div>

                <!-- navigation buttons -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="shape-2">
            <img src="images/testi/shape-2.png" alt="" class="img-fluid">
        </div>

        <div class="shape-3">
            <img src="images/testi/shape-3.png" alt="" class="img-fluid">
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial -->



    <!-- start blog -->
    <section class="section blog" id="blog">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h6 class="mb-0 text-muted fs-15">Blog</h6>
                        <h2>Our Regular News</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="images/blog/img-1.png" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-blue">
                                <i class="mdi mdi-lan fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href="#" ><h5>We makes UI/UX design very easy for you.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="#" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="images/blog/img-2.png" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-secondary">
                                <i class="mdi mdi-responsive fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href="#"><h5>Current world design trends know easily.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="#" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="images/blog/img-3.png" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-primary">
                                <i class="mdi mdi-vector-combine fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href="#"><h5>We calculate clients demand for research.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="#" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->



    <!-- start contact -->
    <section class="contact pt-5 pb-0" id="contact">
        <!-- start container -->
        <div class="container">

            <div class="shape-1">
                <img src="images/testi/shape.png" alt="" class="img-fluid">
            </div>

            <div class="contact-item">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <div class="mb-4">
                                <h3>Let's Connect</h3>
                                <p class="text-muted mb-0">Looking for help? Fill the form and start a new adventure.
                                </p>
                            </div>

                            <hr>

                            <div class="info-content mt-4">
                                <h6>Address :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-home-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">744 New York Ave, Brooklyn, Kings,<br>
                                            New York 10224</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-content mt-4 pt-2">
                                <h6>Phone :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-phone-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">(+642) 245 356 432</p>
                                        <p class="mb-0 fs-15">(+420) 336 476 328</p>
                                    </div>
                                </div>
                            </div>


                            <div class="info-content mt-4 pt-2">
                                <h6>Support :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-email-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">hellosuppot@gmail.com</p>
                                        <p class="mb-0 fs-15">help@.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="custom-form mt-4 ">
                            <form method="post" name="myForm" onsubmit="return validateForm()">

                                <h6 class="mb-0 text-muted">Let's talk</h6>
                                <h3>Enter your project details</h3>
                                <p class=" fs-15 text-muted">Content here, content here', making it look like
                                    readable English. Many desktop publishing packages.</p>
                                <p id="error-msg" style="opacity: 1;">
                                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                </p>


                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control contact-form"
                                                placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email"
                                                class="form-control contact-form" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control contact-form" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                class="form-control contact-form h-auto"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 d-grid">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-2">
                <img src="images/testi/shape-2.png" alt="" class="img-fluid">
            </div>

            <div class="shape-3 ">
                <img src="images/testi/shape-3.png" alt="" class="img-fluid">
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->


    <!-- start footer -->
    <section class=" footer">
        <!-- start container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mt-5">
                        <a class=" logo text-uppercase" href="index.html">
                            <img src="images/logo.png" class="logo-light" alt="" height="32">purbo Roy
                        </a>
                        <p class="fs-15 text-white-50 mt-4">Passionate developer living in Dhaka with over 1.9 years of solid experience dedicated to creating web applications and
                            mobile application. Specializing in Reactjs, React Native and laravel development. Self-motivated, responsible, creative,
                            team-worker, and holds a Bachelor’s degree in Computer Science & Engineering. Looking forward to a promising career
                            in the position of Software Engineer/Developer.</p>

                        <div class="icon-item mt-4">
                            <div class="d-flex">
                                <a href="#">
                                    <div class="social-icon facebook avatar-xs">
                                        <i class="mdi mdi-facebook "></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="social-icon instagram avatar-xs">
                                        <i class="mdi mdi-instagram "></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="social-icon twitter avatar-xs">
                                        <i class="mdi mdi-twitter"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="social-icon linkedin avatar-xs">
                                        <i class="mdi mdi-linkedin"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="social-icon pinterest avatar-xs">
                                        <i class="mdi mdi-pinterest"></i>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- <div class="col-lg-2 mt-4">
                    <h5 class="text-white">Info</h5>

                    <ul class="footer-text list-unstyled mt-4">
                        <li><a href="#"><i class="mdi mdi-arrow-right me-2"></i>Security & Provciy</a></li>
                        <li><a href="#"><i class="mdi mdi-arrow-right me-2"></i>Support</a></li>
                        <li><a href="#"><i class="mdi mdi-arrow-right me-2"></i>Term & Condition</a></li>
                        <li><a href="#"><i class="mdi mdi-arrow-right me-2"></i>Contact</a></li>
                        <li><a href="#"><i class="mdi mdi-arrow-right me-2"></i>About Us</a></li>
                    </ul>

                </div> -->

                <div class="col-lg-3 mt-4">
                    <h5 class="text-white">Linkedin</h5>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="linkedin-box mt-4">
                                <p class="mb-0 text-white-50 fs-15 mb-2">The full monty spiffing good time .</p>
                                <a href="#" class="fs-15">@Harold.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="linkedin-content d-flex align-items-center">
                        <div class="icon">
                            <i class="mdi mdi-linkedin text-white fs-40"></i>
                        </div>
                        <div class="icon-content ms-2">
                            <a href="#" class="text-white-50">Linkedin</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <h5 class="text-white">Sign up</h5>
                    <p class="mb-0 text-white-50 mt-4">Follow our newsletter to stay updated about agency.</p>
                    <div class="input-group my-3">
                        <input type="text" class="form-control p-3" placeholder="subscribe" aria-label="subscribe"
                            aria-describedby="basic-addon2">
                        <a href="#" class="input-group-text bg-primary text-white px-4" id="basic-addon2">Go</a>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted">©
                        <script>document.write(new Date().getFullYear())</script>Developed <i
                            class="mdi mdi-heart text-danger"></i> by <a href="#"
                            class="text-muted">Apurbo Roy.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->

   <!--Bootstrap Js-->
   <script src="js/bootstrap.bundle.min.js"></script>

   <!-- Slider Js -->
   <script src="js/tiny-slider.js"></script>
   <script src="js/swiper.min.js"></script>

   <!-- conter -->
   <script src="js/counter.init.js"></script>

   <!-- App Js -->
   <script src="js/app.js"></script>
   

</body>


<!-- Mirrored from themesdesign.in/harold/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 16:30:58 GMT -->
</html>