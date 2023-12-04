<?php 
class Day {
    public $d;
    
    function __construct($date_string) {
        $str = explode("-", $date_string);
        $this->d = mktime(0, 0, 0, $str[0], $str[1], $str[2]);
        echo "Created date is " . date("m-d-Y", $this->d) .      " or " . date("Y-m-d", $this->d) . '<br>';
    }
}

$date1 = new Day("5-12-2019");
?>
