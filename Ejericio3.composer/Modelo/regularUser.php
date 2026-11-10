<?php




    namespace Egibide;
    use  Monolog\Logger;

    class regularUser extends User{

        public $twitter;
        public $intagram;



        public function __construct($username, $nombre, $apellidos, $email, $password, $logger, $twitter, $instagram){
            parent::__construct($username, $nombre, $email, $password, $ultimo_acceso, $logger);
            $this -> twitter = $twitter;
            $this -> instagram = $intagram;

        }


        public function showActions(){
            echo "editar perfil, ver usuario"  
        }

        public function editarOerfil(){
                $this -> $logger -> debug("perfil {$this -> username} editado correctamente") 
        }


        public function getTwitter() { return $this->twitter; }
        public function getInstagram() { return $this->instagram; }

        public function setTwitter($twitter) { $this->twitter = $twitter; }
        public function setInstagram($instagram) { $this->instagram = $instagram; }

    }







?>