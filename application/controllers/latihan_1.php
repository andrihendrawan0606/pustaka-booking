<?php
class Latihan_1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }
//  public function penjumlahan($n1, $n2)
//  {
//  $this->load->model('ModelLatihan1');
//  $hasil = $this->ModelLatihan1->jumlah($n1, $n2);
//  echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
// .$hasil;
//  }

 public function penjumlahan($n1, $n2)
 {
 $this->load->model('ModelLatihan1');
 $data['nilai1'] = $n1;
 $data['nilai2'] = $n2;
 $data['hasil'] = $this->ModelLatihan1->jumlah($n1, $n2);
 $this->load->view('ViewLatihan1', $data);
 }

}