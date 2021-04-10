### Ejemplo de código de aplicación del principio de segregación del interfaz. I de S.O.L.I.D.

<?php

/**
 * Artículo de referencia
 *
 https://www.danielprimo.io/blog/manual-de-buenas-practicas-i-de-s-o-l-i-d-segregacion-de-la-interfaz
 *
 */

/**
 * Violación del principio
 *
 */

interface Animal{

	//método que calcula la velocidad en tierra
	public function calculateEarthSpeed(){}

	//método que calcule la velocidad en el aire
	public function calculateAirSpeed(){}
	
}

//clase vaca
class Cow implements Animal{

	//método que calcula la velocidad en tierra
	public function calculateEarthSpeed(){
	
		//funcionalidad de cálculo de velocidad en tierra
	
	}

	//método que calcule la velocidad en el aire
	public function calculateAirSpeed(){
	
		//funcionalidad de cálculo de velocidad en aire
	
	}

}

//clase pato
class Duck implements Animal{

	//método que calcula la velocidad en tierra
	public function calculateEarthSpeed(){
	
		//funcionalidad de cálculo de velocidad en tierra
	
	}

	//método que calcule la velocidad en el aire
	public function calculateAirSpeed(){
	
		//funcionalidad de cálculo de velocidad en aire
	
	}

}

/**
 * Principio corregido
 *
 */

interface Animal{

	//método que calcula la velocidad
	public function calculateSpeed(){}
	
}

//clase vaca
class Cow implements Animal{
    
    const EARTH_FACTOR= xxx;

	//método que calcula la velocidad en tierra
	public function calculateSpeed(){
	
		//funcionalidad de cálculo de velocidad en tierra y que utiliza el factor EARTH_FACTOR
	
	}

}

//clase pato
class Duck implements Animal{
    
    const AIR_FACTOR= xxx;

	//método que calcula la velocidad en tierra
	public function calculateSpeed(){
	
		//funcionalidad de cálculo de velocidad en tierra y que utiliza el factor AIR_FACTOR
	
	}


}
