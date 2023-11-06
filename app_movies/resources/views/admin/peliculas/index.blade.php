
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
        <h1 class="m-0">Lista de películas</h1>
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
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Peliculas</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
            </div>
              <thead>
                <tr>
                  <th>Nro</th>
                  <th>Titulo de la pelicula</th>
                  <th>Descripcion</th>
                  <th>categoria</th>
                  <th>imagen</th>
                  <th>trailer</th>
                  <th>duracion</th>
                  <th>servidor 1</th>
                  <th>servidor 2</th>
                  <th>Acciones</th>

                </tr>
              </thead>
              <tbody>
                {{-- CONTADOR PARA QUE LOS ID DE LOS REGISTROS BORRADOS SE PIERDAN           --}}
                <?php $contador = 0;?>  
                @foreach ($peliculas as $pelicula)
                    <tr>
                        <td><?php echo $contador = $contador+1;?></td>
                        {{-- // <td>{{$pelicula->id}}</td> --}}
                        <td>{{$pelicula->titulo_p}}</td>
                        <td>{!!$pelicula->descripcion_p!!}</td>
                        <td>{{$pelicula->categoria_p}}</td>
                        <td>
                            <img src="{{$pelicula->imagen_p}}"width="100px" alt="jjj"> 

                            {{-- PENDIENTE DE VIDEO 41 --}}
                            {{-- <img src="{{asset('storage').'/'.$pelicula->imagen_p}}"width="100px" alt="jjj"> --}}
                        </td>
                        {{-- <td>{{$pelicula->trailer_p}}</td> --}}
                        <td>
                          <a href="https://www.youtube.com/watch?v={{$pelicula->trailer_p}}" target="target">
                            VER
                          </a>
                        </td>
                        <td>{{$pelicula->duracion_p}}</td>
                        <td>{{$pelicula->link1_p}}</td>
                        <td>{{$pelicula->link2_p}}</td>
                        <td>
                            

                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{route('peliculas.show',$pelicula->id)}}"class="btn btn-info btn-sm">Mostrar</a>
                              <a href=""class="btn btn-success btn-sm">Editar</a>
                              <a href=""class="btn btn-danger btn-sm">Eliminar</a>
                            </div>
                            
                        </td>

                    </tr>
                @endforeach
              </tbody>
              

            </table>
            
          </div>
        </div>
      </div>
      <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@endsection
