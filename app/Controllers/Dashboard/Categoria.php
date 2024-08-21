<?php


namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;



class Categoria extends BaseController{

    function index(){
        
        $categoriaModel = new CategoriaModel;

        
        echo view('/Dashboard/categoria/index', ['categorias' => $categoriaModel->findAll()]);

    }

    function show($id){
        $categoriaModel = new CategoriaModel;

        echo view('/Dashboard/categoria/show',['categoria' =>$categoriaModel->find($id)]);

    }

    function create(){
        $categoriaModel = new CategoriaModel;

        $categoriaModel->insert([
            'titulo' => trim($this->request->getPost('titulo'))
        ]);

        return redirect()->to('/dashboard/Categoria');
    }

    function new(){

            echo view('/Dashboard/categoria/new',[
                'categoria' => ['titulo' => '']

            ]);
    
    }

    function edit($id){
        $categoriaModel = new CategoriaModel;

        echo view('/Dashboard/categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }


    function update($id){

        $categoriaModel = new CategoriaModel;

        $categoriaModel->update($id,[
            'titulo' => trim($this->request->getPost('titulo'))
        
        ]);
        return redirect()->to('/dashboard/Categoria')->with('mensaje', 'Registro Modificado.');
    }

    function delete($id){
        
        $categoriaModel = new CategoriaModel;

        $categoriaModel->delete($id);

        session()->setFlashdata('mensaje', 'Registro eliminado correctamente.');
        return redirect()->back();
    }

};



?>