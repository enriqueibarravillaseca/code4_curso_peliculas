<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function index()
    {
        
        // Funcion de prueba para crear
        function crear(){
            $usuarioModel = new UsuarioModel();

            $usuarioModel->insert([
                'usuario' => 'admin',
                'email' => 'admin@gmail.com',
                'contrasena' => '12345'
            ]);
      }


    }

    // Muestra la pagina de login
    function login(){
        echo view('Web/usuario/login');
        
    }


    function login_post(){

        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        $usuario = $usuarioModel->select('id,usuario,email,contrasena,tipo')
        ->orWhere('usuario', $email)
        ->orWhere('usuario',$email)
        ->first();

        if (!$usuario) {
            return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrecta');
        }
        
        if ($usuarioModel->contrasenaVerificar($contrasena,$usuario->contrasena)) {
            $session = session();
            unset($usuario->contrasena);
            $session->set('usuario',$usuario);

            return redirect()->to('/dashboard/Categoria')->with('mensaje',"Bienvenido $usuario->usuario");
        }

        return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrecta');
        

    }
    
    
    
    // Muestra la pagina de registro
    function register(){
        echo view('Web/usuario/register');
        
    }

    // Funcion para registrase 
    function register_post(){

        // Creamos un intancia a la clase para obtener los parametros del usuario
        $usuarioModel = new UsuarioModel();

        // Validamos si lo que nos envian es correcto a las reglas creadas en la pagina Validation.php
        if ($this->validate('usuarios')) {
            
            //Insercion a la base de datos del formulario enviado por metodo post
            $usuarioModel->insert([
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                //Llamamos al metodo para convertir en hash la contraseña
                'contrasena' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena')),
            ]);

            //Retornamos un mensaje de exito a la pagina login
            return redirect()->to(route_to('usuario.login'))->with('mensaje',"Usuario registrado exitosamente");
            
        }

        // En caso de fallar el registro devolvemos un mensaje de error llamando a la validation 
        session()->setFlashdata([
            'validation' => $this->validator
        ]);

        // Retornamos el error con lo ya digitado
        return redirect()->back()->withInput();

    }

    //Metodo para cerrar la sesion
    public function logout(){
        session()->destroy();

        return redirect()->to(route_to('usuario.login'));
    }
}
