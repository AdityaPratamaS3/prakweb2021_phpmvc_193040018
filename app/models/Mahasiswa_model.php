<?php


class Mahasiswa_model
{
  private $dbh; //database handler
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }















  // private $mhs = [
  //   [

  //     "nama" => "Aditya pratama suherlan",
  //     "nrp" => "193040018",
  //     "email" => "Adityaps16@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Suherlan Pratama",
  //     "nrp" => "193040000",
  //     "email" => "suherlan@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "pratama suherlan",
  //     "nrp" => "193040001",
  //     "email" => "pratamaSUherlan@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ]
  // ];



  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
