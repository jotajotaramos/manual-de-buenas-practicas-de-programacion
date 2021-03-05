### Ejemplo de código de aplicación del principio de de abierto / cerrado. O de S.O.L.I.D.

/**
 * Artículo de referencia
 *
 *
 */

/**
 * Violación del principio
 *
 */

class LogToFile{

    public function execute($message){

        //volcamos información a archivo

    }

}

class LogToDatabase{

    public function execute($message){

        //volcamos información a base de datos

    }

}

class UserController{

    private $logger;

    public function __construct(LogToDatabase $logger){

        $this->logger = $logger;

    }

    public function login($user, $pass){

        //lógica de login
        
        $this->logger->execute($user . " ha hecho login");

    }

}

$user = new USerController (new LogToDatabase);

$user->login($user, $pass);

/**
 * Principio corregido
 *
 */

interface Logger{

    public function execute($message);

}

class LogToFile implements Logger{

    public function execute($message){

        //volcamos información a archivo

    }

}

class LogToDatabase implements Logger{

    public function execute($message){

        //volcamos información a archivo

    }

}

class UserController{

    private $logger;

    public function __construct(Logger $logger){

        $this->logger = $logger;

    }

    public function login($user, $pass){

        //lógica de login
        
        $this->logger->execute($user . " ha hecho login");

    }

}

$user = new USerController (new LogToFile);

$user->login($user, $pass);