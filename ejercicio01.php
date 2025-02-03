<?php
class Employee {
    public $nom;
    public $sou;

    public function Initialize(string $nom, int $sou) {
        $this -> nom = $nom;
        $this -> sou = $sou;
    }

    public function Print() : string {

        if ($this -> sou > 6000) {
            $msg = "Debe pagar impuestos";
        } else {
            $msg = "NO debe pagar impuestos";
        }

        return "El empleado $this->nom. $msg"; 
    }
}

// Crear instancia
$empleado = new Employee();

// Llamar métodos
$empleado -> Initialize("Juan", 1000);
echo $empleado -> Print() . PHP_EOL; 
?>