<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit{
    public $weigth;
    public function __construct($name, $color, $weigth){
        $this->name = $name;
        $this->color = $color;
        $this->weigth = $weigth;
}
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}, and the weigth is {$this->weigth}.";
    }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry ->intro();
?>