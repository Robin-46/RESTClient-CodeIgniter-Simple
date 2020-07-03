<?php
Class ktp extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/integrationsystem/kelompok6/rest_ci/index.php/ktp";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data ktp
    function index(){
        $data['dataktp'] = json_decode($this->curl->simple_get($this->API.'/ktp'));
        $this->load->view('ktp/list',$data);
    }

    // insert data ktp
    // function create(){
    //     if(isset($_POST['submit'])){
    //         $data = array(
    //             'id'       =>  $this->input->post('id'),
    //             'nama'      =>  $this->input->post('nama'),
    //             'nomor'=>  $this->input->post('nomor'));
    //         $insert =  $this->curl->simple_post($this->API.'/ktp', $data, array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($insert)
    //         {
    //             $this->session->set_flashdata('hasil','Insert Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Insert Data Gagal');
    //         }
    //         redirect('ktp');
    //     }else{
    //         $this->load->view('ktp/create');
    //     }
    // }

    // // edit data ktp
    // function edit(){
    //     if(isset($_POST['submit'])){
    //         $data = array(
    //             'id'       =>  $this->input->post('id'),
    //             'nama'      =>  $this->input->post('nama'),
    //             'nomor'=>  $this->input->post('nomor'));
    //         $update =  $this->curl->simple_put($this->API.'/ktp', $data, array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($update)
    //         {
    //             $this->session->set_flashdata('hasil','Update Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Update Data Gagal');
    //         }
    //         redirect('ktp');
    //     }else{
    //         $params = array('id'=>  $this->uri->segment(3));
    //         $data['dataktp'] = json_decode($this->curl->simple_get($this->API.'/ktp',$params));
    //         $this->load->view('ktp/edit',$data);
    //     }
    // }

    // // delete data ktp
    // function delete($id){
    //     if(empty($id)){
    //         redirect('ktp');
    //     }else{
    //         $delete =  $this->curl->simple_delete($this->API.'/ktp', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($delete)
    //         {
    //             $this->session->set_flashdata('hasil','Delete Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Delete Data Gagal');
    //         }
    //         redirect('ktp');
    //     }
    // }
}