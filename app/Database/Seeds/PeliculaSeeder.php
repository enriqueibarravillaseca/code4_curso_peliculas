<?php

namespace App\Database\Seeds;

use App\Models\PeliculaModel;
use CodeIgniter\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        
        $peliculamodel = new PeliculaModel();

        $peliculamodel->where('id >=',1)->delete();

        for ($i=0; $i < 20; $i++) { 
            
            $peliculamodel->insert([

                'titulo' => "Pelicula $i",
                'descripcion' => "Descripcion de pelicula $i"
            ]);
        }
    }
}
