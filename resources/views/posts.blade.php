@extends('layouts.base')
    <script src="js/subir-imagen.js"></script>
@section('contenido')
<main>
    <div class="main-container">
        <section class="main-title-container">
            <h1 class="text-center">
                Graznidos
            </h1>
        </section>

        <section class="main-login-container"> <!--Recicled because muh code-->
            <div class="post-comment-container">
                <article class="post-container">
                    <div class="post-info-container">

                            <div class="post-profile-picture">
                                <a href="profile"><img src="storage/img/profiles/{{$user['imagen']}}" alt="{{$user['name']}}"></a>
                            </div>
                            <div class="post-user-time-container">
                                <p><a href="profile"><strong>{{$user['name']}}</strong></a><br></p>
                            </div>

                    </div>

                    <div class="post-new-container">
                        <form method="POST" action="addpost" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-4">
                                <div class="col-lg-12 mx-auto">

                                    <!-- Vista previa imagen a subir -->
                                    <p class="text-white text-center"> <b> Vista Previa </b></p>
                                    <div class="image-area mt-4">
                                        <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">

                                        <!-- Campo para subir imagen-->
                                        <div class="input-group mb-3 px-2 py-2 bg-white shadow-sm image-search">
                                            <input id="upload" type="file" name="imagen" onchange="readURL(this);" class="form-control border-0" accept="image/*">
                                            <label id="upload-label" for="upload" class="black">Subir imagen</label>
                                            <div class="input-group-append">
                                                <label for="upload" class="btn btn-success m-0 px-4">
                                                    <i class="fa fa-cloud-upload mr-2"></i>
                                                    <span class="text-uppercase font-weight-bold white">Buscar... </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <textarea name="texto" maxlength="150" placeholder="Ingrese aquí su comentario..."></textarea>
                                    </div>
                                    <br>

                                    <div class="center-text">
                                        <button class="btn btn-primary fs-1-5rem" type="submit"> Postear! </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
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
                                {{ $unPost['descripcion'] }}
                            </h2>
                        </div>
                        @if($unPost['contenido_p'] != '')
                        <div class="post-img-container center-text">
                            <a href="storage/img/posts/{{$unPost['contenido_p']}}" target="_blank"><img src="storage/img/posts/{{$unPost['contenido_p']}}"></a>
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

                    <br>

                    <!-- <h3>Comentarios</h3> -->
                    @foreach ($unPost['coms'] as $uncoment)
                        @if ($uncoment['usuario'] && $uncoment['contenido_c'])
                        <div class="comment-container">
                            <div class="comment-info-container">
                                <div class="post-profile-picture">
                                    <a href="profile">
                                        <img src="storage/img/profiles/{{$uncoment['usuarioimg'] ? $uncoment['usuarioimg']:'noUser.png' }}" alt="{{$uncoment['usuario']}}">
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

                    <form class="comment-response" action="addcomment" method="POST"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                        @csrf
                        <input type="hidden" name="postid" value="{{ $unPost['id'] }} "></input>

                        <div class="comment-response-textarea">
                            <textarea name="comment" maxlength="150" placeholder="Grazna aqui..." rows="2"></textarea>
                        </div>
                        <br>
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
