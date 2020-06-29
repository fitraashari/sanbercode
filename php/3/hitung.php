<?php
//pseudocode
//buat function hitung yang menerima parameter berupa string
//lalu buat filter string menggunakan regex untuk memisahkan antara digit awal, operator dan digit akhir, lalu cek apakah filter menemukan hasil, jika filter berisi hasil maka lanjut, jika tidak muncul error
//saring data menggunakan regex, tampung hasil filter kedaalam variabel hasil berupa array, hasil[0] berupa string inputan awal, hasil[0] merupakan hasil filter angka 0-9 sebelum filter operator aritmatika, hasil[1] berupa hasil filter operator aritmatika(+,-,*,:,%), hasil[3] berupa hasil filter angka 0-9 setelah filter operator aritmatika, jika filter berhasil ditemukan maka lanjut, jika tidak muncul pesan error
//tampung hasil[2] yang berupa hasil filter operator aritmatika kedalam variabel operator
//tampung hasil[1] filter angka sebelum filter operator aritmatika kedalam variable digit1
//tampung hasil[3] filter angka setelah filter operator aritmatika kedalam digit2
// lalu gunakan switch case untuk mengecek operator aritmatika yang digunakan
//cek apakah operator memiliki nilai "+", jika iya jumlahkan digit1+digit2
//cek apakah operator memiliki nilai "-", jika iya kurangkan digit1-digit2
//cek apakah operator memiliki nilai "*", jika iya kalikan digit1*digit2
//cek apakah operator memiliki nilai ":", jika iya bagi digit1/digit2
//cek apakah operator memiliki nilai "%", jika iya hitung sisa dari pembagian digit1 dengan digit2 digit1%digit2
//hasil perhitungan ditampung dalam variabel res, lalu di return untuk mengembalikan nilai hasil angka perhitungan

//fungsi hitung
function hitung($str){
if(!empty(preg_match('/(\d+)(?:\s*)([\+\-\*\:\%])(?:\s*)(\d+)/', $str, $hasil))){ //cek apakah filter ditemukan
    $operator = $hasil[2];//tampung hasil filter berupa operator aritmatika
	$digit1 = $hasil[1];//tampung nilai digit awal sebelum operator
    $digit2 = $hasil[3];//tampung digit akhir setelah operator
    switch($operator){
        case '+'://cek nilai operator
            $res = $digit1 + $digit2;//lakukan perhitungan dan ditampung hasilnya kedapam variabel res
            break;//break/hentikan pengecekan
        case '-':
            $res = $digit1 - $digit2;
            break;
        case '*':
            $res = $digit1 * $digit2;
            break;
        case ':':
            $res = $digit1 / $digit2;
            break;
        case '%':
            $res = $digit1 % $digit2;
            break;
    }
	//var_dump($hasil);
    return $res;//mengembalikan nilai hasilperhitungan
}else{
	return "Error";//jika filter tidak ditemukan maka error
}
}
echo hitung("102*2");
echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");

?>