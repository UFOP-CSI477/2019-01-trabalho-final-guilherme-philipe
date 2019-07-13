<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
      $nome = "Guilherme";
      $usuario="guilm1";
      $products = Products::all();
      return view('principal')
             ->with('nome', $nome)
             ->with('user', $usuario);
    }

    public function about(){
      return view('welcome');
    }

  public function home(){
    return view('home');
  }

}
