<?php 
/**
 * TIPE DATA PHP
 * - Variabel dalam PHP dapat menyimpan beberapa tipe data.
 * - PHP support beberapa tipe data : 
 *  - String
 *  - Integer
 *  - Boolean
 *  - Float
 *  - Array
 *  - Object
 *  - DLL
 * 
 * - Berikut kita akan mencoba beberapa tipe data
 */

 //String

 $string = 'ini tipe data string';
 echo $string;
 echo '<br>';

 //Integer
 $number = 1;
 echo $number;
 echo '<br>';

 //Float
 $float = 12.5;
 echo $float;
 echo '<br>';
 
 //Boolean
 $boolean = true || false; //untuk tipe data boolean hanya berbentuk true atau false
 echo $boolean;
 echo '<br>';

 //Array
 $array = array('budi','joko','lorem','ipsum');
 var_dump($array);   
 echo '<br>';

 //object
 class Person 
 {
     function name()
     {
         echo  'joko';
     }
 }
$objectPerson = new Person;
$objectPerson->name(); 




?>