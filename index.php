<?php include 'admin/config/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prashna | Makeup Artist in Dubai</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,600i,700" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png">
    <!--stylesheet-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/newcssresponsive.css">
</head>


<body>

    <?php include 'navbar.php' ?>

    <!--===========================
        Start Header Slider
===========================-->

    <section class="header_slider_area owl-carousel">
        <?php
        $query = "SELECT * FROM slider";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?>
                <div class="header_slider_bg" style="background:url(admin/upload/slider/<?= $row['image'] ?>)center center no-repeat;background-size:cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                                <h1 style="margin-bottom: 0;color:white;">MAKEUP ARTISTRY</h1>
                                <p style="color:white;">By Yoguesh Prashna</p>
                                <!-- <div class="slide_button">
                            <a href="#" class="btn-yellow">GET A FREE QUOTE</a>
                        </div>end .slide_button -->
                            </div><!--end .col-md-6-->

                        </div><!--end .row-->
                    </div><!--end .container-->
                </div><!--end .header_slider_bg-->
        <?php
            }
        } else {
            echo "<h4>No Records Found.!</h4>";
        }
        ?>
    </section><!--end .header_slider_area-->

    <!--===========================
        End Header Slider
===========================-->
    <section class="about_service_area section_padding" style="background: #c79687;">
        <div class="container" style="margin-right:0px;">
            <div class="row">

                <div class="col-md-6">
                    <div class="about_details" ><!-- style="padding: 80px 40px;"-->
                        <div class="hero-title-with-shape">
                            <h4 style="color: white;font-weight: bold;" class="heading_with_border">Welcome to Prashna</h4>
                            <h1 style="color: white;">Yoguesh Prashna | Makeup Artist in Dubai</h1>
                        </div><!--end .hero-title-with-shape-->
                        <p>I am a freelancer Creative Makeup artist from Madagascar, based in Dubai.  </p>
                        <p>Certified by one of the leading makeup schools in the world, AOFM, i got experience backstage as a professional makeup artist in Dubai and Melbourne’s leading fashion shows, including Arab Fashion Week, Middle East Fashion and Melbourne Fashion Week.</p>
                        <p>I have worked with professional models,  photographers and artists across the globe, carrying their expertise, techniques and culture throughout my journey of makeup artistry.</p>
                        <p>I travel across the Middle East and globally upon request.</p>
                        <a href="about" class="btn-yellow">LEARN MORE</a>
                    </div><!--end .about_details-->
                </div><!--end .col-md-6-->
                <div class="col-md-6">
                    <div class="about_service_left">
                    </div><!--end .about_service_right_left-->
                </div><!--end .col-md-6end .col-md-6-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section>



    <!--===========================
        Start About
===========================-->
    <section class="about_area section_padding" style="padding: 0;margin-top: -11px;">
        <div class="row">

            <div class="col-md-6">
                <div class="about_image about-image__updated"></div>
            </div><!--end .col-md-6-->
            <div class="col-md-6">
                <div class="about_service_right" style="padding: 50px;">
                    <div class="hero-title-with-shape">
                        <h4 class="heading_with_border">Services offered by Prashna</h4>
                        <!-- <h1>Certified by AOFM (leading makeup school) in the world</h1> -->
                    </div>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> Face and Body Painting</li>
                        <li><i class="fa fa-check-circle"></i> Creative Makeup</li>
                        <li><i class="fa fa-check-circle"></i> Event Makeup </li>
                        <li><i class="fa fa-check-circle"></i> Bridal Makeup </li>
                        <li><i class="fa fa-check-circle"></i> Editorial Makeup</li>
                        <li><i class="fa fa-check-circle"></i> Airbrush Makeup </li>
                        <li><i class="fa fa-check-circle"></i> Special FX, Bald Caps, Beards, Wigs, Characters, etc </li>
                        <li><i class="fa fa-check-circle"></i> Media Makeup for Film/TV/Commercial/Photography </li>
                        <li><i class="fa fa-check-circle"></i> One on One Makeup Lessons</li>
                        <li><i class="fa fa-check-circle"></i> Private Makeup Tutoring </li>
                        <li><i class="fa fa-check-circle"></i> Makeup Masterclasses </li>
                    </ul>
                    <!-- <div class="about_service_discount text-center">
                        <h1>10% off</h1>
                        <p>on our all services for senior citizens.</p>
                    </div>end .about_service_discount -->
                </div><!--end .about_service_right-->
            </div><!--end .col-md-6-->

        </div><!--end .row-->
    </section><!--end .about_area-->
    <!--===========================
        End About
