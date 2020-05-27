@extends('layouts.base')

@section('contenido')
<main>
    <div class="main-container">

        <section class="profile-banner-container">
            <div class="profile-banner-info">
                <div class="banner user-posts">
                    <b class="fs-1-5rem"><h1>{{$usuarioActual['posts']}}</h1> posts <br> graznados </b>
                </div>
                <div class="banner profile-banner-picture">
                    <img src="storage/img/profiles/{{$usuarioActual['imagen']}}" alt="Tu foto de perfil"> <br>
                    <b class="fs-1-5rem"><a href="nest">{{$usuarioActual['name']}}</a></b>
                </div>
                <div class="banner user-reactions">
                    <b class="fs-1-5rem"><h1>{{$usuarioActual['friendsnro']}}</h1>amigos <br> buitres</b>
                </div>
            </div>
        </section>

        <section class="main-title-container">
            <h1 class="text-center">
                Amigos!
            </h1>
        </section>

        <section class="main-index-container">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar amigos...">
                <div class="search-but input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="main-index-container"> <!--Recicled because muh code-->

            <div class="friends-container">
                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="profile.php">Amigo1</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="profile.php">Amigo2</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="profile.php">Amigo3</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

            </div>
        </section> <!-- Main-index-container -->

    </div> <!-- Main-container -->

</main>
@endsection
