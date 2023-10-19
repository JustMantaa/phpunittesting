<?php
class WordCount
{
    public function countWords($sentence)
    {
        // explode berfungsi untuk memecah kalimat berdasarkan spasi
        // count berfungsi untuk menghitung kata yang telah dipecah oleh explode
        return count(explode(" ", $sentence));
    }
}
?>