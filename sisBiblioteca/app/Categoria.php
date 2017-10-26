<?php

namespace sisBiblioteca;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='idcategoria';

    protected $filleable =[
    	'nombre'	
    ];

    public $timestamps=false;

    public function libros()
    {
    	return $this->belongsToMany('sisBiblioteca\libro');

    }

}
