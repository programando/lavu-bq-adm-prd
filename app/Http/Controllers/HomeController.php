<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
   public function getHome(){
     $app_title          = trans('app.home_title');
     return view('app.home', compact('app_title'));
   }


   public function getLogin(){
     $app_title = trans('app-productos.browser_title');
     return view('app.login', compact('app_title'));
   }

   /* Proceso el ingreso al sistema
      Usamos inyección de dependencias para realizar las validaciones

   public function postLogin(UserRequest $request ){

    if ( Auth::attempt(['email' => $request->email, 'pass_usuario' => $request->pass_usuario],  $request->remember_me)) {
            // Authentication passed...
            return redirect()->intended('home');
        }

   } */

}
