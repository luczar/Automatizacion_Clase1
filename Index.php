<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 10/08/17
 * Time: 18:42
 */


echo "hola mundo \n";


class Verdura {

    var $comestible;
    var $color;

    function Verdura($comestible, $color="verde")
    {
        $this->comestible = $comestible;
        $this->color = $color;
    }

    function es_comestible()
    {
        return $this->comestible;
    }

    function qué_color()
    {
        return $this->color;
    }

}

$tomate = new Verdura( 'si', 'rojo');
echo $tomate->es_comestible(), "\n";
echo $tomate->qué_color(), "\n";

?>