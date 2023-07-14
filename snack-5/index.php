<!--
    Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.
 -->

 <?php

class Indumento{

    public $material;
  
    function __construct(String $_material){
        $this->material = $_material;
    }
    
}
class Scarpa extends Indumento{
    
    public $heel;
  
    function __construct(String $heel, String $material){
        $this->heel = $heel;
        parent::__construct($material);
    }
    
}
class Cappello extends Indumento{
    
    public $brim;
  
    function __construct(String $brim, String $material){
        $this->brim = $brim;
        parent::__construct($material);
    }
    
}

var_dump( new Indumento('textile'), new Scarpa('ecoskin', 'metal'), new Cappello('cotton', 'baseball'));