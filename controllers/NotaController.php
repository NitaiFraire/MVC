<?php

class NotaController{

    public function listar(){

        // modelo
        require_once 'models/nota.php';

        // logica acción del controlador
        $nota = new Nota();
        $notas = $nota->getTodo('notas');

        // vista
        require 'views/nota/listar.php';
    }

    public function crear(){

        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde MVC1");
        $nota->setDescripcion("Dsscripcion de nota1");

        $guardar = $nota->guardar();

        header('Location: index.php?controller=Nota&action=listar');
    }

    public function borrarNota(){
        
    }
}