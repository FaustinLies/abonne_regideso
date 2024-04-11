<?php
session_start();
require('controllers/users/login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Regideso</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href=" views/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" views/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href=" views/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">



    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="custom_heading-container ">
                    <h2>
                        Se connecter
                    </h2>
                </div>
            </div>
        </div>
        <div class="container layout_padding2">
            <div class="row">
                <div class="col-md-5">
                    <div class="form_contaier">
                        <form class="form-login" method="POST">
                        <?php
                            if (isset($message)) {
                                foreach ($message as $message) {
                                    echo '
                                <div class="text-success text-center">
                                    <span>' . $message . '</span>
                                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                                </div>
                                ';
                                }
                            }
                            ?>
                            <div class="form-group">
                            <label for="exampleInputName1" class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" id="yourName">
                            </div>

                            <div class="form-group">

                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="mdp" class="form-control" id="yourPassword" >
                            </div>

                            <p>don't have an account? <a href="views/users/userAbonne.php">Enregistrez-vous</a></p>

                            <button type="submit" name="valider" class="">Send</button>

                        </form>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="detail-box">


                       <h4>La Régie de Distribution d’Eau de la République Démocratique du Congo, « REGIDESO S.A. »</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h4>
                            Contact
                        </h4>
                        <div class="box">
                            <div class="img-box">
                                <img src="wiews/images/telephone-symbol-button.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    +01 123567894
                                </h6>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-box">
                                <img src="wiews/images/email.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    demo@gmail
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_menu">
                        <h4>
                            Menu
                        </h4>
                        <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php"> Espace Abonnés </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#apropos"> A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact"> Contactez-nous </a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info_news">
                        <h4>
                            newsletter
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Enter Your email">
                            <div class="d-flex justify-content-center justify-content-md-end mt-3">
                                <button>
                  Subscribe
                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">

    </section>
                <!-- footer section -->


                    <!-- Template Main JS File -->

                     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>

    <script >
        //  $(document).ready(function() {
        //     $(document).on("submit", ".form-login", function(e) {
        //         e.preventDefault();

        //         var username = $("#yourName").val();
        //         var password = $("#yourPassword").val();

        //         $.ajax({
        //             url: "controllers/users/login.php",
        //             method: "POST",
        //             data: {
        //                 nom: username,
        //                 mdp: password

        //             },

        //             success: function(data) {
        //                  alert('Vous êtes Client(abonné!');


        //             }
        //         })
        //     })

        // });
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [],
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });

        $(".owl-2").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [],
            autoplay: true,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>


</body>

</html>
