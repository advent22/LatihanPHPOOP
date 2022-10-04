<?php
trait ApaKabar
{
    public function apaKabar()
    {
        echo static::class . 'dari apa kabar?';
    }

    // abstract public function displayClass();
}
//interface adalah antar muka 
/* syarat dalam membuat interface:
     1. interface tidak boleh memiliki properties
     2. interface tidak boleh memiliki code body
     3. interface hanya boleh memiliki assign function 
     4. type akses modifier hanya bisa public 
 */
 
interface Fuel{
    //public $type;
    public function getType($type);

 }

class Pesan
{
    use ApaKabar, SelamatPagi;
        

    // public function displayClass()
    // {
    //     echo static::class . ' dari function displayClass';
    // }
}

// Inisialisasi class objek
$pesan = new Pesan();
echo $pesan->apaKabar();
// echo $pesan->displayClass();
/* Output
Pesan dari apa kabar?
 */