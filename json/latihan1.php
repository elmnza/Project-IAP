<?php

// $mahasiswa = [
//     [
//         "nama" => "Elsifani Tri Amanza",
//         "umur" => "20",
//         "email" => "elsifani06@gmail.com"
//     ],
//     [
//         "nama" => "Elsifani Tri Amanza",
//         "umur" => "20",
//         "email" => "elsifani06@gmail.com"
//     ]      
// ]; 

header('Content-Type: application/json');

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>