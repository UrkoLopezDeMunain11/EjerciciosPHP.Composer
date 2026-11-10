<?php
    require __DIR__ . '/vendor/autoload.php';

    use Egibide\Admin;
    use Egibide\User;
    use Egibide\RegularUser;
    use Faker\Factory;// porq nos dice q tenemos q usar la libreria faker ar los datos


    $log = new Logger('app');
    $log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));


    // poruq me pide 5 de los dos tipos , entonces creo el array con lo q tiene dentro q sera username , nombre , email, pass....
    $admin = [];
    $usuario = []
    // aqui los voy a recrrer los dos
    for ($i = 0; $i < 5; $i++) {
        $admins[] = new Admin(// lo que me pide en el contructor de afdmin le pasaria aqui
            $faker->userName,
            $faker->firstName,
            $faker->lastName,
            $faker->safeEmail,
            $faker->password
           
        );

        $usuarios[] = new RegularUser(// las propiedasdes que tien en su clase
            $faker->userName,
            $faker->firstName,
            $faker->lastName,
            $faker->safeEmail,
            $faker->password
        
        );
    }

?>