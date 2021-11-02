<?php
namespace we16101;
class Student{
    var $a;
}
namespace cp16231;
class Student{
var $b;
}
namespace work;
use we16101\Student as user_we16101;

$a=new user_we16101();
$b=new \we16101\Student();

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?>