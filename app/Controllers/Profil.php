<?php

namespace App\Controllers;

class Profil extends BaseController

{

  public function index()
  {
    return view('partials/header')
    . view('Profil')
    . view('partials/footer');
  }

}
