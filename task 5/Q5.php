<?php 
class Day {
    public $d;
    
    function __construct($date_string) {
        $str = explode("/", $date_string);
        $this->d = mktime(0, 0, 0, $str[0], $str[1], $str[2]);
        echo "Created date is " . date("Y-m-d", $this->d) . '<br>';
    }

    public function diff($date2){
        $date1 = new DateTime(date("Y-m-d", $this->d));
        $date2 = new DateTime(date("Y-m-d", $date2->d));
        
        $difference = date_diff($date1, $date2);
        $daysDifference = (int)$difference->format("%R%a");
        return abs($daysDifference);
    }
}

$date1 = new Day("5/12/2019");
$date2 = new Day("3/11/2019");
echo $date1->diff($date2);
?>
