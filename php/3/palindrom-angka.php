<?php

function palindrome_angka($angka) {
if(!is_int($angka)){
  echo "Bukan integer<br>";
}else{
      if($angka<9){
        echo ($angka+1)."<br>";
      }else{
        $i=$angka+1;
        while($i>=$angka){
          if($i==strrev($i)){
            echo $i."<br>";
          break;
          }
          $i++;
        }
      }
    }
  
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>