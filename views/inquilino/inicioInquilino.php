<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComSafe</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleUser.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


</head>
<body>
    
    <header class="">
        <?php 
            include_once "../plantilla/header2.php";
        ?>
    </header>
    
    <main>
        <section class="py-0 py-xl-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Counter item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                            <span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">10</h5>
                                    <span class="mb-0 h5">K</span>
                                </div>
                                <p class="mb-0">Online Courses</p>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
                            <span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200" data-purecounter-duration="0">200</h5>
                                    <span class="mb-0 h5">+</span>
                                </div>
                                <p class="mb-0">Expert Tutors</p>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
                            <span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60" data-purecounter-delay="200" data-purecounter-duration="0">60</h5>
                                    <span class="mb-0 h5">K+</span>
                                </div>
                                <p class="mb-0">Online Students</p>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
                            <span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300" data-purecounter-duration="0">6</h5>
                                    <span class="mb-0 h5">K+</span>
                                </div>
                                <p class="mb-0">Certified Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <footer>
    <!-- Copyright -->
        <div class="text-center p-3 fw-bold">
            © 2022 ComSafe. 
        </div>
    <!-- Copyright -->
    </footer>
</body>

<!-- Librerias Bootstrap -->
<script src="../../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>