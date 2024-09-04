<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Categoria extends ResourceController{

    protected $modelName = 'App\Models\CategoriaModel';
    protected $format    =  'json';
    //protected $format    =  'xml';

    function index(){
        
        return $this->respond($this->model->findAll());
    }

    function show($id = null){
        
        return $this->respond($this->model->find($id));
    }

    public function create(){


        if ($this->validate('categoria')){
             
            $id = $this->model->insert([
                'titulo' => trim($this->request->getPost('titulo')),
            ]);

        }else{
            return $this->respond($this->validator->getErrors());
        }

        return $this->respond($this->model->find($id));      
    }

    public function update($id = null){
        
        if ($this->validate('categoria')){
             
            $this->model->update($id,[
                'titulo' => trim($this->request->getPost('titulo')),
            ]);

        }else{

            return $this->respond($this->validator->getErrors());
        }
        return $this->respond($this->model->find($id));
    }

    public function delete($id = null){
        
        $this->model->delete($id);
        return $this->respond("OK");

    }

}