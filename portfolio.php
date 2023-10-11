<?php include 'admin/config/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio Prashna | Makeup Artist in Dubai</title>
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
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>
<style type="text/css">
  :root {
    --dark: #373349;
    --gap: 5px;
    --width: 300px;
    --height: var(--width);
  }



  .container_gallery>a {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    overflow: hidden;
  }

  .container_gallery>a::after {
    content: "";
    background: linear-gradient(transparent, black);
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    transform: translateY(100%);
    transition-duration: .75s;
  }

  .container_gallery>a:hover::after {
    transform: translateY(50%);
  }

  .container_gallery>a>* {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition-duration: 1s;
  }

  .container_gallery>a:hover>img {
    transform: scale(1.05);
  }

  .container_gallery {
    display: grid;
    grid-gap: var(--gap);
    grid-template-columns: repeat(auto-fit, minmax(var(--width), 1fr));
    grid-auto-rows: var(--height);
    grid-auto-flow: dense;
  }



  .horizontal {
    grid-column: span 2;
  }

  .vertical {
    grid-row: span 2;
  }

  .big {
    grid-column: span 2;
    grid-row: span 2;
  }

  @media screen and (min-width:300px) and (max-width:600px) {
        :root {
    --dark: #373349;
    --gap: 5px;
    --width: 125px;
    --height: var(--width);
  }

    .container_gallery {
 grid-template-columns:repeat(auto-fit, minmax(var(--width), 1fr))
    }
  }
</style>

<body>

  <?php include 'navbar.php' ?>

  <!--===========================
        Start Breadcrumb
===========================-->
  <section class="breadcrumb_section text-center section_padding" style="background:#e4e4e4 url(assets/images/prashnaallimages/image00001.jpeg) center left no-repeat;background-size:cover">
    <ul class="breadcrumb">
        <li><a href="https://yogueshprashna.com/">Home</a></li>
        <li style="color: #fff;">Portfolio</li>
    </ul>
    <h1 style="color: #fff;">Portfolio</h1>
  </section><!--end .breadcrumb_section-->
  <!--===========================
        End Breadcrumb
===========================-->




  <!--===========================
        Start Client's Logo
===========================-->
  <div class="clients_logo_area text-center section_padding">

    <div class="col-md-12">
      <div class='container_gallery'>
        <?php
        $query = "SELECT * FROM image_gallery order by id desc";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $row) {
        ?>
            <a href="admin/upload/<?php echo $row['image'] ?>" class="<?php if ($row['title'] == 'Horizontal') {
                                                                        echo 'horizontal';
                                                                      } elseif ($row['title'] == 'Vertical') {
                                                                        echo 'vertical';
                                                                      } elseif ($row['title'] == 'Big') {
                                                                        echo 'big';
                                                                      } elseif ($row['title'] == 'Square') {
                                                                        echo '';
                                                                      }
                                                                      ?>" data-lightbox="homePortfolio">
              <img src="admin/upload/<?php echo $row['image'] ?>" />


            </a>

        <?php
          }
        } else {
          echo "<h4>No Records Found.!</h4>";
        }

        ?>


      </div> <!-- col-6 / end -->
    </div>




  </div><!--end .clients_logo_area-->
  <!--===========================
        End Client's Logo
===========================-->

  <!--===========================
        Start Footer
===========================-->
  <?php include 'footer.php'; ?>
  <!--===========================
        End Footer
===========================-->

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/waypoint.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>