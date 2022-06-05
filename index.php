<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComSafe</title>

    <!-- Librerias Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>

<body>
    
    <header class="site-header inicio">
        <div class="contenedor">
            <div class="py-1 row align-items-center ">
                <div class="col contenedorLogo">
                    <a href="/"><img src="./img/LogoVertical.svg" height="80"></img></a>
                </div>
                <div class="d-flex flex-wrap justify-content-end col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="views/login.php" class="nav-link link-dark px-2 fs-2">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <main class="cuerpoPrincipalPagina " id="cuerpoPrincipalPagina" s>
        <section class="contenedor seccion p-5">
            <h2 class="fw-bold text-center pt-3">Sistema integral de gestión</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-md-6 align-self-center">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempus facilisis enim, in mollis lorem molestie non. Quisque ac arcu vitae sem cursus elementum. Proin mollis nulla metus, vel pretium sapien interdum id.</p>
                    </div>
                </div>
            </div>
            <div class="d-md-flex justify-content-md-between p-4">
                <div class="icono">
                    <img src="img/icono1.svg" alt="Icono Seguridad">
                    <h4 >Seguridad</h4>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
                </div>

                <div class="icono">
                    <img src="img/icono2.svg" alt="Icono Mejor Precio">
                    <h4>El Mejor Precio</h4>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
                </div>

                <div class="icono">
                    <img src="img/icono3.svg" alt="Icono a Tiempo">
                    <h4>A Tiempo</h4>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
                </div>
            </div>
        </section>
    </main> 

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom fw-bold">Funcionalidad</h2>
        <div class="row g-4 p-5 justify-content-center">
            <div class="col-md-6 d-flex align-items-start ">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-5 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-inboxes-fill" viewBox="0 0 16 16">
                        <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
                    </svg>
                </div>
                <div class="p-2">
                    <h4>Administración de entradas y sálidas</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-5 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                        <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                        <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                    </svg>
                </div>
                <div class="p-2">
                    <h4>Control de áreas comúnes</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>  
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-5 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                </div>
                <div class="p-2">
                    <h4>Disponibilidad de viviendas</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-5 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </div>
                <div class="p-2">
                    <h4>Comunicación vecinal</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-s">
        <div class="slider-contenedor ">
            <div class="slider-test ">
                <div class="testimonial">
                <blockquote >
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                    <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                    </svg>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repudiandae nulla ad iure excepturi a rem! Blanditiis deserunt iste possimus harum sapiente, magnam placeat veniam qui eum libero vel, pariatur quaerat temporibus, doloribus totam cupiditate voluptates ipsum consequatur dicta. Obcaecati!
                </blockquote>
                </div>
                <img src="img/t1.png" alt="persona">
                <h5>Luis Villegas</h5>
            </div>
            <div class="slider-test">
                <div class="testimonial">
                    <blockquote>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                        </svg>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repudiandae nulla ad iure excepturi a rem! Blanditiis deserunt iste possimus harum sapiente, magnam placeat veniam qui eum libero vel, pariatur quaerat temporibus, doloribus totam cupiditate voluptates ipsum consequatur dicta. Obcaecati!
                    </blockquote>
                </div>
                <img src="img/t2.svg" alt="persona">
                <h5>Karla Padilla</h5>
            </div>
            <div class="slider-test">
                <div class="testimonial">
                    <blockquote>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                        </svg>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repudiandae nulla ad iure excepturi a rem! Blanditiis deserunt iste possimus harum sapiente, magnam placeat veniam qui eum libero vel, pariatur quaerat temporibus, doloribus totam cupiditate voluptates ipsum consequatur dicta. Obcaecati!
                    </blockquote>
                </div>
                <img src="img/t3.png" alt="persona">
                <h5>Fernanda Cruz</h5>
            </div>
        </div>
    </div>
  
    <footer>
        <!-- Copyright -->
        <div class="text-center p-3 fw-bold">
            © 2022 ComSafe. 
        </div>
        <!-- Copyright -->
    </footer>
    
</body>

<!-- Librerias Bootstrap -->
<script src="lib/bootstrap/js/bootstrap.min.js" ></script>

<!-- Funciones Propias JS -->
<script src="js/slider-testimonial.js">  </script>
</html>