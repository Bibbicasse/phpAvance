<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header('Location: http://localhost/phpAvance/portfolio/myresume/index.html');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SALVATORE GIOVINETTI</title>

    <!-- ***********************************************************************************************-->
    <!-- la description indispensable pour les moteurs de recherche et qui s'affiche dans les résultats -->
    <!-- ***********************************************************************************************-->
    <meta name="keywords" content="HTML, CSS, JS, JQuery, Salvatore Giovinetti, Portfolio">
    <meta name="autor" content="Salvatore Giovinetti">
    <meta name="description" content="Salvatore Giovinetti - Site Web Personnel">

    <!-- **********************************************-->
    <!--                 Favicons                      -->
    <!-- **********************************************-->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- **********************************************-->
    <!--               Google Fonts                    -->
    <!-- **********************************************-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <!-- **********************************************-->
    <!--               Vendor CSS Files                -->
    <!-- **********************************************-->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- **********************************************-->
    <!--         Template Stylesheet File              -->
    <!-- **********************************************-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style_modifier.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- **********************************************-->
    <!--           Mobile nav toggle button            -->
    <!-- **********************************************-->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <?php
        require 'inc/nav.inc.php';
        ?>

    </header><!-- End Header -->

    <main id="main">

        <!-- **********************************************-->
        <!--             PARTIE MODIFIER PROFILE            -->
        <!-- **********************************************-->
        <section id="modifier">
            <div class="container rounded-3 bg-white mt-5 mb-5">
                <div class="row m-1 py-2">

                    <!-- **********************************************-->
                    <!--       PARAMETRE ASIDE GAUCHE PROFILE          -->
                    <!-- **********************************************-->
                    <div class=" col-2 border border-success  border-5 rounded-3">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" width="150" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="DepositPhotos.com">
                            <span class="font-weight-bold">Edogaru</span>
                            <span class="text-black-50">edogaru@mail.com.my</span>
                        </div>
                    </div>

                    <!-- **********************************************-->
                    <!--           PARAMETRE PROFILE                   -->
                    <!-- **********************************************-->
                    <div class="mx-auto col-6 border border-danger  border-5 rounded-3 ">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Paramètres Profile</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="Nom" value=""></div>
                                <div class="col-md-6"><label class="labels">Prénom</label><input type="text" class="form-control" value="" placeholder="Prenom"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Téléphone</label><input type="text" class="form-control" placeholder="Ton numéro" value=""></div>
                                <div class="col-md-12"><label class="labels">Adresse</label><input type="text" class="form-control" placeholder="Numero et rue" value=""></div>
                                <div class="col-md-12"><label class="labels">Complément Adresse</label><input type="text" class="form-control" placeholder="Complément adresse" value=""></div>
                                <div class="col-md-12"><label class="labels">Code postal</label><input type="text" class="form-control" placeholder="ex. 75000" value=""></div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="Ton email" value=""></div>
                                <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="Education" value=""></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label class="labels">Âge</label>
                                    <input type="number" class="form-control" placeholder="Age" value="">
                                </div>
                                <div class="col-6">
                                    <label class="labels col-12">Disponibilité</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- **********************************************-->
                    <!--   PARAMETRE PROFESSIONNEL + SOCIAL -->
                    <!-- **********************************************-->
                    <div class="mx-auo col-3 pt-5 border border-info  border-5 rounded-3">
                        <div class="p-3 pt-5 py-0 ">
                            <div class="d-flex justify-content-between align-items-center experience"><span> Professionnel</span>
                                <!-- <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span> -->
                            </div>
                            <div class="col-md-12"><label class="labels">Métier</label><input type="text" class="form-control" placeholder="Metier" value=""></div> <br>
                            <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
                        </div>
                        <div class="p-3 py-0">
                            <div class="d-flex justify-content-between align-items-center experience"><span> Social</span>
                                <!-- <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span> -->
                            </div>
                            <div class="col-md-12"><label class="labels">Twitter</label><input type="text" class="form-control" placeholder="Lien" value=""></div>
                            <div class="col-md-12"><label class="labels">Facebook</label><input type="text" class="form-control" placeholder="Lien" value=""></div>
                            <div class="col-md-12"><label class="labels">instagram</label><input type="text" class="form-control" placeholder="Lien" value=""></div>
                            <div class="col-md-12"><label class="labels">Github</label><input type="text" class="form-control" placeholder="Lien" value=""></div>
                            <div class="col-md-12"><label class="labels">Linkedin</label><input type="text" class="form-control" placeholder="Lien" value=""></div>

                        </div>

                    </div>
                </div> <!-- fin row profile -->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE COMPETENCES               -->
                    <!-- **********************************************-->
                    <div class="col-12 mx-auto border border-warning  border-5 rounded-3 py-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="">Compétences</h4>
                            </div>
                            <div class="row mt-2 mx-auto col-12">
                                <div class=" col-9">
                                    <label class="labels">Compétence 1</label>
                                    <input type="text" id="skills" name="Skills" class="form-control">
                                </div>
                                <div class=" col-1 mx-0">
                                    <label class="labels">Couleur</label>
                                    <input type="color" id="colorSkills" name="colorSkills" class="form-control">
                                </div>
                                <div id="squarePlus" class="col-2">
                                    <label class="labels">Compétence +</label><br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fin compétence -->
                    <div class="col-12 mx-auto border border-secondary  border-5 rounded-3 mt-2">
                        <div class="p-3">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Pied de page / Footer</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 mx-auto">
                                    <label class="labels col-12">Accroche</label>
                                    <textarea name="accoche" id="accoche" cols="145" rows="5"></textarea>
                                </div>

                            </div>


                        </div>
                    </div> <!-- fin footer -->
                </div><!-- fin row compétence et footer-->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE PORTFOLIO               -->
                    <!-- **********************************************-->
                    <div class="col-12 mx-auto border border-info  border-5 rounded-3 py-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="">Portfolio</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Description</label>
                                    <input type="text" class="form-control" placeholder="Description" value="">
                                </div>
                                <form class="col-md-6">
                                    <label class="labels">Fichiers</label>
                                    <div class="form-group">
                                        <label for="files">Filter 1</label>
                                        <input type="file" name="files" class="form-control-file" id="files" multiple>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- fin portfolio -->
                   
                </div><!-- fin ROW PORTFOLIO-->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE CV               -->
                    <!-- **********************************************-->
                    <div class="col-12 mx-auto border border-success  border-5 rounded-3 py-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="">Curiculum Vitae</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Description</label>
                                    <input type="text" class="form-control" placeholder="Description" value="">
                                </div>
                                <form class="col-md-6">
                                    <label class="labels">Fichiers</label>
                                    <div class="form-group">
                                        <label for="files">Filter 1</label>
                                        <input type="file" name="files" class="form-control-file" id="files" multiple>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- fin portfolio -->
                   
                </div><!-- fin ROW PORTFOLIO-->
                
                <div class="row p-2">
                        <!-- **********************************************-->
                        <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                        <!-- **********************************************-->
                        <div class="my-5 text-center">
                            <input class="btn btn-outline-success" type="submit" value="Mettre à jour">
                            <input class="btn btn-outline-danger" type="reset" value="Reset">
                        </div><!-- fin boutons -->
                </div><!-- Fin row bouton -->
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Salvatore Giovinetti</h3>
            <p>N'hésite pas à me rejoindre sur mes réseaux</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="github"><i class="bi bi-github"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="copyright">
                Thème Vitrine : &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
                <br>
                Thème Dashboard : &copy; Copyright <strong><span>Edgar Burongoh</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                <br>
                Designed by <a href="https://bbbootstrap.com/">BBbootstrap</a>
            </div>
        </div>
    </footer><!-- End Footer -->




    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>