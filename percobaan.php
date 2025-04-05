<?php
$mahasiswa = [
	["nama" => "almer ", "kelas" => "11", "jurusan" => "RPL"],
	["nama" => "ahay ", "kelas" => "12", "jurusan" => "TKJ"]
];

$mahasiswa[] = ["nama" => "ahok", "kelas" => "11", "jurusan" => "RPL"];


// konek ke database
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);


$hasil = [];
while ( $row = mysqli_fetch_assoc($result) ) {
	$hasil[] = $row;
}


foreach ($hasil as $mhs) {
	echo $mhs["jurusan"];
}




