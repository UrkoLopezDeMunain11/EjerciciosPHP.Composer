<?php

    namespace Egibide;

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    class Paciente{

        //propiedades
        public $nombre;
        public $apellido;
        public $edad;

        // el contructor 
        public function __constructor($nombre, $apellido, $edad){

            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> edad = $edad;

            $this -> logger = new Logger('paciente');
            $this -> logger->pushHandler(new StreamHandler(__DIR__ . '/../app.log'));
        }

        // primer metdo que me pide
        public function enfermar(){
            $this -> logger -> debug('Has enfermado'); // lo muestro el mensaje con debug
        }

        // segundo metodo que me pide
        public function curar(){
            $this -> logger -> debug('Te has curado'); // lo muestro el mensaje con debug
        }
    }
?>