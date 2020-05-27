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

            <h3 class="center-text"><strong>Busca nuevos amigos!</strong></h3>
            <form action="searchFriends">
                <div class="input-group">
                    <input type="text" class="form-control fs-1-5rem" placeholder="Ingresa un nombre aquí">
                    <div class="search-but input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </section>

        <section class="main-index-container"> <!--Acá irían los resultados pero que de principio cargue los amigos que ya tenés-->
        <!--y que tras buscar regargue o limpie, no se, y te muestre una lista de perfiles que coinciden con la búsqueda-->
            <div class="friends-container">
                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="nest"><img src="storage/img/pfp-default.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="nest">Amigo1</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="nest"><img src="storage/img/pfp-default.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="nest">Amigo2</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

                <div class="friends">
                    <div class="friend-profile-picture">
                        <a href="neste"><img src="storage/img/pfp-default.png" alt="NombreDePerfil"></a>
                    </div>
                    <div class="friend-username">
                        <p><a href="nest">Amigo3</a></p>
                        <em>XXX amigos en com&uacute;n</em>
                    </div>
                </div>

            </div>
        </section> <!-- Main-index-container -->

    </div> <!-- Main-container -->

</main>
@endsection
