<?php
//Encode
$mahasiswa = array(
    "nama" => "Restu",
    "nim" => "G.231.23.0024",
    "jurusan" => "Teknik Informatika"
);

$jsonData = json_encode($mahasiswa);

echo "<h3>Encode (Array → JSON):</h3>";
echo $jsonData;
echo "<hr>";


$jsonString = '{"nama":"Restu","nim":"G.231.23.0024","jurusan":"Teknik Informatika"}';

// Decode ke Object
$obj = json_decode($jsonString);

// Decode ke Array
$arr = json_decode($jsonString, true);

echo "<h3>Decode ke PHP Object:</h3>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br>";
echo "Jurusan: " . $obj->jurusan . "<br>";
echo "<hr>";

echo "<h3>Decode ke PHP Array:</h3>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "NIM: " . $arr["nim"] . "<br>";
echo "Jurusan: " . $arr["jurusan"] . "<br>";
?>
