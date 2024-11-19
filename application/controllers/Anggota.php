<?php

class Anggota extends CI_Controller{

    public function index(){
        $data['judul']="Data Anggota Perpustakaan";
        $this->load->view('template/header',$data);
        $this->load->view('template/footer');
    }
    public function select(){
        //echo"function select";
    }
    public function delete($id,$nama){
       // echo"delete id : ".$id."Nama :".$nama;
    }
}

?>