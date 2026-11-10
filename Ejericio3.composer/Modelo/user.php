<?php
    
    namespace Egibide;

    use Monolog\Logger;
    
    use DateTime;



    class User{
        protected $username;
        protected $nombre;
        protected $email;
        protected $password;
        protected DateTime $ultimo_acceso;// porq dice q es de tipo time
        protected $logger;

    }

    public function __construct($username, $nombre, $email, $password, $ultimo_acceso, $logger ){

        $this -> user = $username; // guarda el valor q se recibe en  $username  en user
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> password = $password;
        $this -> ultimo_acceso = new DateTime(); 
        $this -> logger = $logger;

    }

    //dice que es un metodo abstracto
    abstract public function showActions(){
        //vacio se delcarara en las otras clases, lo dejo vacio porq esto no sera igual en todas las clase en cada clase hara una funcion distinta

    }

    public function login(){
        $this -> logger -> debug("el usuario{$this -> username} a a inisciado sesion");

    }


    public function logout(){
        $this -> logger -> debug("el usuario a cerrado sesion");
        
    }

    // Getters
    public function getUsername() { return $this->username; }
    public function getNombre() { return $this->nombre; }
    public function getApellidos() { return $this->apellidos; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }
    public function getUltimoAcceso() { return $this->ultimo_acceso; }
    public function getLog() { return $this->log; }

    // Setters
    public function setUsername($username) { $this->username = $username; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setApellidos($apellidos) { $this->apellidos = $apellidos; }
    public function setEmail($email) { $this->email = $email; }
    public function setPassword($password) { $this->password = $password; }
    public function setUltimoAcceso(DateTime $ultimo_acceso) { $this->ultimo_acceso = $ultimo_acceso; }
    public function setLog(Logger $log) { $this->log = $log; }


    

?>