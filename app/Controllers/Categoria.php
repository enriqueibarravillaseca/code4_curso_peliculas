<?php


namespace App\Controllers;

use App\Models\CategoriaModel;



class Categoria extends BaseController{

    function index(){
        
        $categoriaModel = new CategoriaModel;

        
        echo view('/categoria/index', ['categorias' => $categoriaModel->findAll()]);

    }

    function show($id){
        $categoriaModel = new CategoriaModel;

        echo view('/categoria/show',['categoria' =>$categoriaModel->find($id)]);

    }

    function create(){
        $categoriaModel = new CategoriaModel;

        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo')
        ]);

        echo 'Creado';
    }

    function new(){

            echo view('/categoria/new',[
                'categoria' => ['titulo' => '']

            ]);
    
    }

    function edit($id){
        $categoriaModel = new CategoriaModel;

        echo view('/categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }


    function update($id){

        $categoriaModel = new CategoriaModel;

        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo')
        
        ]);
        echo 'Actualizado';
    }

    function delete($id){
        
        $categoriaModel = new CategoriaModel;

        $categoriaModel->delete($id);

        echo 'Eliminado';
    }

};



?>