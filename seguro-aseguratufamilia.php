<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insure - Insurance HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-3" src="img/icon/seguvim-alterno.png" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.html" class="nav-item nav-link">Inicio</a>
                <a href="nosotros.html" class="nav-item nav-link">Nosotros</a>
                <a href="planesdeseguro.html" class="nav-item nav-link active">Planes de seguros</a>
                <a href="trabajaconosotros.html" class="nav-item nav-link">Trabaja con nosotros</a>
                <a href="contactanos.php" class="nav-item nav-link">Contáctanos</a>
            </div>
        </div>
        <a href="https://wa.me/message/KMAYV74IYQM4H1" class="btn btn-primary px-3 d-none d-lg-block">Cotiza con nosotros</a>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Seguro - Asegura tu familia</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Página</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Asegura tu familia</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <p class="mb-5">Sabemos que un fallecimiento es muy doloroso para los seres queridos, nosotros cuidamos de ellos en esos momentos. Los beneficiarios recibirán una indemnización acorde al plan adquirido, esto permitirá garantizar la protección económica que el asegurado tenia a su cargo o haya designado.</p>
                    <div class="bg-light rounded p-3">
                        <div class="d-flex align-items-center bg-white rounded p-3">
                            <p class="mb-0">•	Muerte por cualquier causa</p>
                        </div>
                    </div>
                    <div class="bg-light rounded p-3">
                        <div class="d-flex align-items-center bg-white rounded p-3">
                            <p class="mb-0">•	Muere Accidental</p>
                        </div>
                    </div>
                    <div class="bg-light rounded p-3">
                        <div class="d-flex align-items-center bg-white rounded p-3">
                            <p class="mb-0">•	Incapacidad total y permanente</p>
                        </div>
                    </div>
                    <div class="bg-light rounded p-3">
                        <div class="d-flex align-items-center bg-white rounded p-3">
                            <p class="mb-0">•	Anticipo por enfermedad terminal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-5">
                    <form>
                            <div class="row g-3">
                                
                                <div class="col-sm-6">
                                    <label for="gname">Nombres</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Gurdian Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="gname">Apellidos</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Gurdian Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="correo">Correo electrónico</label>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="correo">Fecha de Nacimiento</label>
                                    <div class="form-floating">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="dia" min="1" max="31" placeholder="">
                                                    <label for="dia">Día</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="mes" min="1" max="12" placeholder="">
                                                    <label for="dia">Mes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="anio" min="1920" max="2023" placeholder="">
                                                    <label for="dia">Año</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-control" id="select" name="opcion" required>
                                            <option value="">Devolución de Primas</option>
                                            <option value="1">Rendimiento anual del 8.09% promedio</option>
                                            <option value="2">Sin Rendimiento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12" align="center">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Obtener Seguro!</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-3">
                    <img class="img-fluid me-3" src="img/icon/seguvimgrandeblanco.png" alt="">
                </div>
                <div class="col-lg-3 col-md-6" style="margin-top: 8%;">
                    <h5 class="text-light mb-4">Encuentranos</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Avenida NNUU e Iñaquito</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+593 99 279 0807</p>
                    <p><i class="fa fa-envelope me-3"></i>info@seguvim.com</p>
                </div>
                <div class="col-lg-3 col-md-6" style="margin-top: 8%;">
                    <h5 class="text-light mb-4">Accesos</h5>
                    <a class="btn btn-link" href="nosotros.html">Sobre Nosotros</a>
                    <a class="btn btn-link" href="planesdeseguro.html">Planes de Seguro</a>
                    <a class="btn btn-link" href="trabajaconosotros.html">Trabaja con nosotros</a>
                    <a class="btn btn-link" href="contactanos.php">Contáctanos</a>
                </div>
                <div class="col-lg-3 col-md-6" style="margin-top: 8%;">
                    <h5 class="text-light mb-4">Síguenos</h5>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">SEGUVIM</a>, Todos los derechos resevados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Un diseño de <a href="https://rbestudio.net">R&B Estudio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>