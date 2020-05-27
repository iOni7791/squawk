@extends('layouts.base')

@section('contenido')
<main>
    <div class="main-container">
        <section class="main-title-container">
            <h1 class="text-center">
                Graznido
            </h1>
        </section>

        <section class="main-login-container"> <!--Recicled because muh code-->
            <div class="post-comment-container">
                <article class="post-container">
                    <div class="post-info-container">
                        <div class="post-profile-picture">
                            <a href="profile"><img src="../storage/img/profiles/{{$unPost['postImg']}}" alt="{{$unPost['postUser']}}"></a>
                        </div>
                        <div class="post-user-time-container">
                            <p><a href="profile"><strong>{{$unPost['postUser']}}</strong></a><br>
                            <em>Publicado: {{ $unPost['created_at']->format('d/m/Y H:m:s') }}</em></p>
                        </div>
                    </div>
                    <br>
                    <div class="post-title">
                    <h2 class="center-text">
                            {{ $unPost['descripcion'] }}
                    </h2>
                    </div>
                    @if($unPost['contenido_p'] != '')
                    <div class="post-img-container center-text">
                        <a href="../storage/img/posts/{{$unPost['contenido_p']}}" target="_blank"><img src="../storage/img/posts/{{$unPost['contenido_p']}}"></a>
                    </div>
                    @endif

                    <!--
                    <div class="statistics center-text">
                        <a class="statistic" href="#">XXX<br>Reacciones</a>
                        <a class="statistic" href="#">XXX<br>Comentarios</a>
                    </div>

                    <div class="text-container">
                        Una descripci&oacute;n de mi posteo! Me extiendo lo suficinente como para ver el ancho del cuadro de texto!
                    </div>
                    -->
                    <div class="actions-container center-text">

                        @foreach($unPost['likes'] as $unLike)
                                <a class="action" href="{{ route('addlike',['postid'=>$unPost['id'], 'likeid'=>$unLike->id]) }}">
                                <i class="{{$unLike->fa}} reaction" aria-hidden="true"></i>
                                <spam>{{$unLike->cant}}</spam>
                            </a>
                        @endforeach
                            <a class="action" href="#"><i class="fa fa-comment-o reaction" aria-hidden="true"></i>{{count($unPost['coms'])}}</a>
                    </div>
                    <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                    <!--
                    <form class="comment-response" action="posts.php">
                        <div class="comment-response-textarea">
                            <textarea name="comment" maxlength="150" placeholder="Hacer un comentario" rows="2"></textarea>
                        </div>
                        <div class="center-text">
                                <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                        </div>
                    </form>
                    -->
                </article> <!--post-container-->

                <!-- <h3>Comentarios</h3> -->
                @foreach ($unPost['coms'] as $uncoment)
                    @if ($uncoment['usuario'] && $uncoment['contenido_c'])
                    <div class="comment-container">
                        <div class="comment-info-container">
                            <div class="post-profile-picture">
                                <a href="profile">
                                    <img src="../storage/img/profiles/{{$uncoment['usuarioimg'] ? $uncoment['usuarioimg']:'noUser.png' }}" alt="{{$uncoment['usuario']}}">
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
                    <!--
                            <div class="comment-statistics">
                                <span><strong>XXX</strong> reacciones</span>
                                <span><strong>XXX</strong> respuestas</span>
                            </div>
                    -->
                        </div>

                    <!--
                        <div class="actions-container-comment center-text">
                            <a href="#">Reaccionar! <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <a href="#">Responder <i class="fa fa-comment-o" aria-hidden="true"></i></a>
                        </div>
                    -->
                    </div> <!--comment-container1-->
                    <!--    <br>    -->

                    @endif
                @endforeach

                <form class="comment-response" action="{{ asset('addcomment') }}" method="POST"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                    @csrf
                    <input type="hidden" name="postid" value="{{ $unPost['id'] }} "></input>

                    <div class="comment-response-textarea">
                        <textarea class="commentpost" name="comment" maxlength="150" placeholder="Grazna aqui..." rows="2"></textarea>
                    </div>

                    <div class="center-text">
                        <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                    </div>
                </form>
            </div> <!--post-comment-container-->
        </section> <!-- Main-signup-container -->
</div> <!-- Main-container -->
</main>
@endsection