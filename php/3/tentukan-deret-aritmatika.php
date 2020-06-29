<?php
function tentukan_deret_aritmatika($arr) {
    $divide = $arr[1] - $arr[0];
    for($i=count($arr)-1;$i>0;$i--){
        $stat="";
        //echo $arr[$i-1]+$divide."=".$arr[$i];
        //echo "<br>";
        if($arr[$i-1]+$divide==$arr[$i]){
            $stat = "true";
        }else{
            $stat = "false";
        break;
        }
    }
    echo $stat;
    echo "<br>";

}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>