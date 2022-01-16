<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/help_920.ico" />
    <link href="assets/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Registro Voluntario</title>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 m-auto">
                <img src="assets/images/registro-voluntario.jpg"  alt="reg-image"
                class="img-fluid text-center w-auto mt-2 mb-3"/>
                <h4 class="text-center ">Registro del Voluntario</h4>
                <a href="index.html" class="text-end pt-1 mt-3 mb-2 small d-block" >Volver a inicio</a>
                <form id='form'>
                    <input class="form-control" placeholder="Nombre.. " type="text" name="nombre">
                    <input class="form-control mt-2" placeholder="Apellido.. "type="text" name="apellido">
                    <input class="form-control mt-2" placeholder="Domicilio.. "type="text" name="domicilio">
                    <input class="form-control mt-2" placeholder="Ciudad.. "type="text" name="ciudad">
                    <select class="form-control mt-2" placeholder="Provincia.. " name="provincia">
                        <option value="">Provincia..</option>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Buenos Aires Capital">Buenos Aires Capital</option>
                        <option value="Catamarca">Catamarca</option>
                        <option value="Chaco">Chaco</option>
                        <option value="Chubut">Chubut</option>
                        <option value="Cordoba">Cordoba</option>
                        <option value="Corrientes">Corrientes</option>
                        <option value="Entre Rios">Entre Rios</option>
                        <option value="Formosa">Formosa</option>
                        <option value="Jujuy">Jujuy</option>
                        <option value="La Pampa">La Pampa</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="Misiones">Misiones</option>
                        <option value="Neuquen">Neuquen</option>
                        <option value="Rio Negro">Rio Negro</option>
                        <option value="Salta">Salta</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Luis">San Luis</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santiago del Estero">Santiago del Estero</option>
                        <option value="Tierra del Fuego">Tierra del Fuego</option>
                        <option value="Tucuman">Tucuman</option>
                    </select>
                    <input id='dni' class="form-control mt-2" placeholder="DNI.." type="number" name="dni">
                    <input id='pass' class="form-control mt-2" placeholder="Constraseña.." type="password" name="pass">
                    <button class="btn btn-success mt-2 mb-2 w-100" id='btnEnviar'>Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/registrovoluntario.js"></script>
</body>
</html>