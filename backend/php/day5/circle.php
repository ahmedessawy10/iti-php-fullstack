<?php

trait circle
{
    private $radius = 1.0;
    private $color = "red";

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
    public function toString()
    {
        return "circle[radius=" . $this->radius . ",color=" . $this->color . "]";
    }
    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}


class Cylinder
{
    use circle;
    private $height = 1.0;
    public function __construct($radius, $color, $height)
    {
        $this->radius = $radius;
        $this->color = $color;

        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    // @override
    public function toString()
    {
        return "cylinder[radius=" . $this->radius . ",color=" . $this->color . ",height=" . $this->height . "]";
    }

    public function getVolume()
    {
        return $this->getArea() * $this->height;
    }
}
echo "<br> ************cylinder************  <br>";

$cylinder = new Cylinder(5.0, "blue", 10.0);
echo $cylinder->toString();
echo "<br>";
echo "cylinder volumn =", $cylinder->getVolume();