{{-- DIRECTORIOS PARA LOS BOTONES --}}

{{-- <?php


?>

<h1>{{$pelicula->titulo_p}}</h1> --}}



{{-- @foreach ($peliculas as $pelicula)
    <ul>
        <li>{{$pelicula->id }}-{{$pelicula->titulo_p}}-{{$pelicula->descripcion_p}}</li>
    </ul>

@endforeach --}}

@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Película: {{$pelicula->titulo_p}}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- Puedes añadir elementos al breadcrumb si es necesario -->
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Datos de la peliculas</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-border">
                    <tr>
                        <td><b>Titulo</b></td>
                        <td>{{$pelicula->titulo_p}}</td>
                    </tr>
                    <tr>
                        <td><b>Descripcion de la pelicula</b></td>
                        <td>{!!$pelicula->descripcion_p!!}</td>
                    </tr>
                    <tr>
                        <td><b>Categoria</b></td>
                        <td>{{$pelicula->categoria_p}}</td>
                    </tr>
                    <tr>
                        <td><b>Portada de la Pelicula</b></td>
                        <td>
                            {{-- CODIGO CUANDO GUARDE BIEN EN CARPETA STORAGE PASAR A INDEX --}}
                            <img src="{{asset('storage').'/'.$pelicula->imagen_p}}"width="100px" alt="gg">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Traile pelicula</b></td>
                        <td>
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$pelicula->trailer_p}}" title="El viaje de carreras de Cruz Ramírez | Pixar Cars" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Duracion de la Pelicula</b></td>
                        <td>{{$pelicula->duracion_p}}</td>
                    </tr>
                    <tr>
                        <td><b>Servidor 1</b></td>
                        <td>{{$pelicula->link1_p}}</td>
                    </tr>
                    <tr>
                        <td><b>Servidor 2</b></td>
                        <td>{{$pelicula->link2_p}}</td>
                    </tr>

                </table>
            
            </div>
        </div>
      </div>
      <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
</div>

@endsection