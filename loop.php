<?php
class Loop{ 
    public function marlin_booking($loop=0){
        $marlin = 3;
        $booking = 5;
        $marlin_booking = 1;
        $result = "";
        for($i=0; $i<=$loop; $i++){
            $get_marlin = $i % $marlin;
            $get_booking = $i % $booking;
            if($get_marlin == 0 && $get_booking == 0){
                $result .= "$i. Marlin Booking ($marlin_booking)<br>";
                if($marlin_booking==2){
                    $marlin = 5;
                    $booking = 3;
                }
                if($marlin_booking==5){
                    return $result;
                }
                $marlin_booking++;
            } else {
                if($get_marlin == 0){
                    $result .= "$i. Marlin<br>";
                } elseif($get_booking == 0) {
                    $result .= "$i. Booking<br>";
                } else {
                    $result .= "$i<br>";
                }
            }
        }
        return $result;
    }
}
