<?php
    class employee{
        public $nom;
        public $sou;

        public function initialize(string $nom, int $sou) {
            $this -> nom = $nom;
            $this -> sou = $sou;
        }
        public function print() : string {
            if($this -> sou > 6000){
                $msg = "Debe pagar impuestos";
            } else {
                $msg = "NO debe pagar impuestos";
            }

            return "El empleado $this->nom $msg";
        }
    }

    // Crear instancia
    $empleado = new employee();
    
    // Llamar metodos
    $empleado -> initialize("juan", 1000);
    echo $empleado -> print() . PHP_EOL;
?>