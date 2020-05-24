@extends('layouts.base')

@section('contenido')
<main>
    <div class="main-container">
        <section class="main-title-container">
            <h1 class="text-center">
                Graznidos
            </h1>
        </section>
        @foreach ($posts as $item)

            <section class="main-login-container"> <!--Recicled because muh code-->
                <div class="post-comment-container">
                    <article class="post-container">
                        <div class="post-info-container">
                            <div class="post-profile-picture">
                                <a href="profile"><img src="img/profiles/{{$user['imagen']}}" alt="{{$user['name']}}"></a>
                            </div>
                            <div class="post-user-time-container">
                                <p><a href="profile"><strong>{{$user['name']}}</strong></a><br>
                                <em>Publicado: {{ $item['created_at']->format('d/m/Y H:m:s') }}</em></p>
                            </div>
                        </div>
                        <br>
                        <div class="post-title">
                            <h2 class="center-text">
                                {{ $item['descripcion'] }}
                            </h2>
                        </div>
                        @if($item['contenido_p'] != '')
                        <div class="post-img-container center-text">
                            <a href="img/posts/{{$item['contenido_p']}}" target="_blank"><img src="img/posts/{{$item['contenido_p']}}"></a>
                        </div>
                        @endif

                        <div class="statistics center-text">
                            <a class="statistic" href="#">XXX<br>Reacciones</a>
                            <a class="statistic" href="#">XXX<br>Comentarios</a>
                        </div>
                        <!--
                        <div class="text-container">
                            Una descripci&oacute;n de mi posteo! Me extiendo lo suficinente como para ver el ancho del cuadro de texto!
                        </div>
                    -->
                        <div class="actions-container center-text">
                            <a class="action" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><br>Reaccionar!</a>
                            <a class="action" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i><br>Comentar</a>
                        </div>
                        <form class="comment-response" action="posts.php"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                            <div class="comment-response-textarea">
                                <textarea name="comment" maxlength="150" placeholder="Hacer un comentario"></textarea>
                            </div>
                            <div class="center-text">
                                    <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                            </div>
                        </form>
                    </article> <!--post-container-->

                    <br>

                    <!-- <h3>Comentarios</h3> -->
                    @foreach ($item['coms'] as $uncoment)
                        @if ($uncoment['usuario'])
                        <div class="comment-container">
                            <div class="comment-info-container">
                                <div class="post-profile-picture">
                                    <a href="profile">
                                        <img src="img/profiles/{{$uncoment['usuarioimg'] ? $uncoment['usuarioimg']:'' }}" alt="{{$uncoment['usuario']}}">
                                    </a>
                                </div>
                            </div>

                            <div class="user-comment-container">
                                <div class="user-link">
                                    <a href="profile">{{$uncoment['usuario']}}&nbsp;-&nbsp;</a>
                                </div>({{$uncoment['created_at']->format('d/m/Y H:m:s') }})
                                <div class="comment">
                                 <!--    <blockquote>{{ $uncoment['contenido_c'] }}</blockquote>  -->
                                 &nbsp;&nbsp;{{ $uncoment['contenido_c'] }}
                                </div>
<!--                                    <div class="comment-statistics">
                                        <span><strong>XXX</strong> reacciones</span>
                                        <span><strong>XXX</strong> respuestas</span>
                                    </div>
-->                         </div>


<!--                        <div class="actions-container-comment center-text">
                                <a href="#">Reaccionar! <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                <a href="#">Responder <i class="fa fa-comment-o" aria-hidden="true"></i></a>
                            </div>
                        -->
                        </div> <!--comment-container1-->
<!--                         <br>  -->

                        @endif
                    @endforeach

                    <form class="comment-response" action="posts.php"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                        <div class="comment-response-textarea">
                            <textarea name="comment" maxlength="150" placeholder="Hacer un comentario"></textarea>
                        </div>
                        <div class="center-text">
                                <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                        </div>
                    </form>
                </div> <!--post-comment-container-->
            </section> <!-- Main-signup-container -->
        @endforeach

    </div> <!-- Main-container -->
</main>
@endsection
