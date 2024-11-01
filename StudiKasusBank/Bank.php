<?php
class Bank{
  // properti
  protected $norek;
  public $nama;
  private $saldo;

  // property static dan konstanta
  static $jml = 0;
  const BANK = 'Bank Syariah Nurul Fikri';

  public function __construct($no, $nasabah, $saldo)
  {
    $this->norek = $no;
    $this->nama = $nasabah;
    $this->saldo = $saldo;
    self::$jml++;
  }

  public function setor($uang){
    // $this->saldo = $this->saldo + $uang;
    $this->saldo += $uang;
  }

  public function ambil($uang){
    // $this->saldo = $this->saldo - $uang;
    $this->saldo -= $uang;
  }

  public function cetak(){
    echo '<b><u>'.self::BANK.'</u></b>';
    echo '<br/>No.Rekening: '.$this->norek;
    echo '<br/>Nama Nasabah: '.$this->nama;
    echo '<br/>Saldo: Rp. '.number_format($this->saldo,0,',','.');
    echo '<hr/>';
  }
}
?>