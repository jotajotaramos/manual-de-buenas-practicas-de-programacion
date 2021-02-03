/**
 * Artículo de referencia
 *
 *
 */

/**
 * Violación del principio
 *
 * $instControlRiego = new ControlRiego();
 *
 * if ($instControlRiego->humedad < $instControlRiego::MINIMO_HUMEDAD){
 *	$instControlRiego->regar();
 * }
 */

class ControlRiego{

        const MINIMO_HUMEDAD = 20;
        public $humedad;
        
        public function regar(){}
}

/**
 * Principio corregido
 *
 * $instControlRiego = new ControlRiego();
 *
 * $instControlRiego->regar();
 */

class ControlRiego{
    const MINIMO_HUMEDAD = 20;
    private $humedad;

    public function regar(){

        if ($this->humedad < $self::MINIMO_HUMEDAD){
            //retornamos: Se ha llevado a cabo la acción de riego
        }

        //retornamos: No se ha llevado a cano la acción de riego

    }
}