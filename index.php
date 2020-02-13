<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Triangle{
            protected  $side1 ;
            protected  $side2 ;
            protected  $side3 ;
        
        public function __construct($side1,$side2,$side3,$name,$color)
        {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
            $this->name = $name;
            $this->color = $color;
            
        }

    public function getName(){
        return  $this->name;
    }
    public function getColor(){
        return  $this->getcolor;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setColor($color){
        $this->color = $color;
    }






    public function getP(){
        return ($this->side1+$this->side2+$this->side3)/2;
    }


    
    public function getArea()
    {
        $p = $this->getP();
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3)+null);
    }
    public function getPerimeter()
    {
        return  ($this->side1 + $this->side2 + $this->side3);
    }
    public function toString(){
        return " </br> Diện tích : " . $this->getArea(). " </br> Chu vi : " . $this->getPerimeter(). "</br>";
    }

    
}
    class Shape extends Triangle{
            private $shaPe;

            public function __construct($shaPe)
            {
                $this->shaPe = $shaPe;
            }

            public function getshaPe($shaPe){
                return  $this->shaPe;
            }
            public function setshaPe($shaPe){
                $this->shaPe = $shaPe;
            }
        



        public function toString(){
            return "</br> Tên : " . $this->name .  "</br> Màu : " . $this->color . " </br> Shape : " . $this->shaPe; 
        }




    }





    $triangle = new Triangle(5,5,5,0,0);
    echo  $triangle->toString();
    $shape = new Shape(0);
    $shape->setName("Tam giác");
    $shape->setColor("blue");
    $shape->setshape("Kim tự tháp");

     echo $shape->toString();
    
    
    
    
    
    
    
    ?>
</body>
</html>