@extends('layouts.base')

@section('contenido')
    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Datos sobre mí
                </h1>
            </section>

            <!-- Datos de la cuenta -->
            <section class="main-profile-container">

                <h2 class="nombre-usuario"> <strong>{{$usuarioActual['name']}}</strong> </h2>
                <div class="pfp-container">
                    <div class="profile-nest center-text">
                        <div class="profile-nest-pfp">
                            <img src="storage/img/profiles/{{$usuarioActual['imagen']}}" alt="Tu foto de perfil"> <br>
                        </div>
                        <br>
                        <div class="user-personal-info">
                            <span class="center-text">
                                <strong> Fecha de nacimiento: </strong> {{$usuarioActual['fecha_nac']}}
                                <br>
                                <strong> Género: </strong> Género
                                <br>
                                <strong> Usuario desde: </strong> {{$usuarioActual['created_at']->format('d/m/Y')}}
                                <br>
                                <a href="friends"><strong>{{$usuarioActual['friendsnro']}} amigos buitres</strong></a>
                                <br>
                                <a href="posts"><strong>{{$usuarioActual['postsCount']}} posts graznados </strong></a>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="user-bio">
                    <h2 class="center-text"><strong>Acerca de mí...</strong></h2>
                    <blockquote>{{$usuarioActual['bio']}}</blockquote>
                </div>
                <br>

                <div class="center-text">
                    <a href="profile"> <button class="btn btn-success fs-1-5rem">Editar Perfil</button></a>
                </div>
                <br>
                <!--Si estás viendo el perfil de otro usuario-->
                <div class="center-text">
                    <a href="profile"> <button class="btn btn-success fs-1-5rem">Agregar amigo (ojo) <a href="addfriend"><i class="fa fa-user-plus" aria-hidden="true"></i></a> </button></a>
                </div>
                <br>
                <!--Si este usuario ya es tu amigo-->
                <div class="center-text">
                    <a href="profile"> <button class="btn btn-warning fs-1-5rem">Eliminar amigo (ojo)<a href="deletefriend"> <i class="fa fa-user-times" aria-hidden="true"></i></a> </button></a>
                </div>
            </section>

            <section class="main-title-container">
                <h1 class="text-center">
                    Mis Posts
                </h1>
            </section>

            @foreach ($posts as $unPost)
            <section class="main-login-container"> <!--Recicled because muh code-->
                <div class="post-comment-container">
                    <article class="post-container">
                        <div class="post-info-container">
                            <div class="post-profile-picture">
                                <a href="profile"><img src="storage/img/profiles/{{$unPost['postImg']}}" alt="{{$unPost['postUser']}}"></a>
                            </div>
                            <div class="post-user-time-container">
                                <p><a href="profile"><strong>{{$unPost['postUser']}}</strong></a><br>
                                <em>Publicado: {{ $unPost['created_at']->format('d/m/Y H:m:s') }}</em></p>
                            </div>
                        </div>
                        <br>
                        <div class="post-title">
                            <h2 class="center-text">
                                <a href="esto-requiere-del-anclaje">{{ $unPost['descripcion'] }}</a>
                            </h2>
                        </div>
                        <div class="actions-container center-text">

                            @foreach($unPost['likes'] as $unLike)
                            <span class="info">
                                <i class="{{$unLike->fa}} reaction" aria-hidden="true"></i>
                                <spam>{{$unLike->cant}}</spam>
                            </span>
                            @endforeach
                            <a class="action reaction" href="#">
                                <i class="fa fa-comment-o reaction" aria-hidden="true"></i><br>{{count($unPost['coms'])}}
                            </a>
                        </div>
                        <br>
                        <div class="center-text" action="deletePost"> <!-- Ojo al piojo-->
                            <a href="profile"> <button class="btn btn-dark fs-1-5rem">Eliminar Graznido <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                        <br>
                        <!--de vuelta, si estás viendo el perfil de otro usuario-->
                        <div class="center-text">
                            <a href="profile"> <button class="btn btn-primary fs-1-5rem">Ver post (ojo)</button></a>
                        </div>
                    </article>
                </div>
            </section>
            @endforeach
        </div> <!-- Main-container -->
    </main>
@endsection
