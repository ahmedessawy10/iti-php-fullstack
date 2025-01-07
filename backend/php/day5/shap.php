<?php
interface Shap
{

    public function getColor();
    public function setFilled($filled);
    public function isFilled();
    public function toString();
}





class circle implements Shap
{

    private $radius = 1.0;
    private $color = "red";
    private $filled =  false;


    public function __construct($radius, $color, $filled)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function isFilled()
    {
        return $this->filled;
    }
    public function setFilled($filled)
    {
        $this->filled = $filled;
    }
    public function toString()
    {
        return "circle[radius=" . $this->radius . ",color=" . $this->color . ",filled=" . $this->filled . "]";
    }
    public function getArea()
    {
        return 3.14 * ($this->radius ** 2);
    }
}


class Rectangle implements Shap
{
    private $width = 1.0;
    private $height = 1.0;
    private $color = "red";
    private $filled = false;
    public function __construct($width, $height, $color, $filled)
    {
        $this->width = $width;
        $this->color = $color;
        $this->height = $height;
        $this->filled = $filled;
    }

    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function toString()
    {
        return "rectangle[width=" . $this->width  . ",height=" . $this->height . ",color=" . $this->color . ",filled=" . $this->filled . "]";
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function isFilled()
    {
        return $this->filled;
    }
    public function setFilled($filled)
    {
        $this->filled = $filled;
    }
    public function getarea()
    {
        return $this->width * $this->height;
    }
    public function getColor()
    {
        return $this->color;
    }
}
echo "<br> ************cyrcle************  <br>";

$circle = new Circle(5.0, "blue", true);
echo $circle->toString();
echo "<br>";
echo "circle volumn =", $circle->getArea();
echo "<br> ************cyrcle************  <br>";
$rec = new Rectangle(5.0, 10.0, "blue", true);
echo $rec->toString();
echo "<br>";

echo "rectangle area =", $rec->getArea();