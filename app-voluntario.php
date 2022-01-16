<?php
session_start();
if(!isset($_SESSION['nombre'])){
  header('Location:index.html');
}
?>
<!DOCTYPE html>
<html lang="sp">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/help_920.ico" />
    <link
      href="assets/bootstrap-5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylesIngresoAdulto.css" />
    <title>Bienvenid@ Amig@!</title>
  </head>
  <body>
    <header>
      <div class="container container-fluid text-center ">
        <div class="row">
          <div class="col-12 mb-4 mt-2">
            <div class="contenedor align-content-center d-block">
              <h1 class="text-center bg-light w-auto mt-3">Que lindo verte! </h1>
              <h1 class="bg-light p-1 w-auto"><?php  echo $_SESSION['nombre'];   ?></h1>
              <img src="assets/images/app-voluntario.jpg" class=" w-100 " >
               </div>
            </div>
            <div class="col-12">
              <table class='table'>
                <thead>
                  <tr>
                    <!-- <th>Id</th>
                    <th>Dni Voluntario</th> -->
                    <th>Dni Adulto</th>
                    <th>Adulto</th>
                    <th>Mensaje</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                  </tr>
                </thead>
                <tbody id='tbody'>

                </tbody>
              </table>
            </div>
            
                <!-- <div class="col-6 placeholder-wave ">
                  <a href="index.html"class="btn btn-success d-block mb-1 btn-height"> 
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <img src="assets/images/manoVoluntario.png" width="100px" height="100px" style="object-fit: contain;" alt="">
                      <h6>Voluntario</h6> 
                    </div> 
                  </a>
                  <a href="ingreso-ong.html"class="btn btn-primary d-block mt-3  btn-height">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <img src="assets/images/compras400.png" width="100px" height="100px" style="object-fit: contain;" alt="">
                      <h6>Compras</h6>
                    </div>
                  </a >
                </div>
            
            <div class="col-6 placeholder-wave">
                  <a href="ingreso-voluntario.html"class="btn btn-danger d-block  btn-height">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <img src="assets/images/sirena400.png" width="100px" height="100px" style="object-fit: contain;" alt="">
                      <h6 class="text-light">SOS</h6>
                    </div>
                  </a>
                  <a href="ong.html"class="btn btn-warning mt-3 d-block mt-1 btn-height">  
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <img src="assets/images/tramites400.png" width="100px" height="100px" style="object-fit: contain;" alt="">
                      <h6 class="text-light">Tramites</h6>
                    </div>
                  </a>
            </div> -->
          </header>
            </div>
        </div>
      </div>
      <div class="container text-center col-md-4">
        <div class="row">
          <div class="col-12">
                   <a href="backend/cerrarSesion.php"
              class="btn btn-light mt-3 mb-3 border-3 border-dark placeholder-wave  col-4 mt-2">
              Salir
            </a>
          </div>
        </div>
      </div>
    
    <script src="assets/bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/appvoluntario.js"></script>
  </body>
</html>
