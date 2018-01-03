<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
        /* Nombre de la tabla   */
    protected $table = 'productos';

    /* Llave primaria de la tabla   */
    protected $primaryKey = 'idproducto' ;

    /* campos que será capturados desde formularios   */
    protected $fillable = [ 'nom_producto', 'nom_producto_largo'  ];
}
