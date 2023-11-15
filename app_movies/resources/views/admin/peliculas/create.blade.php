
@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Nueva películas</h1>
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
            <h5 class="m-0">Registre los datos con cuidado</h5>
          </div>
          <div class="card-body">
                <form action="{{url('/admin/peliculas')}}"method="POST">
                  @csrf
                    <div class="row">
                         <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Titulo de la pelicula</label>
                                    <input type="text" name="titulo_p" class="form-control">
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        <input type="text" name="categoria_p" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Trailer</label>
                                        <input type="text" name="trailer_p" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Duracion</label>
                                        <input type="text" name="duracion_p" class="form-control">
                                    </div>
                                </div>
                            </div>

                            
                            
                           
                            
                            <div class="form-group">
                                <label for="">Servidor1</label>
                                <input type="text" name="link1_p" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Servidor2</label>
                                <input type="text" name="link2_p" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Descripcion de la pelicula</label>
                                <textarea name="descripcion_p" id="" cols="30" rows="5"class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Portada de la pelicula</label>
                                <input type="file" name="imagen_p" form-control">
                            </div>
                         </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""class="btn btn-secondary">Cancelar</a>
                            <input type="submit"class="btn btn-primary"value="Registrar">
                        </div>
                    </div>
                </form>
          </div>
        </div>
      </div>
      <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@endsection
