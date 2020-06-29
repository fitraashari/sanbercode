<?php
function tentukan_deret_geometri($arr) {
    $divide = $arr[1] / $arr[0];
    for($i=count($arr)-1;$i>0;$i--){
        $stat="";
        if($arr[$i-1]*$divide==$arr[$i]){
            $stat = "true";
        }else{
            $stat = "false";
        break;
        }
    }
    echo $stat;
    echo "<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>