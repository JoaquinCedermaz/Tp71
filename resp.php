<?php
  class CRectangulo {
      private $largo;
      private $ancho;
      
        function __construct($lar,$anc){
          $this->largo = $lar;
          $this->ancho = $anc;}
    
          public function getLargo()
          {return $this->largo;}

          public function getAncho()
          {return $this->ancho;}

            public function CalcularArea()
            {return $this->largo * $this->ancho;}

            public function CalcularPerimetro()
            {return $this->largo*2+$this->ancho*2;}
     
            

              public function Mostrar() 
              {return "Largo: ".$this->largo."<br>"."Ancho: ".$this->ancho."<br>"."Perimetro: ".$this->CalcularPerimetro()."<br>"."Area: ".$this->CalcularArea()."<br>";}
  }
                  $rect = new CRectangulo($_POST['ancho'], $_POST['largo']);
                    
                    echo $rect-> Mostrar()."<br>";
?>