===========================-->

    <!--===========================
        Start Service
===========================-->
    <section class="service_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-section-title text-center">
                        <h1>Services</h1>
                    </div><!--end .hero-section-title-->
                </div><!--end .col-md-12-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/prashnaallimages/image00016.jpeg" alt="service 1">
                            <!-- <div class="icon-box">
                                <i class="icon-snow"></i>
                            </div>/.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Bridal Makeup</h2>
                            </a>
                            <!-- <p>
                                There are many variations passages of lorem ipsum available but the majority have
                                suffered alteration.
                            </p> -->
                            <!-- <a href="service-details.html" class="btn-yellow">LEARN MORE</a> -->
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/prashnaallimages/image00027.jpeg" alt="service 2">
                            <!-- <div class="icon-box">
                                <i class="icon-fire"></i>
                            </div>/.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Editorial Makeup</h2>
                            </a>
                            <!-- <p>
                                There are many variations passages of lorem ipsum available but the majority have
                                suffered alteration.
                            </p> -->
                            <!-- <a href="service-details.html" class="btn-yellow">LEARN MORE</a> -->
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/prashnaallimages/image00017.jpeg" alt="service 3">
                            <!-- <div class="icon-box">
                                <i class="icon-ac"></i>
                            </div>/.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Creative Makeup</h2>
                            </a>
                            <!-- <p>
                                There are many variations passages of lorem ipsum available but the majority have
                                suffered alteration.
                            </p> -->
                            <!-- <a href="service-details.html" class="btn-yellow">LEARN MORE</a> -->
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .service_area-->
    <!--===========================
        End Service
===========================-->

    <!--===========================
        Start CTA
===========================-->

    <!--===========================
        end CTA
===========================-->





    <?php include 'homeport.php' ?>



















    <!--===========================
        Start Contact Form
===========================-->
    <section class="contact_form_area">
        <div class="contact_form_width">
            <div class="about_imageeed about-image__updated"></div>
            <div id="map" style="display: none;"></div>
        </div><!--end .contact_form_width-->
        <div class="contact_form_width contact-right">
            <div class="hero-title-with-shape">
                <h4 class="heading_with_border">Get a free quote</h4>
                <h1>To request a service call, please fill out the form below</h1>
            </div><!--end .hero-title-width-shape-->
            <form id="myForm">
                <input type="text" name="name" id="name" placeholder="Your name">
                <input type="email" name="email" id="email" placeholder="Email address">
                <input type="number" name="tel" id="tel" placeholder="Phone number">
                <textarea style="width: 100%;padding: 17px 20px;margin-bottom: 10px;border: 0;resize: none;" name="content" id="content" cols="20" rows="5" placeholder="Write message"></textarea>
                <button style="display: block;margin: auto;"  id="send" class="btn-yellow" value="SUBMIT NOW">SUBMIT NOW</button>
            </form>
            <p role="alert"></p>
        </div><!--end .contact_form_width-->
    </section><!--end .contact_form_area-->
    
    <script type="text/javascript">
        $("#send").click(function() {
            $('#myForm').validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true

                    },
                    email: {
                        required: true,
                        email: true
                    },
                    tel: {
                        required: true,
                        maxlength: 10,
                        minlength: 10,
                        digits: true
                    },
                      content:{
                        required:true,
                    },
                },
                submitHandler: function(form) { // for demo
                    sendEmail($("#name").val(), $("#email").val(), $("#tel").val(),$("#content").val(),"#send", "#myForm"); // for demo
                    return false; // for demo
                }

            });
        });


        function sendEmail(name, email, tel, content) {
            $.ajax({
                url: 'mail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name,
                    email: email,
                    tel: tel,
                    // subject: subject,
                     content: content,
                },
                success: function(data) {
                    if (data == '1') {
                        swal("Thanks for being awesome!", "We will get back to you shortly.", "success");
                    } else {
                        swal("Oops", "Something Went Wrong.", "error");
                    }
                    $('#myForm')[0].reset();
                },
            });
        }
  </script>
    <!--===========================
        End Contact Form
===========================-->

    <!--===========================
        Start Footer
===========================-->
    <?php include 'footer.php' ?>
    <!--===========================
        End Footer
===========================-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/custom-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Agsvf36du-7l_mp8iu1a-rXoKcWfs2I"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>