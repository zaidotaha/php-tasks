<?php
class factorial {
    function __construct($number) {
        $this -> num =  $number;
        $this -> factorial = $this->calculate_factorial($number);
        echo $this -> factorial;
    }
    private function calculate_factorial($num){
        if($num==0 || $num==1){
            return 1;
        }
        else{
            return $num * $this->calculate_factorial($num-1);
        }
    }
}

$factorial_calculator = new factorial(5);
?>
