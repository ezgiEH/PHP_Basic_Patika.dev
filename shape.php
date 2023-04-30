<?php

class Shape{
    public $edge, $edge2, $edge3;
    
    public function __construct($edge, $edge2 = null, $edge3 = null){
        $this->edge = $edge;
        $this->edge2 = $edge2;
        $this->edge3 = $edge3;
    }
}

class Square extends Shape{
    public function Perimeter(){
        return $this->edge * 4;
    }
    public function Area(){
        return pow($this->edge, 2);
    }
}

class Rectangle extends Shape{
    public function Perimeter(){
        return ($this->edge + $this->edge2) * 2;
    }
    public function Area(){
        return $this->edge * $this->edge2;
    }
}

class Triangle extends Shape{
    public function Perimeter(){
        return $this->edge + $this->edge2 + $this->edge3;
    }
    public function Area(){
        $Perimeter = $this->Perimeter();
        return  bcsqrt((($Perimeter / 2) * (($Perimeter / 2) - $this->edge) * (($Perimeter / 2) - $this->edge2) * (($Perimeter / 2) - $this->edge3)), 2);
    }
}

$Square = new Square(6);
$Rectangle = new Rectangle(3,10);
$Triangle = new Triangle(3,4,5);

echo "Perimeter of Square: ".$Square->Perimeter()."<br>";
echo "Area of Square: ".$Square->Area()."<br>";

echo "Perimeter of Rectangle: ".$Rectangle->Perimeter()."<br>";
echo "Area of Rectangle: ".$Rectangle->Area()."<br>";

echo "Perimeter of Triangle: ".$Triangle->Perimeter()."<br>";
echo "Area of Triangle: ".$Triangle->Area()."<br>";
?>