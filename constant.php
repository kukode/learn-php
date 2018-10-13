<?php
/**
 * 
 * Pada PHP kita dapat mendefinisikan nilai konstanta
 * Nilai konstanta sendiri dapat kita artikan sebagai pemberian nilai default yang tidak dapat diganti 
 * apabila sudah kita deklarasikan
 * Berikut cara penulisan nilai konstanta di PHP menggunakan define(string,vakue,boolean) ini adalah parameter dalam constanta
 */

 define('GREETING','hello world',false);//apabila anda menambahkan parameter ke 3 dengan false maka ketika menulis greeting dengan huruf kecil akan terjadi error
 echo GREETING;
 //case senstive aktif dengan parameter ke 3 di isi false 
 echo greeting;


?>