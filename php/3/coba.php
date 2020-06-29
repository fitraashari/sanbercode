<?php
function skor_terbesar($arr){
//kode di sini
$fxar=[];
$maxl=0;
$maxrn=0;
$maxrj=0;
 foreach($arr as $array){
     
    
    if($array["kelas"]=="Laravel" && $maxl<$array['nilai']){
        $maxl=$array['nilai'];
     $fxar["Laravel"]=['nama'=>$array['nama'],'kelas'=>$array['kelas'],'nilai'=>$array['nilai']];
     }
      elseif($array["kelas"]=="React Native" && $maxrn<$array['nilai']){
         $maxrn=$array['nilai'];
      $fxar["React Native"]=['nama'=>$array['nama'],'kelas'=>$array['kelas'],'nilai'=>$array['nilai']];
      }elseif($array["kelas"]=="React JS" && $maxrj<$array['nilai']){
         $maxrj=$array['nilai'];
      $fxar["React JS"]=['nama'=>$array['nama'],'kelas'=>$array['kelas'],'nilai'=>$array['nilai']];
      }
     
 }
 print_r($fxar);
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