<?php

namespace sisBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisBiblioteca\Http\Request\LibroFormRequest;
use sisBiblioteca\Libro; 
use DB;

class LibroController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $libros=DB::table('libro as l')
            ->join('categoria as c', 'l.idcategoria','=','c.idcategoria')
            ->select('l.idlibro','l.idcategoria','l.titulo','l.idioma','l.idautor','l.estado','l.ideditorial','c.nombre as categoria')
            ->where('l.titulo','LIKE','%'.$query.'%')
            ->orderBy('l.idlibro','desc')
            ->paginate(7);
            return view('libro.libro.index',["libros"=>$libros,"searchText"=>$query]);
        }
    }


    
    public function create()
    {
    	$categorias=DB::table('categoria')->where('condicion','=','1')->get();
    	return view("libro.libro.create",["categorias"=>$categorias]);
    }
    

    /*
    public function create()
    {
        return view("libro.libro.create");
    }  
    */  

    public function store(LibroFormRequest $request)
    {
    	$libro=new Libro;
    	$libro->idcategoria=$request->get('idcategoria');
    	$libro->idioma=$request->get('idautor');
        $libro->titulo=$request->get('titulo');
        $libro->idioma=$request->get('idioma');

    	$libro->save();
    	return Redirect::to('libro/libro');
    }

    public function show($id)
    {
    	return view("libro.libro.show",["libro"=>Libro::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$libro=Libro::findOrFail($id);
    	$categorias=DB::table('categoria')->where('condicion','=','1')->get();
    	return view("libro.libro.edit",["libro"=>$libro,"categorias"=>$categorias]);
    }


    public function update(LibroFormRequest $request, $id)
    {
    	$libro=Libro::findOrFail($id);

    	$libro->idcategoria=$request->get('idcategoria');
    	$libro->idioma=$request->get('idautor');
        $libro->titulo=$request->get('titulo');
        $libro->idioma=$request->get('idioma');

    	$libro->update();
    	return Redirect::to('libro/libro');
    }

 
    public function destroy($id)
    {
    	$libro=Libro::findOrFail($id);
    	$libro->estado='Inactivo';
    	$libro->update();
    	return Redirect::to('libro/libro');
    }
}


