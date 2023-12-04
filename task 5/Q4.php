<?php
class ar {
    public $arr;
    function __construct($array) {
        $this -> arr =  $array;
        sort($this -> arr);
    }
    function print(){
        print_r($this -> arr);
    }
}

$arr = new ar(array(11, -2, 4, 35, 0, 8, -9));
$arr -> print();
?>
