<?php
class Matakuliah extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
     }
    public function index()
 
    {
        // $this->load->view('view-form-matakuliah');
        $this->load->view('p6/view-form');
    }
    // public function cetak()
    // {
    //     $data = [
    //         'kode' => $this->input->post('kode'),
    //         'nama' => $this->input->post('nama'),
    //         'sks'  => $this->input->post('sks')
    //     ];
    //     $this->load->view('view-data-matakuliah', $data);
    // }
    public function cetak()
    {
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('kode', 'Kode Matakuliah','required|min_length[3]', ['required' => 'Kode Matakuliah Harus diisi','min_lenght' => 'Kode terlalu pendek']);
        // $this->form_validation->set_rules('nama', 'Nama Matakuliah','required|min_length[3]', ['required' => 'Nama Matakuliah Harus diisi','min_lenght' => 'Nama terlalu pendek']);

        // if ($this->form_validation->run() != true) { $this->load->view('view-form-matakuliah');
        // } else {
        //         $data = [
        //         'kode' => $this->input->post('kode'),
        //         'nama' => $this->input->post('nama'),
        //         'sks'  => $this->input->post('sks')
        //         ];
        //         $this->load->view('view-data-matakuliah', $data);
        // }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nim'         , 'nim','required|min_length[8]|numeric',[
            'required' => 'NIM Harus diisi',
            'min_lenght' => 'NIM minimal 8 angka',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('nama'        , 'nama','required|min_length[3]|alpha',[
            'required' => 'Nama Harus diisi dan berupa huruf',
            // 'alpha' => 'tst',
            'min_lenght' => 'Nama terlalu pendek',
            'alpha' => 'test'
        ]);
        // $this->form_validation->set_rules('reg[dob]'    , 'Date of birth', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]'); 
        $this->form_validation->set_rules('tmptlhr'     , 'Tempat lahir','required|min_length[3]',  ['required' => 'Tempat lahir Harus diisi','min_lenght' => 'Tempat lahir terlalu pendek']);
        $this->form_validation->set_rules('alamat'      , 'alamat','required|min_length[3]',        ['required' => 'alamat Harus diisi','min_lenght' => 'alamat terlalu pendek']);

        if ($this->form_validation->run() != true) { $this->load->view('p6/view-form');
        } else {
                $data = [
                'nim'       => $this->input->post('nim'),
                'nama'      => $this->input->post('nama'),
                'date'      => $this->input->post('date'),
                'tmptlhr'   => $this->input->post('tmptlhr'),
                'alamat'    => $this->input->post('alamat')
                ];
                $this->load->view('p6/view-data', $data);
        }
    }
    
}
