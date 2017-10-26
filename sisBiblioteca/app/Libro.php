<?php

namespace sisBiblioteca;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libro';

    protected $primaryKey='idlibro';

     protected $filleable =[
        'idcategoria',
    	'titulo',
    	'idioma',
        'idautor',
        'ideditorial',
        'estado'
    ];

    protected $guarded =[

    ];

    public $timestamps=false;


    public function categorias()
    {
    	return $this->belongToMany('sisBiblioteca\categorias');

    }

}