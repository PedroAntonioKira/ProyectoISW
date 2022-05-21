<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InicioSesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="valinicioProf.js"></script>
</head>
<body class="bg-dark">
<header class="">
        <nav class="container " >
            <div class="py-1 bg-light border-bottom row align-items-center ">
                <div class="col">
                    <img src="./img/LogoVertical.svg" height="60"></img>
                </div>
                <div class="d-flex flex-wrap justify-content-end col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="ISADMIN.php" class="nav-link link-dark px-2">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        
        <!-- Navbar -->
        <!-- Background image -->
        <div class = " fluid " >
          <div class="bg-image text-center align-middle" >
              <img src="imG/LogoCOMSAFE03.png" alt="" class="m-0" style="height: 300px;">
              <div class="container text-light"><h1><strong>Bienvenido!</strong></h1></div>
              <div class="container text-light"><h4><strong>Inserta tus datos</strong></h4></div>
    
              <div class="container text-light abs-center">
                <form action="php/InSesADMIN.php" name="Inicioses2" method="post">
                    <div class="mb-3 " >
                      <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                      <div class="d-flex align-items-center justify-content-center">
                        <input type="text" required class="form-control " name="correo" aria-describedby="emailHelp" style="width: 40%;">
                      </div>
                      <div id="emailHelp" class="form-text">Utiliza el correo que te ha proporcionado la empresa.</div>
                    </div>
                    <div class="mb-3" >
                      <label for="exampleInputPassword1" style="" class="form-label">Contraseña</label>
                      <div class="d-flex align-items-center justify-content-center">
                        <input type="password" required class="form-control" name="pass" style="width: 40%;" aria-describedby="passhelp">
                      </div>
                      <div id="passHelp" class="form-text">Recuerda escribir bien tu contraseña.</div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
              </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
</body>
</html>