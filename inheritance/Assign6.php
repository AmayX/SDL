<?php
define('pi', 3.14);

interface shape
{
    function calc_area($r, $h);
    function calc_vol($r, $h);
}

class sphere implements shape
{
    function calc_area($r, $h)
    {
        return 4 * pi * $r * $r;
    }

    function calc_vol($r, $h)
    {
        return (4 / 3) * pi * $r * $r * $r;
    }
}

class cylinder implements shape
{
    function calc_area($r, $h)
    {
        return 2 * pi * $r * ($r + $h);
    }

    function calc_vol($r, $h)
    {
        return pi * $r * $r * $h;
    }
}

class cone implements shape
{
    function calc_area($r, $h)
    {
        return 0.5 * $r * $r * $h;
    }

    function calc_vol($r, $h)
    {
        return (1 / 3) * pi * $r * $r * $h;
    }
}

$op = isset($_GET['op']) ? $_GET['op'] : null;

switch ($op) {
    case 1:
        $r = isset($_GET['r']) ? (int)$_GET['r'] : 0;
        $h = isset($_GET['h']) ? (int)$_GET['h'] : 0;
        $ob = new cone();
        $a = $ob->calc_area($r, $h);
        $v = $ob->calc_vol($r, $h);
        echo "Area of Cone is: " . $a . "<br>Volume of Cone is: " . $v;
        break;

    case 2:
        $r = isset($_GET['r']) ? (int)$_GET['r'] : 0;
        $h = isset($_GET['h']) ? (int)$_GET['h'] : 0;
        $ob = new cylinder();
        $a = $ob->calc_area($r, $h);
        $v = $ob->calc_vol($r, $h);
        echo "Area of Cylinder is: " . $a . "<br>Volume of Cylinder is: " . $v;
        break;

    case 3:
        $r = isset($_GET['r1']) ? (int)$_GET['r1'] : 0;
        $ob = new sphere();
        $a = $ob->calc_area($r, 0); // Height is not used in sphere calculations
        $v = $ob->calc_vol($r, 0); // Height is not used in sphere calculations
        echo "Area of Sphere is: " . $a . "<br>Volume of Sphere is: " . $v;
        break;

    default:
        echo "Invalid operation.";
}
?>
