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

       
        if($this->validate('categorias')){

            $categoriaModel->insert([
                'titulo' => trim($this->request->getPost('titulo'))
            ]);
    
            return redirect()->to('/dashboard/Categoria');
        }else{

            session()->setFlashdata([
                'validacion' => $this->validator->listErrors()
            ]);
        
            return redirect()->back()->withInput();
        }
    }

    function new(){

            echo view('/Dashboard/categoria/new',[
                'categoria' => ['titulo' => '']

            ]);
    
    }

    function edit($id){
        $categoriaModel = new CategoriaModel;

        //Llamamos la vista donde ***
        echo view('/Dashboard/categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }


    function update($id){

        //Creamos una instancia del objeto que contiene datos de los campos de la base de datos
        $categoriaModel = new CategoriaModel;

        // Validamos si las reglas establecida es correcta o en el else sera incorrecta
        if($this->validate('categorias')){

            // Llamamos al objeto de categoria invocando al evento para actualizar el registro
            $categoriaModel->update($id,[
                'titulo' => trim($this->request->getPost('titulo'))
            
            ]);

            // Redireccionamos a la pagina con la opcion to incluyendo un mensaje flash
            return redirect()->to('/dashboard/Categoria')->with('mensaje', 'Registro Modificado.');

        }else{

            // Creamos un Mensaje Flash con datos de el error al validar las reglas
            session()->setFlashdata([
                'validacion' => $this->validator->listErrors()
            ]);
        
            // Hace un refresh a la pagina y con la opcion withInput enviamos la modificacion de los input sin que se pierda al hacer el refresh
            return redirect()->back()->withInput();
        }
    }

    function delete($id){
        
        $categoriaModel = new CategoriaModel;

        $categoriaModel->delete($id);

        session()->setFlashdata('mensaje', 'Registro eliminado correctamente.');
        return redirect()->back();
    }

};



?>