<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

use Lang;
use Auth;
use Hash;
use Redirect;



class HomeController extends Controller
{
   public function getHome(){
     $app_title_browser          = trans('app.home_title_browser');
     return view('app.home', compact('app_title_browser'));
   }


   public function getLogin(){
      $app_title_browser = trans('app.prod_listado_title');
      $app_title         = trans('app.login_title');

      if ( !Auth::check() ) {
        return view('app.login', compact('app_title'));
      }else{
     return Redirect::route('prod.listado');
      }
   }

   public function getLogOut(){
      Auth::logout();
      return redirect()->route('home');
   }
   /* Proceso el ingreso al sistema
      Usamos inyección de dependencias para realizar las validaciones
  */
   public function postLogin( UserRequest $request ){
        $email        = $request->email;
        $pass_usuario =  $request->pass_usuario ;

        if ( Auth::attempt(['email' => $email, 'password' => $pass_usuario]) ) {
            $app_title_browser = trans('app.prod_listado_title');
            $app_title         = trans('app.login_title');
            return Redirect::route('prod.listado');
        }
        return Redirect::route('login')
          ->withInput($request->only('email','remember_me'))
          ->withErrors([
              'email' => trans('app_errors.datos_acceso_no_validos'),
          ]);

    }

}
