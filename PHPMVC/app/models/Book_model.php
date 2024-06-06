<?php

class Book_model
{
    private $books =[

        [
           'judul' =>'hujan',
           'penulis' =>'tere liye',
           'tanggal_selesai' =>'2022-06-22'
       ],
        [
           'judul' =>'pulang',
           'penulis' =>'tere liye',
           'tanggal_selesai' =>'2022-07-22'
       ],
        [
           'judul' =>'pergi',
           'penulis' =>'tere liye',
           'tanggal_selesai' =>'2022-0730'
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
