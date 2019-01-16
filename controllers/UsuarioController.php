<?php

class UsuarioController{

    public function getUsuarios(){

        require_once 'models/usuario.php';
        

        $usuario = new Usuario();
        $todosLosUsuarios = $usuario->getTodo('usuarios');

        require_once 'views/usuarios/getUsuarios.php';
    }

    public function crearUsuario(){

        require_once 'views/usuarios/crear.php';

    }
}   