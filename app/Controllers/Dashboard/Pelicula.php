<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;


class Pelicula extends BaseController{

    public function show($id){
        $peliculaModel = new PeliculaModel();
//                  URI              Pasa como variable al view
      echo view('/Dashboard/pelicula/show',['pelicula'=> $peliculaModel->find($id) ] );
        
    }
    
    public function create(){

        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/dashboard/Pelicula');
        
    }

    public function edit($id){
        
        $peliculaModel = new PeliculaModel();

        echo view('/Dashboard/Pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function update($id){
        
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);
        return redirect()->to('/dashboard/Pelicula');
    }

    public function delete($id){
        $peliculaModel = new PeliculaModel();

        $peliculaModel->delete($id);

        return redirect()->back();

    }


    public function new(){

        echo view('/Dashboard/pelicula/new',[
            'pelicula' => [
                'titulo' => '',
                'descripcion' => ''
            ]
        ]);

        
    }

    public function index()
    {
        $peliculaModel = new PeliculaModel();

            echo view('/Dashboard/pelicula/index',['peliculas' => $peliculaModel->findAll()]);
    
    }



}



?>