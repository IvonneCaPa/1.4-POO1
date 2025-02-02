<?php
    class shape{
        public $height;
        public $width;

        function __construct(int $width, int $height)  //preguntar si es necesario tipo
        {
            $this -> width = $width;
            $this -> height = $height;
        }
    }

    class triangle extends shape{
        public function area() : string {
            $area = $this -> width * $this -> height / 2;
            return "el area del triangulo es $area";
        }       
    }

    class rectangle extends shape{
        public function area() : string {
            $area = $this -> width * $this -> height;
            return "el area del rectangulo es $area";
        }
    }

    //crear instancia triangulo
    $triangulo = new triangle(5,3);

    //llamar metodo triangulo
    echo $triangulo -> area() . PHP_EOL;

    //crear instancia triangulo
    $rectangulo = new rectangle(5,3);

    //llamar metodo triangulo
    echo $rectangulo -> area() . PHP_EOL;

?>