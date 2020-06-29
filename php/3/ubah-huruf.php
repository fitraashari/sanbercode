<?php
function ubah_huruf($string){
$abjad = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$pecah = explode(" ",$abjad);
$kata = "";
for($i=0;$i<strlen($string);$i++){
    $index = array_search($string[$i],$pecah);
    $kata.= $pecah[$index+1];
}
echo $kata;
echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>