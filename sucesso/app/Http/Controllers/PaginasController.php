<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
      $nome = "Guilherme";
      $usuario="guilm1";

      return view('principal')
             ->with('nome', $nome)
             ->with('user', $usuario);
    }

    public function about(){
      return view('welcome');
    }

    public function loadView($viewName, $viewData = array()) {
  		extract($viewData);
  		include 'views/'.$viewName.'.php';
  	}

  	public function loadTemplate($viewName, $viewData = array()) {
  		include 'views/principal.blade.php';
  	}


    public function loadViewInTemplate($viewName, $viewData) {
  		extract($viewData);
  		include 'views/'.$viewName.'.php';
  	}

}
