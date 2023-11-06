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

    }

    //PERMITE MOSTRAR UN REGISTRO ESPECIFICO CON UN ID
    public function show ($id){
        $pelicula = Pelicula::findOrFail($id);
        return view ('admin.peliculas.show', ['pelicula'=>$pelicula]);

    }

    //MOSTRAR VISTA Y CARGAR LOS DATOS QUE SE QUIERAN EDITAR
    public function edit(){

    }

    //PERMITE ACTUALIZAR LA INFORMACION QUE ESTA EN LA VISTA EDIT
    public function update(){

    }

    //FUNCION QUE ELIMINA UN REGISTRO ESPECIFICO
    public function destroy (){

    }
}
