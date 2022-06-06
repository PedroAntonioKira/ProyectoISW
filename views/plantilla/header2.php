<?php session_start();?>
<div class="container pb-2 d-none d-sm-node d-md-block" >
    <div class="py-1  row align-items-center ">
        <div class="col">
            <img src="../../img/LogoVertical.svg" height="59"></img>
        </div>
        <div class="d-flex flex-wrap justify-content-end col">
            <ul class="nav">
                <li class="nav-item">
                    <a href="../../index.php" class="nav-link link-dark px-2 fw-bold">Bienvenido, 
                        <?php 
                            if(session_id() == "usuarioad"){
                              //session_start();
                              echo $_SESSION["Nombre"];
                            }else if(session_id() == "usuariops"){
                              //session_start();
                              echo $_SESSION["Nombre"];
                            }else if(session_id() == "usuarioinq"){
                              //session_start();
                              echo $_SESSION["Nombre"];
                            }
                            ?> 
                    <i class="fas fa-sign-in-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php 
                            if(session_id() == "usuarioad"){
                              //session_start();
                              echo '<nav class="navbar navbar-expand-lg azul ">
                              <div class="container-fluid " >
                                <a class="navbar-brand d-md-none d-sm-block" href="#">
                                  <img src="../../img/LogoCOMSAFE03.png" alt="Logo ComSafe" width="83" height="50">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse d-md-flex justify-content-center" id="navbarNav">
                                  <ul class="navbar-nav sep ">
                                    <li class="nav-item">
                                      <a class="nav-link " aria-current="page" href="../inicioADMIN.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../consultas/Adinquilinos.php">Inquilinos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../consultas/Inmuebles.php">Inmuebles</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/edificios.php">Edificios</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/areaComunC.php">Áreas comúnes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/visitantes.php">Visitas</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/reportes.php">Reportes</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>';
                            }else if(session_id() == "usuariops"){
                              //session_start();

                              echo '<nav class="navbar navbar-expand-lg azul ">
                              <div class="container-fluid " >
                                <a class="navbar-brand d-md-none d-sm-block" href="#">
                                  <img src="../img/LogoCOMSAFE03.png" alt="Logo ComSafe" width="83" height="50">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse d-md-flex justify-content-center" id="navbarNav">
                                  <ul class="navbar-nav sep ">
                                    <li class="nav-item">
                                      <a class="nav-link " aria-current="page" href="../inicioPSeguridad.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../consultas/Adinquilinos.php">Inquilinos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/vehiculos.php">Vehículos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/visitantes.php">Visitas</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/reportes.php">Reportes</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>';
                            }else if(session_id() == "usuarioinq"){
                              //session_start();
                              echo '<nav class="navbar navbar-expand-lg azul ">
                              <div class="container-fluid " >
                                <a class="navbar-brand d-md-none d-sm-block" href="#">
                                  <img src="../../img/LogoCOMSAFE03.png" alt="Logo ComSafe" width="83" height="50">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse d-md-flex justify-content-center" id="navbarNav">
                                  <ul class="navbar-nav sep ">
                                    <li class="nav-item">
                                      <a class="nav-link " aria-current="page" href="../inicioADMIN.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../consultas/Adinquilinos.php">Familiar</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../consultas/Inmuebles.php">Inmuebles</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/areaComunC.php">Reservar Áreas comúnes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/visitantes.php">Visitas</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/reportes.php">Reportes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="../consultas/reportes.php">Vehiculos</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>';
                            }
?> 



