<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
