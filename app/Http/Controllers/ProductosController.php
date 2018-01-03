<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

//Models
use App\Models\Productos;

class ProductosController extends Controller
{
  public function getProductos(){
     $app_title_browser = trans('app.prod_listado_title');
     $app_title         = $app_title_browser;
     //$Productos         = Productos::orderBy('idproducto','ASC')->get();

     $Productos = DB::select('call productos_listado_productos_tron_todos()');

     return view('app.productos.listado', compact('app_title_browser','app_title','Productos'));
   }

}
