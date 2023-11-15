<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    //CARGAR DATOS DE LA TABLA DE DATOS
    
    //NOS CARGA LA INFORMACION DEL INDEX
    public function index (){
        $peliculas = Pelicula::all();
        return view('admin.peliculas.index',['peliculas'=>$peliculas]);
    }

    //VISTA DE FORMULARIO PARA CREAR REGISTROS
    public function create (){
        return view('admin.peliculas.create');
    }

    //ALMACENA LA INFORMACION QUE SE ENVIA DESDE EL FORMULARIO
    public function store(Request $request){
        //Guarda la informacion del formulario registro de peliculas
        $pelicula = new Pelicula();
        $pelicula->titulo_p = $request->titulo_p;
        $pelicula->descripcion_p = $request->descripcion_p;
        $pelicula->categoria_p = $request->categoria_p;
        $pelicula->imagen_p = $request->imagen_p;
        $pelicula->trailer_p = $request->trailer_p;
        $pelicula->duracion_p = $request->duracion_p;
        $pelicula->link1_p = $request->link1_p;
        $pelicula->link2_p = $request->link2_p;
        $pelicula->save();
    }

    //PERMITE MOSTRAR UN REGISTRO ESPECIFICO CON UN ID
    public function show ($id){
        $pelicula = Pelicula::findOrFail($id);
        return view ('admin.peliculas.show', ['pelicula'=>$pelicula]);

    }

    //MOSTRAR VISTA Y CARGAR LOS DATOS QUE SE QUIERAN EDITAR
    public function edit($id){
        $pelicula = Pelicula::FindOrFail($id);
        return view('admin.peliculas.edit',['pelicula'=>$pelicula]);

    }

    //PERMITE ACTUALIZAR LA INFORMACION QUE ESTA EN LA VISTA EDIT
    public function update(){

    }

    //FUNCION QUE ELIMINA UN REGISTRO ESPECIFICO
    public function destroy (){

    }
}
