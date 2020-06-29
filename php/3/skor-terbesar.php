<?php
function skor_terbesar($arr){
//kode di sini
$kelas=array_unique(array_column($arr,'kelas'));
$max=[];
foreach($kelas as $kel){
    $max[]=['kelas'=>$kel,'max'=>'0'];
}
//print_r($max);
echo "<pre>";
 $nAr=[];
 foreach($arr as $array){
     foreach($max as $key=>$m){
    
     if($array["kelas"]==$m['kelas'] && $m['max']<$array['nilai']){
     $max[$key]['max']=$array['nilai'];
     $nAr[$m['kelas']]=['nama'=>$array['nama'],'kelas'=>$array['kelas'],'nilai'=>$array['nilai']];
     }
    }
     
 }
 print_r($nAr);
echo "<pre>";
}
$skor=[
    [
      "nama" => "Bobby",
      "kelas" => "Laravel",
      "nilai" => 78
    ],
    [
      "nama" => "Regi",
      "kelas" => "React Native",
      "nilai" => 86
    ],
    [
      "nama" => "Aghnat",
      "kelas" => "Laravel",
      "nilai" => 90
    ],
    [
      "nama" => "Indra",
      "kelas" => "React JS",
      "nilai" => 85
    ],
    [
      "nama" => "Yoga",
      "kelas" => "React Native",
      "nilai" => 77
    ]
  ];
// TEST CASES
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>