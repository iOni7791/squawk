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
                            <?php $aaa = ($usuarioActual['imagen'] ) ? ($usuarioActual['imagen']) : 'pfp-default.png'; ?>
                            <img src="{{asset('storage/img/profiles/'.$aaa)}}" alt="Tu foto de perfil"> <br>
                        </div>
                        <br>
                        <div class="user-personal-info">
                            <span class="center-text">
                                <strong> Fecha de nacimiento: </strong> {{ substr($usuarioActual['fecha_nac'],8,2)."/".substr($usuarioActual['fecha_nac'],5,2)."/".substr($usuarioActual['fecha_nac'],0,4) }}
                                <br>
                                <strong> Género: </strong> Género
                                <br>
                                <strong> Usuario desde: </strong> {{$usuarioActual['created_at']->format('d/m/Y')}}
                                <br>
                                <a href="{{asset('friends/'.$usuarioActual['id'])}}"><strong>{{$usuarioActual['friendsnro']}} amigos buitres</strong></a>
                                <br>
                                <strong>{{$usuarioActual['postsCount']}} posts graznados </strong>
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
                @if($esuser)
                <div class="center-text">
                    <a href="{{asset('profile')}}"> <button class="btn btn-success fs-1-5rem">Editar Perfil <i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                </div>
                <br>
                <!--Si estás viendo el perfil de otro usuario-->
                <div class="center-text">
                    <a href="addfriend"> <button class="btn btn-success fs-1-5rem">Agregar amigo <i class="fa fa-user-plus" aria-hidden="true"></i></button></a>
                </div>
                <br>
                <!--Si este usuario ya es tu amigo-->
                <div class="center-text">
                    <a href="deletefriend"> <button class="btn btn-warning fs-1-5rem">Eliminar amigo <i class="fa fa-user-times" aria-hidden="true"></i></button></a>
                </div>
                @endif
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
                                <?php $aaa = ($unPost['postImg'] ) ? ($unPost['postImg']) : 'pfp-default.png'; ?>
                                <img src="{{asset('storage/img/profiles/'.$aaa)}}" alt="{{$unPost['postUser']}}">
                            </div>
                            <div class="post-user-time-container">
                                <p><strong>{{$unPost['postUser']}}</strong><br>
                                <em>Publicado: {{ $unPost['created_at']->format('d/m/Y H:m:s') }}</em></p>
                            </div>
                        </div>
                        <br>
                        <div class="post-title">
                            <h2 class="center-text">
                                <a href="{{asset('unpost/'.$unPost['id'])}}">
                                    {{ $unPost['descripcion'] }}
                                </a>
                            </h2>
                            </div>
                        <div class="actions-container center-text">

                            @foreach($unPost['likes'] as $unLike)
                            <span class="info">
                                <i class="{{$unLike->fa}} reaction" aria-hidden="true"></i>
                                <spam>{{$unLike->cant}}</spam>
                            </span>
                            @endforeach
                            <a class="action" href="{{asset('unpost/'.$unPost['id'])}}">
                                <i class="fa fa-comment-o reaction" aria-hidden="true"></i>{{count($unPost['coms'])}}
                            </a>
                        </div>
                        @if($esuser)
                        <br>
                        <div class="center-text" action="deletePost"> <!-- Ojo al piojo-->
                            <a href="{{asset('deletePost/'.$unPost['id'])}}"> <button class="btn btn-dark fs-1-5rem">Eliminar Post <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                        @endif
                        <br>
                        <!--de vuelta, si estás viendo el perfil de otro usuario-->
                        <div class="center-text">
                            <a href="{{asset('unpost/'.$unPost['id'])}}"> <button class="btn btn-primary fs-1-5rem">Ver Post <i class="fa fa-eye" aria-hidden="true"></i></button></a>
                        </div>
                    </article>
                </div>
            </section>
            @endforeach
        </div> <!-- Main-container -->
    </main>
@endsection
