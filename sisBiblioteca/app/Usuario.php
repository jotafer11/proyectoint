<?php

namespace sisBiblioteca;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';

    protected $primaryKey='user_id';

    public $timestamps=false;


    protected $filleable =[
    	'username'
    	'password'
    ];

}
