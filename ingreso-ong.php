<!DOCTYPE html>
<html lang="sp">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/help_920.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link
      href="assets/bootstrap-5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Ingreso ONG</title>
  </head>
  <body>
    <header>
      <div class="container text-center">
        <div class="row">
          <img
          src="assets/images/ong2.jpg"
          alt="ong image"
          class="img-fluid text-center w-auto mt-1 mb-3"
        />
          <div class="col-8 m-auto mb-3 mt-1">
            <h1 class="text-center mt-4 mb-4">Bienvenid@ ONG</h1>

            <div class="col-12 placeholder-wave">
              <a href="index.html" class="btn btn-primary d-block btn-height"
                >Inicio</a
              >
            </div>
            <div class="col-12 placeholder-wave">
                
                <a href="ingreso-adulto.php"
                class="btn btn-success d-block  mt-1 btn-height"
                >Ingreso Adulto Mayor</a>
                <a href="ingreso-voluntario.php"
                class="btn btn-warning d-block  mt-1 btn-height"
                >Ingreso Voluntarios</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-center col-md-4">
        <div class="row">
          <div class="col-12">
            <form id='formOng'>
              <div class="d-flex">
                <input
                  name="user"
                  type="text"
                  class="form-control text-center"
                  placeholder="Ingrese su Personeria Juridica"required/>  
                <i class="bi bi-person fs-1 ps-2"></i>
              </div>
              <div class="d-flex mt-2">
                <input
                name="pass"
                type="password"
                placeholder="Contraseña"
                class="form-control text-center "
                required/>
                <i class="bi bi-key fs-1 ps-2"></i>
              </div>
              <a href="" class="text-center pt-1 mt-3 mb-2 small d-block">Olvidó su contraseña</a>
              <button class="btn placeholder-wave btn-warning  mt-2"> Ingresar </button>
            </form>
          </div>
        </div>
      </div>
    </header>
    <script src="assets/bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
