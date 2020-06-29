<?php

function papan_catur($angka) {
    echo "<pre>";
    //$row = ($angka<=5?$angka:'5');
    for($i=1;$i<=$angka;$i++){
    $col = ($i%2==0?($angka*2)-1:($angka*2));
        for($j=1;$j<=$col;$j++){
        if(($i+$j)%2==0){
            echo "#";
        }else{
            echo "&nbsp;";
        }
        }
        echo "<br>";   
    }
    echo "</pre>";
    echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/