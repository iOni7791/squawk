@extends('layouts.base')

@section('contenido')
    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Editar Perfil
                </h1>
            </section>
            
            <!-- Datos de la cuenta -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <legend class="center-text">
                        Datos de la cuenta
                    </legend> <br>
                    
                    <div class="pfp-container center-text">
                        <div class="profile">
                            <label for="img">
                                Foto de perfil
                            </label> <br>                          
                            <img src="../img/perfil-prueba.png" alt="Tu foto de perfil"> <br>
                            <label for="img">
                                Subir una imagen
                            </label> <br>
                            <label class="btn btn-primary fs-1-5rem">
                                Buscar <input type="file" id="img" name="img" accept="image/*" style="display: none;">
                            </label>
                        </div>

                        <div class="profile">
                            <label for="user_name">
                                Nombre de usuario
                            </label> <br>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="user_name" value="" placeholder="Tu nombre de Usuario">
                            </div> <br>

                            <label for="webpage">
                                Página web
                            </label> <br>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="user_name" value="" placeholder="www.tuPágina.com">
                            </div>
                        </div>
                    </div> <br>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div>
                </form>
            </section> <br> 

            <section class="main-profile-container">
                <form action="profile.php" method="POST">
                    <!-- Datos personales -->
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Datos Personales</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="first_name" value="" placeholder="Tu nombre" required>
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="last_name" value="" placeholder="Tu apellido (opcional)">
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="email" name="reg_email" value="" placeholder="Email" required>
                            </div>
                            
                            <div>
                                <textarea name="bio" maxlength="150" placeholder="Una pequeña descripción sobre tí..."></textarea>                            
                            </div>
                    </fieldset> <br>

                    <!--Datepicker, cuando encuentre algo mejor lo cambio-->
                    <fieldset>
                        <legend class="center-text fs-1-5rem">Fecha de nacimiento</legend>
                        <input class="form-control form-control-sm fs-1-5rem" type="date" name="fecha_nac" step="1" max="2002-12-31">
                    </fieldset> 
                    <br>

                    <!-- Genero -->
                    <fieldset> 
                        <legend class="center-text fs-1-5rem">Seleccione g&eacute;nero</legend>
                        <div class="radios center-text">
                            <span> 
                                <label for="m"> Masculino</label> <br> 
                                <input type="radio" id="m" name="genero" value="m"> 
                            </span>
                            <span> 
                                <label for="o">Personalizado</label><br> 
                                <input type="radio" id="o" name="genero" value="o"> 
                                <!-- Habría que poner acá un pequeño campo para ingresar el genero con un Script acá para que aparezca al seleccionar esta opción -->
                            </span>
                            <span> 
                                <label for="f">Femenino</label><br>
                                <input type="radio" id="f" name="genero" value="f"> 
                            </span>
                        </div>  
                    </fieldset> 
                    <br>
                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div> 
                </form>
            </section>

            <!-- Contraseña -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST">
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Cambiar contraseña</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="prev_passwd" placeholder="Contraseña actual" required>
                            </div>
                                                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwd" placeholder="Contraseña nueva" required>
                            </div>
                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwdC" placeholder="Confirmar contraseña nueva" required>
                            </div>
                        </div>
                    </fieldset>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Cambiar contraseña</button>
                    </div>
    
                </form>
            </section> <!-- Main-profile-container -->
        </div> <!-- Main-container -->
    </main>
@endsection