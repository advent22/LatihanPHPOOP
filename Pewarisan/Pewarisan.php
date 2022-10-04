<?php

trait Role{
    abstract public function getRole():String;
}

class ParentClass
{
    // Deklarasi Variable
    public $nama;
    public $umur;
    public $marga;
    public static $index;
    public $is_status;

    // Membuat Constructor
    public function __construct($nama, $umur, $is_status = "Bapak") {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->marga = 'Tan';
        self::$index = 1;
        $this->is_status = $is_status;
    }

    public function getMarga(){
        return $this->marga;
    }

    public function getName(){
        return $this->nama;
    }

    public function getStatus(){
        return $this->is_status;
    }

    public function getUmur(){
        return $this->umur;
    }

    public function display(){
        echo 'No' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'Marga: ' . $this->getMarga() . '<br>';
        echo 'Umur: ' . $this->getUmur() . '<br>';
        if($this->is_status == 'Bapak'){
            echo 'Status: ' . $this->getStatus() . '<br>';
            $this->space() . '<br>';
        }else{
            echo 'Status: ' . $this-> getStatus() . '<br>';
        }
    }

    public function space(){
        echo '<hr>';
    }
}

class ChildClass extends ParentClass
{
    use Role;
    public $role;

    public function __construct($nama, $umur, $is_status, $role = 'Siswa')
    {
        parent::__construct($nama, $umur, $is_status);
        $this->nama = $nama;
        $this->umur = $umur;
        $this->role = $role;
    }

    public function getAllDisplay(){
        $this->display() . '<br>';
        echo 'Jabatan: ' . $this->getRole();
    }

    public function getRole(): string {
        return $this->role;
    }
}

$parentclass = new ParentClass('Asep', 37, 'Bapak');

$bocil = new ChildClass('Arief', 15, 'Anak');
$bocil1 = new ChildClass('Satrio', 17, 'Anak');

echo $parentclass->display();
echo $bocil->getAllDisplay();