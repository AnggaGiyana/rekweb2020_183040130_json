<?php  

$mahasiswa = [
    [
        "nama" => "Angga Giyana Putra",
        "nrp" => "183040130",
        "email" => "anggagiyana25@gmail.com"
    ],
    [
        "nama" => "Erick Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
        
?>