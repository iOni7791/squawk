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
                    <?php $aaa = ($usuarioActual['imagen']) ? ($usuarioActual['imagen']) : 'pfp-default.png'; ?>
                    <img src="{{asset('storage/img/profiles/'.$usuarioActual['imagen'])}}" alt="Tu foto de perfil"> <br>
                    <b class="fs-1-5rem"><a href="{{asset('nest/'.$usuarioActual['id'])}}">{{$usuarioActual['name']}}</a></b>
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

        <!-- <section class="main-index-container">

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
        </section> -->

        <section class="main-index-container"> <!--Acá irían los resultados pero que de principio cargue los amigos que ya tenés-->
        <!--y que tras buscar regargue o limpie, no se, y te muestre una lista de perfiles que coinciden con la búsqueda-->
            <div class="friends-container">
                @foreach ($usuarioActual['friends'] as $item)
                <div class="friends">
                    <div class="friend-profile">
                        <div class="friend-profile-picture">
                            <a href="{{asset('nest/'.$item['usuario']['id'])}}">  
                                <?php $aaa = ($item['usuario']['imagen']) ? ($item['usuario']['imagen']) : 'pfp-default.png'; ?>

                                <img src="{{asset('storage/img/profiles/'.$aaa)}}" alt="NombreDePerfil">
                            </a>
                        </div>
                        <div class="friend-username">
                            <p>
                                <a href="{{asset('nest/'.$item['usuario']['id'])}}">{{$item['usuario']['name']}}</a>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="friend-info"> 
                        <em>{{$item['friendsno']}} amigos</em><br>
                        <em>{{$item['friendsme']}} amigos en com&uacute;n</em>
                        @unless ($item['soyyo'] or $item['esamigo'])
                        <a href="{{asset('addfriend/'.$item['usuario']['id'])}}"  class="delete-friend">                  
                            <span title="Agregar Amigo" class="btn btn-success fs-1-5rem delete-friend">
                                Agregar Amigo <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>                            
                        @endunless
                        @if(Auth::user()->id == $usuarioActual['id'])
                        <a href="{{asset('delfriend/'.$item['usuario']['id'])}}" class="delete-friend">
                            <span class="btn btn-dark fs-1-5rem delete-friend">
                                Borrar Amigo <i class="fa fa-trash" aria-hidden="true"></i>
                            </span>
                        </a>
                        @endif 
                    </div>
                </div>
                @endforeach
            </div>
        </section> <!-- Main-index-container -->

    </div> <!-- Main-container -->

</main>
@endsection
