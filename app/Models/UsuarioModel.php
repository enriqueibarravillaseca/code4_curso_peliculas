<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['usuario','email','contrasena'];


    public function contrasenaHash($contrasenahash){
        return password_hash($contrasenahash, PASSWORD_DEFAULT);
    }

    function contrasenaVerificar($contrasenaPlano, $contrasenahash){

        return password_verify($contrasenaPlano,$contrasenahash);
    }

}