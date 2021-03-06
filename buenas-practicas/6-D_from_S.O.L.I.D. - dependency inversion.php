### Ejemplo de código de aplicación del principio de inversión de dependencia. D de S.O.L.I.D.

<?php

/**
 * Artículo de referencia
 *
 https://www.danielprimo.io/blog/manual-de-buenas-practicas-d-de-s-o-l-i-d-inversion-de-dependencia
 *
 */

/**
 * Violación del principio
 *
 */

class MySQL{

	public function addUser($name, $email){
	
		//persistencia de datos
	
	}
    
    public function addClient($name, $email){
	
		//persistencia de datos
	
	}

}

class User{

	private $mySQL;
	
	public function __construct(MySQL $mySQL){
	
		$this->mySQL = $mySQL;
	
	}
	
	public function saveUser($name, $email){
	
		$this->mySQL->addUser($name, $user);
	
	}

}

class Client{

	private $mySQL;
	
	public function __construct(MySQL $mySQL){
	
		$this->mySQL = $mySQL;
	
	}
	
	public function saveClient($name, $email){
	
		$this->mySQL->addClient($name, $user);
	
	}

}

$mySQL = new MySQL();

//persistencia de usuario
$userName = "Alberto Sánchez";
$userEmail = "albertoS@example.com";
$user = new User($mySQL);
$user->saveUser ($userName, $userEmail);

//persistencia de cliente
$clientName = "Captura de cangrejo azul S.A.";
$clientEmail = "capturaC@example.com";
$client = new Client($mySQL);
$client->saveClient($clientName, $clientEmail);

/**
 * Principio corregido
 *
 */

inteface Persistance{

	public function addUser($name, $email){}
    
    public function addClient($name, $email){}

}

class MySQL implements Persistance{

	public function addUser($name, $email){
	
		//persistencia de datos
	
	}
    
    public function addClient($name, $email){
	
		//persistencia de datos
	
	}

}

class User{

	private $persistance;
	
	public function __construct(Persistance $persistance){
	
		$this->persistance = $persistance;
	
	}
	
	public function saveUser($name, $email){
	
		$this->persistance->addUser($name, $user);
	
	}

}

class Client{

	private $persistance;
	
	public function __construct(Persistance $persistance){
	
		$this->persistance = $persistance;
	
	}
	
	public function saveClient($name, $email){
	
		$this->persistance->addClient($name, $user);
	
	}

}

$persistance = new MySQL();

//persistencia de usuario
$userName = "Alberto Sánchez";
$userEmail = "albertoS@example.com";
$user = new User($persistance);
$user->saveUser ($userName, $userEmail);

//persistencia de cliente
$clientName = "Captura de cangrejo azul S.A.";
$clientEmail = "capturaC@example.com";
$client = new Client($persistance);
$client->saveClient($clientName, $clientEmail);
