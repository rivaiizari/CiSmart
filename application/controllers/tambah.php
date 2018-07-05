<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

    var $folder =   "public";
    var $title  =  "Tambah Data";
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        $data['title']=  $this->title;
        $data['record']=  $this->mcrud->get_mahasiswa();
        $this->template->load('public/index', $this->folder.'/add',$data);
    }
    public function add()
    {
        if(isset($_POST['submit']))
        {
            $npm        =   $this->input->post('npm');
            $kdpti      =   $this->input->post('kdpti');
            $jenis_beasiswa   =   $this->input->post('jenis_beasiswa');
            $nama       =   $this->input->post('nama');
            $jk         =   $this->input->post('jk');
            $kode_prodi   =   $this->input->post('kode_prodi');
            $jenjang_kuliah   =   $this->input->post('jenjang_kuliah');
            $semester   =   $this->input->post('semester');
            $ipk       =   $this->input->post('ipk');
            $pekerjaan   =   $this->input->post('pekerjaan');
            $tanggungan   =   $this->input->post('tanggungan');
            $penghasilan   =   $this->input->post('penghasilan');
            $penghasilan   = str_replace('.', '', $$penghasilan);
            $prestasi   =   $this->input->post('prestasi');
            $mulai   =   $this->input->post('mulai');
            $selesai   =   $this->input->post('selesai');
            $tahun   =   $this->input->post('tahun');
            $keterangan = $this->input->post('keterangan');
            $alamat   =   $this->input->post('alamat');
            $tlp    = $this->input->post('tlp');
            $nama_rekeneing   =   $this->input->post('nama_rekeneing');
            $bank   =   $this->input->post('bank');
            $no_rekening=$this->input->post('rekening');
            $status   =   $this->input->post('status');
            $sks   =   $this->input->post('sks');

            $mahasiswa          =   array(  'mahasiswa_no_urut'=>'',
                                            'mahasiswa_npm'=>$npm,
                                            'mahasiswa_kdpti'=>$kdpti,
                                            'mahasiswa_beasiswa'=>$jenis_beasiswa,
                                            'mahasiswa_nama'=>$nama,
                                            'mahasiswa_jk'=>$jk,
                                            'mahasiswa_kode_prodi'=>$kode_prodi,
                                            'mahasiswa_jenjang'=>$jenjang_kuliah,
                                            'mahasiswa_smt'=>$semester,
                                            'mahasiswa_ipk'=>$ipk,
                                            'mahasiswa_pekerjaan'=>$pekerjaan,
                                            'mahasiswa_jml_tanggungan'=>$tanggungan,
                                            'mahasiswa_penghasilan'=>$penghasilan,
                                            'mahasiswa_prestasi'=>$prestasi,
                                            'mahasiswa_mulai_bulan'=>$mulai,
                                            'mahasiswa_selesai_bulan'=>$selesai,
                                            'mahasiswa_tahun'=>$tahun,
                                            'mahasiswa_keterangan'=>$keterangan,
                                            'mahasiswa_alamat'=>$alamat,
                                            'mahasiswa_telepon'=>$tlp,
                                            'mahasiswa_nama_mhs_direkening'=>$nama_rekeneing,
                                            'mahasiswa_nama_bank'=>$bank,
                                            'mahasiswa_no_rekening'=>$no_rekening,
                                            'mahasiswa_status'=>$status,
                                            'mahasiswa_sks'=>$sks,
                                            'mdb'=>'1');
            $this->mcrud->insert($this->tables,$mahasiswa);
            redirect($this->uri->segment(1));
            echo "<script>alert('Data berhasil dimasukan.');</script>";
           /* $dat=  array('info' => $nama. 'telah diinputkan.');
            $this->session->set_userdata($data);*/


        }
        else
        {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $data['no_epsbed']=  $this->mcrud->getAll('no_epsbed');
            $data['pekerjaan_orang_tua']=  $this->mcrud->getAll('pekerjaan_orang_tua');
            $data['jenjang']=  $this->mcrud->getAll('jenjang');
            $data['beasiswa']=  $this->mcrud->getAll('beasiswa');
            $this->template->load('index', $this->folder.'/add',$data);
        }
    }

    public function cek_npm()
    {
        $value=$this->mcrud->get_npm_sama($this->input->post('mahasiswa_npm'));
        echo $value;  
    }

}

?>