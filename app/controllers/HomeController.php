<?php

namespace App\Controllers;

use App\Router;

class HomeController {

  public function index(){
    echo $_SERVER['REQUEST_URI'];

    Router::render('home/index', 'PublicLayout', [
      'title' => 'Home'
    ]);
  }

  public static function prueba( $id = 'Rena') {
    Router::render('home/index', 'PublicLayout', [
      'title' => $id
    ]);
  }

}

?>