@extends('layouts.base')

@section('contenido')
<main>
    <div class="main-container">
        <section class="main-title-container title-fixed-container">
            <h1 class="text-center">
               
                <a href=".."><span title="Volver a Posts"><i class="fa fa-arrow-circle-left fixed-return" aria-hidden="true"></i></span></a>
                Editar Post
            </h1>
        </section>

        <section class="main-login-container">
            <div class="post-new-container p0">
                <div class="post-info-container">
                    <div class="post-profile-picture">
                        <a href="{{ asset('profile') }}"><img src=" {{asset("storage/img/profiles/".$unPost['postImg']) }}" alt="{{$unPost['postUser']}}"></a>
                    </div>
                    <div class="post-user-time-container">
                        <p><a href="{{ asset('profile') }}"><strong>{{$unPost['postUser']}}</strong></a><br>
                        <em>Publicado: {{ $unPost['created_at']->format('d/m/Y H:m:s') }}</em></p>
                    </div>
                </div>
                <form method="POST" class="p0" action="addpost" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h3 class="center-text">Descripción</h3>
                    <div class="row py-4 p0">
                        <div class="col-lg-12 mx-auto p0">
                            <div>
                                <textarea class="commentpost" name="texto" maxlength="150">{{ $unPost['descripcion'] }}</textarea>
                            </div>
                            <br>
                            <h3 class="center-text">Imagen anterior</h3>
                            <!-- Vista previa imagen a subir -->
                            <div class="image-area mt-4 p0">
                                <img src="{{asset('storage/img/posts/'.$unPost['contenido_p'])}}" id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">

                                <!-- Campo para subir imagen-->
                                <div class="input-group mb-3 px-2 py-2 bg-white shadow-sm image-search">
                                    <input id="upload" type="file" name="imagen" onchange="readURL(this);" class="form-control border-0" accept="image/*">
                                    <label id="upload-label" for="upload" class="black">Subir imagen</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-success m-0 px-4 upload">
                                            <i class="fa fa-cloud-upload mr-2"></i>
                                            <span class="text-uppercase font-weight-bold white">Buscar... </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="edit-actions center-text">
                                <div class="center-text">
                                    <button class="btn btn-primary fs-1-5rem border-white" type="submit"> Postear! </button>
                                </div>
                                <div class="center-text">
                                    <button class="btn btn-dark fs-1-5rem border-white"> <a href=".."> Cancelar </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

</div> <!-- Main-container -->
</main>
@endsection
