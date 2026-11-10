<?php

 namespace Egibide;
 use Monolog\Logger;


 class Admin extends User{
    protected int $admin_level; // int porq dice q te¡iene q ser numeris
    ;

    public function __construct($admin_level){
        parent::__construct($username, $nombre, $apellidos, $email, $password, $logger);// lo q hereda de la clase user
        $this-> adminLevel = $adminlevel;// su propia propiedad
    }

    // solo este metodo porque los m¡demas metosos ya enatn llenos en user este no , es abstracto, es el unico que cambia los demas seran iguales en todos los lados
    public function showActions()
    {
        echo "Acciones de administrador (nivel {$this->admin_level}): desactivar usuarios, gestionar usuarios";
    }

    public function desactivarUsuario(){
        $this -> $logger -> debug("usuario {$this->username} desactivado");
    }


    //getter
    public function getAdminLevel()// lo obtine 
    {
        return $this->admin_level;
    }

    //setter , porq mepiden q los nuneros sean 1 2 o 3
    public function setAdminLevel(int $admin_level)// lo moodfica para q solo sean esos tres numero
    {
        if (!in_array($admin_level, [1, 2, 3])) {
            throw new InvalidArgumentException("El nivel de admin debe ser 1, 2 o 3");
        }
        $this->admin_level = $admin_level;
    }


 }


 
 











?>