<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <!--  Logo For Page  -->
    <link href="assets/img/logo.png" rel="icon">
    <!--  CSS Local  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title> Dynamic FPDF </title>
</head>

<body>
    <header>
        <!-- beggin Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand me-2" href="index.php"><img src="assets/img/logo gift.gif" height="50" alt="Logo"/></a>
                <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <!--  <li class="nav-link"> Dynamic FPDF </li> -->
                    </ul>
  
                    <div class="d-flex align-items-center">
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="mailto:alejandrolopez190107@gmail.com" role="button"><i class="fab fa-google fa-2x"></i></a>
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="https://www.linkedin.com/in/daniel-alejandro-l%C3%B3pez-herrera-477548241" target="_blank" role="button"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a data-mdb-ripple-init class="btn btn-dark btn-floating px-3 me-2" href="https://github.com/Alejandro-190107" target="_blank" role="button"><i class="fab fa-github fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->
    </header>

    <!-- beggin container -->
    <div class="container-main my-5">
        <div class="col-lg-8 mx-auto">
            <div class="card mb-4 container-information">

                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/card.png" alt="PDF" class="img-fluid rounded-start img-information"/>
                    </div>
                
                    <div class="col-md-8">                    
                        <div class="card-header">
                            <h5 class="card-title title-information"><i class="fa-solid fa-file-pdf"></i> Dynamic FPDF </h5>
                        </div>   
                        <div class="card-body">
                            <p class="card-text text-information">
                                FPDF is an open source library written in PHP used to generate PDF documents dynamically from web applications or PHP scripts. 
                                FPDF is technically a library or class that provides a set of methods for working with PDF.                            
                            </p>                                                   
                            <button type="button" class="btn btn-information" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal"> View pdf </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title title-modal" id="exampleModalLabel"> PDF on country data. <i class="fa-solid fa-earth-americas"></i></h5>
                                            <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe class="iframe-modal" src="pdf.php"></iframe>                                            
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

    <!-- Footer -->
    <footer class="footer text-center text-lg-start fixed-bottom">
        <div class="text-center p-3">
            <p class="copyright"> <i class="fa-solid fa-copyright"></i> 2024 Copyright: <a class="copyright-link fw-bold" href="https://personal-portfolio-al.netlify.app/" target="_blank"> Alejandro López </a></p>
        </div>
    </footer>
    <!-- Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
     <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <!-- Framework Font Awesome -->
    <script src="https://kit.fontawesome.com/09ca335a75.js" crossorigin="anonymous"></script>

</body>
</html>