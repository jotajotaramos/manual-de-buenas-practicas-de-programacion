### Ejemplo de código de aplicación del principio de inversión de dependencia. D de S.O.L.I.D.

<?php

/**
 * Artículo de referencia
 *
 *
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





