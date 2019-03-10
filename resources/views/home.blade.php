@extends('layouts.app')

<!---@yield("css")--->

@section('titulo')
We Are - Home
@endsection

<!---@section("css")
    <style>
        .post {
          padding: 10px;
        }
        .post-photo {
          height: 600px;
          overflow-x: hidden;
        }
        .post-photo img {
          height: 100%;
        }
    </style>
@endsection --->

@section('content')

<!---<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($posts as $post)
                      <div class="row">
                        <div class="post">
                          <div class="text-center post-photo">
                            <img src="{{ $post->photo }}" alt="">
                          </div>
                          <br>
                          <div class="post-body">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Me gusta</button>
                            </div>

                            <p class="card-text">
                              <label class="label label-default">{{ $post->user->name}}</label>
                              {{$post->description}}

                            </p>
                          </div>
                        </div>
                      </div>
                      <hr>
                      @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">Nuevo post</div>
                <div class="panel-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div style="overflow-x: hidden;border: 1px solid #f1f1f1; margin: 5px 0px 3px 0px;">
                            <input type="file" name="photo" class="btn btn-xs">
                        </div>

                        <br>

                        <textarea name="description" cols="50" rows="5" placeholder="Escribe lo que piensas"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Publicar</button>

                        @if ($errors->has('photo'))
                            <div class="alert alert-danger">
                                {{$errors->first('photo') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>---->


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Haz una publicación</div>
                <form class="card-body" action="/miPerfil" method="post">
                  {{ csrf_field() }}
                  <input type="textarea" class="estado" name="postText" placeholder="  Dile al mundo lo que tienes para contar...">
                  <button type="submit" name="button" class='boton-form'>Compartir</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div> 

<h1>Posteos</h1>

<div class="row justify-content-center">
  <div class="col-md-10">
   <div class="posteos-home">
  @foreach($posteos as $post)
    <div class="caja-posteo">
      {{$post->user_id}} : {{$post->listadoPost()}}
  </div><br>
  @endforeach
  </div>
  </div>
</div>
@endsection
