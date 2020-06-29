<?php
//pseudo code
//buat function perolehan_medali yang akan menerima parameter berupa array
//cek apakah parameter yang dikirim berisi atau kosong, jika berisi maka lanjut, jika kosong maka menampilkan pesan No Data
//buat variabel yang berguna untuk menampung negara apa saja yang ada pada array secara unique/tidak duplikat
//buat variabel perolehan yang berupa array untuk menampung hasil perhitungan perolehan medali
//buat looping berdasarkan negara, lalu masukkan ke variabel perolehan berupa kerangka array yang berisi negara, dan juga set jumlah perolehan emas,perak dan perunggu menjadi 0
//buat looping untuk mengurai array yang telah dikirimkan, lalu di dalam looping array inputan buat looping baru berasarkan variabel negara yang berisi daftar negara secara unique
//lalu cek apakah negara di dalam array[0] sama dengan negara yang ada di dalam variabel negara DAN value array[1] adalah emas, jika iya ubah data pada variabel perolehan berdasarkan indeks negara, set jumlah emas di dalam variabel perolehan di tambah 1
//lalu cek apakah negara di dalam array[0] sama dengan negara yang ada di dalam variabel negara DAN value array[1] adalah perak, jika iya ubah data pada variabel perolehan berdasarkan indeks negara, set jumlah perak di dalam variabel perolehan di tambah 1
//lalu cek apakah negara di dalam array[0] sama dengan negara yang ada di dalam variabel negara DAN value array[1] adalah perunggu, jika iya ubah data pada variabel perolehan berdasarkan indeks negara, set jumlah perunggu di dalam variabel perolehan di tambah 1
//jika sudah return / kembalikan nilai berupa array yang ada didalam variabel perolehan
function perolehan_medali($arr){
if(!empty($arr)){
    $negara=array_unique(array_column($arr,0));
    $perolehan = [];
    foreach($negara as $ct){
        $perolehan[]=['negara'=>$ct,'emas'=>0,'perak'=>0,'perunggu'=>0];
    }
    foreach($arr as $array){
    foreach($negara as $key => $neg){
    if($array[0]==$neg && $array[1]=='emas'){
        $perolehan[$key]['emas']=$perolehan[$key]['emas']+1;
    }
    elseif($array[0]==$neg && $array[1]=='perak'){
        $perolehan[$key]['perak']=$perolehan[$key]['perak']+1;
    }
    elseif($array[0]==$neg && $array[1]=='perunggu'){
        $perolehan[$key]['perunggu']=$perolehan[$key]['perunggu']+1;
    }
    }
    }
    return $perolehan;
}else{
    return "No Data";
}
}
echo "<pre>";
print_r(perolehan_medali(array(
    array('Indonesia','emas'),
    array('India','perak'),
    array('Korea Selatan','emas'),
    array('India','perak'),
    array('India','emas'),
    array('Indonesia','perak'),
    array('Indonesia','emas')
)));
echo "</pre>";
echo "<br>";
print_r(perolehan_medali([]));
?>