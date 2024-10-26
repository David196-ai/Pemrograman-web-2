<?php

require_once "buku.php";

class listbuku{

    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'James.W', 'informatika', '2024'),
            new buku('Matematika Diskrit', 'Bambang', 'andi publisher', '2023'),
            new buku('Kalkulus 2', 'Iyan', 'erlangga', '2022'),
            new buku('Metode Penelitian', 'Iqbal', 'informatika sains', '2021'),
        );

        return $list_buku;
    }
}