<?php
function pasangan_terbesar($angka){
    $hasil=[];
    for($i=0;$i<=strlen($angka)-1;$i++){
        $hasil[]=substr($angka,$i,2);
    }
    echo max($hasil);
    echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>