<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class PeliculaController extends BaseController{


    public function index()
    {
            echo view('index');
    
    }



}



?>