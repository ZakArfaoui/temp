<html>

<head>
    <title> SahTec </title>

    <!-- Favicons -->
    <link href="assets\img\logo.png" rel="icon">
    <link href="assets\img\logo.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Medicio\assets\vendor\animate.css\animate.min.css" rel="stylesheet">
    <link href="Medicio\assets\vendor\aos\aos.css" rel="stylesheet">
    <link href="Medicio\assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link href="Medicio\assets\vendor\bootstrap-icons\bootstrap-icons.css" rel="stylesheet">
    <link href="assets\vendor\boxicons\css\boxicons.min.css" rel="stylesheet">
    <link href="assets\vendor\fontawesome-free\css\all.min.css" rel="stylesheet">
    <link href="assets\vendor\glightbox\css\glightbox.min.css" rel="stylesheet">
    <link href="assets\vendor\swiper\swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets\css\style.css" rel="stylesheet">

    <!-- =======================================================
* Template Name: Medicio - v4.6.0
* Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="barre">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> BIENVENUE
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> +216 71 325 448
            </div>
        </div>
    </div>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.html" class="logo me-auto"><img src="Medicio\assets\img\logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ======= Header ======= -->

    </header>

    <!-- Bootstrap core CSS -->
    <link href="assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Atelier5\checkout\form-validation.css" rel="stylesheet">
    </head>


    <br><br><br>

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets\img\logo.png" alt="" width="72" height="72">


            <form name="f" action="CRUD-PHP-main\view\ajouterclient.php" id="idForm" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputcode">code</label>
                        <input type="text" name="code" class="form-control" id="inputcode" placeholder="codec">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputnomducorpsmedical">nom du corps medical</label>
                        <input type="text" name="nom_du_corps_medical" class="form-control" id="nomcm" placeholder="nom du corps medical ">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email_professionnel" class="form-control" id="emailc" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Adresse</label>
                    <input type="text" name="Adresse" class="form-control" id="adressec" placeholder="1234 Main St">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="Pays">Pays</label>
                        <select  class="custom-select d-block w-100" id="PaysC" name="pays">
                            <option value="">Choose...</option>

                            <option>Tunisie </option>

                        </select>
                        <div class="invalid-feedback">
                            choisir votre pays .
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="Ville">Ville </label>
                        <select  class="custom-select d-block w-100" id="villeC" name="ville">
                        
                            <option value="">Choose...</option>
                            <option value="TunisC">Tunis </option>
                            <option value="BejaB">Beja </option>
                            <option value="KefK">Kef </option>
                            <option value="jandoubaJ ">Jandouba </option>
                            <option value="MahdiaM ">Mahdia </option>
                            <option value="SouuseS">Sousse </option>
                        </select>
                        <div class="invalid-feedback">
                            inserez une ville .
                        </div>
                    </div>
                   
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>

                
                <p style="color: red;" id="erreurCode"></p>
                <p style="color: red;" id="erreurNom"></p>
                <p style="color: red;" id="erreurPays"></p>
                <p style="color: red;" id="erreurVille"></p>
                <p style="color: red;" id="erreurCodePostale"></p>
                <center>
                <button class="btn btn-primary " type="Envoyer">Continue to checkout</button>
</center>
            </form>


            <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="footer-info">
                                    <h3>SahTec</h3>
                                    <p>
                                        <br> 51 , rue monji slim , Ariana <br><br>
                                        <strong>Phone:71 325 448</strong> <br>
                                        <strong>Email:</strong> SahTec216@gmail.tn<br>
                                    </p>
                                    <div class="social-links mt-3">
                                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About </a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                                </ul>
                            </div>


                            <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">


                                </form>


                            </div>
                        </div>
                    </div>

                    <script src="./controle.js"></script>

</body>

</html>