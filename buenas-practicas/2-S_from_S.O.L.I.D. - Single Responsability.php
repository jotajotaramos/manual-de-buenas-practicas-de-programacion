### Ejemplo de código de aplicación del principio de responsabilidad única. S de S.O.L.I.D.

<?php

/**
 * Artículo de referencia
 *
 https://www.danielprimo.io/blog/manual-de-buenas-practicas-s-de-s-o-l-i-d
 *
 */

/**
 * Violación del principio
 *
 */


class Invoice{
		
    private $number;
    private $date;
    private $client;
    
    public function setProperties(){
    
        //modificación de propiedades
    
    }
    
    public function print(){
    
        //impresión por pantalla de la factura
    
    }
    
    public function SaveToDatabase(){
    
        //persistencia de datos
    
    }

}

/**
 * Principio corregido
 *
 */

class Invoice{
		
    private $number;
    private $date;
    private $client;
    
    public function setProperties(){
    
        //modificación de propiedades
    
    }
    
}

class PrintInvoice{
    
    public function toScreen($invoiceNumber){
    
        //impresión por pantalla de la factura
    
    }
    
}

class SaveInvoiceToDB{
    
    public function SaveToDatabase($invoiceData){
    
        //persistencia de datos
    
    }    
    
}