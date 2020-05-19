<?php
    session_start();
    $_SESSION["logueado"] = true;
?>

<?php
    function guardarArchivo()
        {
            if($_FILES["upload"]["error"] =! 0)
            {
                                
                $nombre = $_FILES["upload"]["name"];
                $archivo = $_FILES["upload"]["tmp_name"];
                $ext = pathinfo($nombre, PATHINFO_EXTENSION);

                $miArchivo = dirname(__FILE__);
                $miArchivo = $miArchivo . "/img/";
                $miArchivo = $miArchivo . "archivoNuevo" . $ext;

                move_uploaded_file($archivo, $miArchivo);

            }

            else
            {
                var_dump($_FILES);
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head> 

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

    <!--Para subir imágenes con preview (No funciona, tengo que ver qué rompí)-->
    <script src="js/subir-imagen.js"></script>
    <title>SQUAWK! - Nuevo graznido!</title>
</head>

<body>
    
    <?php
        //Agregar acá una funcionalidad similar al footer
        require_once("header.php");
    ?>

    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Nuevo graznido
                </h1>
            </section>
            
            <section class="main-login-container"> <!--Recicled because muh code-->
                
                <form action="newPost.php" method="POST" enctype="multipart/form-data"> 
                    <!-- Campos de login -->
                    <fieldset class="center-text"> 
                        
                        <div class="row py-4">
                            <div class="col-lg-6 mx-auto">

                                <!-- Campo para subir imagen-->
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="upload" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Buscar archivo</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Buscar...</small>
                                        </label>
                                    </div>
                                </div>

                                <!-- Vista previa imagen a subir -->
                                <p class="font-italic text-white text-center">Vista Previa</p>
                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                        </div>
                        <br> <br>
                        <div>
                            <input class="form-control form-control-sm fs-1-5rem" type="text" name="post_title" value="" placeholder="Título" required>
                        </div>

                        <div>
                            <textarea name="post_content" maxlength="150" placeholder="Descripción"></textarea>                            
                        </div>

                    </fieldset> 
                    
                    <!-- post button -->
                    <div class="center-text">
                        <button class="btn btn-primary fs-1-5rem" type="submit"> Postear! </button>
                    </div>

                </form>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->
    </main>

    <?php
        $active = 3;
        require_once("loggedFooter.php");
    ?>
</body>

</html>