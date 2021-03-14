/* Ejemplo de código de aplicación del principio de Liskov. L de S.O.L.I.D. */

/**
 * Artículo de referencia
 *
 *
 */

/**
 * Violación del principio
 *
 */

class Car{

    getCountry(){}

    getFuel(){}	

}

class RenaultPetrol extends Car{

    getCountry(){

        return 'Francia';

    }

    getFuel(){

        return 'Gasolina';

    }

}

class Tesla extends Car{

    getCountry(){

        return 'United States';

    }

    getFuel(){

        throw new Error('Los coches eléctricos no tienen combustible, funcionan con electricidad');

    }

}

function fuelType(car){

    car.getFuel()

}

const renaultPetrol = new RenaultPetrol();
const tesla = new Tesla();

fuelType(renaultPetrol);
//devuelve "Gasolina"
fuelType(tesla);
//devuelve Excepcion: "Los coches eléctricos no tienen combustible, funcionan con electricidad"

/**
 * Principio corregido
 *
 */

class Car{

	getCountry(){}
	
}

class FuelCar extends Car{

	getFuel(){}

}

class ElectricCar extends Car{

	getEnergyUSed(){
        
        return 'Electricidad'
        
    }

}

class RenaultPetrol extends FuelCar{

	getCountry(){
	
		return 'Francia';
	
	}
	
	getFuel(){
	
		return 'Gasolina';
	
	}

}

class Tesla extends ElectricCar{

	getCountry(){
	
		return 'United States';
	
	}

}

function fuelType(fuelCar){

	fuelCar.getFuel()

}

function energyUsed(ElectricCar){

	ElectricCar.getEnergyUSed()

}


const renaultPetrol = new RenaultPetrol();
const tesla = new Tesla();

fuelType(renaultPetrol);
//devuelve "Gasolina"
energyUsed(tesla);
//devuelve "Electricidad"