<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

    //Facades
use Hash;
use Notifiable;



class User extends Authenticatable
{
    /* Nombre de la tabla   */
    protected $table = 'terceros';

    /* Llave primaria de la tabla   */
    protected $primaryKey = 'idtercero' ;

    /* campos que será capturados desde formularios   */
    protected $fillable = [ 'nom_usuario', 'email','pass_usuario'  ];

    /* campos que estarán ocultos   */
    protected $hidden = ['pass_usuario', 'remember_token', ];

    /* Campos que será tratados como fechas   */
    protected $dates = ['created_at', 'updated_at', 'deleted_at',];



    /***********************************************************************
        MUTATORS:  Modifican datos antes de que lleguen a la base de datos
    ***********************************************************************/

    public function setPassUsuarioAttribute ( $value ){
        $this->attributes['pass_usuario'] = Hash::make( $value );
    }

    public function setEmailAttribute ( $value ){
        $this->attributes['email']          = mb_strtolower( $value,'UTF-8');
    }

    public function setNomUsuarioAttribute ( $value ){
        $this->attributes['nom_usuario']    = mb_strtoupper( $value,'UTF-8');
    }

}
