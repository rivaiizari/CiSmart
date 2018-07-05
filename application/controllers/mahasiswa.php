<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    var $folder =   "mahasiswa";
    var $tables =   "data_mahasiswa";
    var $title  =   "Data Mahasiswa";
    
    function __construct() {
        parent::__construct();
        $this->load->helper('string');
        
    }
    
    
    function index()
    {
        $data['title']=  $this->title;
        $data['record']=  $this->mcrud->get_mahasiswa();
		$this->template->load('index', $this->folder.'/view',$data);
    }
    public function add()
    {
        if(isset($_POST['submit']))
        {
            $prodi=  $this->mcrud->getAll('no_epsbed');


            $npm        =   $this->input->post('npm');
            $kdpti      =   '53021';
            $jenis_beasiswa   =   $this->input->post('jenis_beasiswa');
            $nama       =   $this->input->post('nama');
            $jk         =   $this->input->post('jk');

            $kd_jurusan= substr($npm, 3,2);
            if ($kd_jurusan=='02') {
                 $kode_prodi ='57401';
                 $jenjang_kuliah =3;
            }
            elseif ($kd_jurusan=='01') {
                $kode_prodi ='55401';
                $jenjang_kuliah=3;
            }elseif ($kd_jurusan=='12') {
                $kode_prodi ='57201';
                $jenjang_kuliah=4;
            }else{
                $kode_prodi ='55201';
                $jenjang_kuliah=4;
            }

            // thn masuk
            $tahun_masuk = '20'.substr($npm, 0,2);
            // semester
            $thn_now    =   date('Y');
            $thn_msk    =   (int)$tahun_masuk;
            $semester   =   ($thn_now - $thn_msk)*2;

            $ipk       =   $this->input->post('ipk');
            $pekerjaan   =   $this->input->post('pekerjaan');
            $tanggungan   =   $this->input->post('tanggungan');

            $penghasilan   =   $this->input->post('penghasilan');
            $penghasilan   = str_replace('.', '', $penghasilan);
            $penghasilan   = 12 *$penghasilan;

            $mulai   =   '2016-01-01';
            $selesai   =  '2016-12-31';
            $tahun   =   '2016';
            $keterangan = '';

            $prestasi   =   $this->input->post('prestasi');
            $alamat   =   $this->input->post('alamat');
            $tlp    = $this->input->post('tlp');
            $nama_rekeneing   =   $this->input->post('nama_rekeneing');
            $bank   =   $this->input->post('bank');
            $no_rekening=$this->input->post('rekening');
            $status   =   $this->input->post('status');
            $sks   =   $this->input->post('sks');
            $nama_ortu = $this->input->post('ortu');

            $login = $this->session->userdata['user_id'];
            $now = date('Y-m-d h:i:s');

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
                                            'mahasiswa_nama_ortu'=>$nama_ortu,
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
                                            'mahasiswa_tahun_masuk'=>$tahun_masuk,
                                            'mahasiswa_nama_mhs_direkening'=>$nama_rekeneing,
                                            'mahasiswa_nama_bank'=>$bank,
                                            'mahasiswa_no_rekening'=>$no_rekening,
                                            'mahasiswa_status'=>$status,
                                            'mahasiswa_sks'=>$sks,
                                            'mdb'=>$login,
                                            'mdd'=> $now);

            if ($this->mcrud->insert($this->tables,$mahasiswa)) {
                 $data= $nama.' telah berhasil diinputkan.';
                $this->session->set_flashdata('sukses',$data);
                redirect('mahasiswa');   
            }else{
                echo "error";
            }

                    
            
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
    public function edit($value='')
    {
        if(isset($_POST['submit']))
        {
            $npm        =   $this->input->post('npm');
            $nama       =   $this->input->post('nama');
            $jenis_beasiswa   =   $this->input->post('jenis_beasiswa');
            $jk         =   $this->input->post('jk');
            $kode_prodi   =   $this->input->post('kode_prodi');
            $jenjang_kuliah   =   $this->input->post('jenjang_kuliah');
            $ipk       =   $this->input->post('ipk');
            $prestasi   =   $this->input->post('prestasi');
            $nil_pre       =   $this->input->post('n_prestasi');
            $status   =   $this->input->post('status');
            $keterangan = $this->input->post('keterangan');
            $bank   =   $this->input->post('bank');
            $nama_rekening   =   $this->input->post('nama_rekening');
            $no_rekening=$this->input->post('rekening');
            $ortu   =   $this->input->post('ortu');
            $alamat   =   $this->input->post('alamat');
            $tlp    = $this->input->post('tlp');
            $pekerjaan   =   $this->input->post('pekerjaan');
            $tanggungan   =   $this->input->post('tanggungan');
            $penghasilan   =   $this->input->post('penghasilan');
            $sks   =   $this->input->post('sks');

            $mahasiswa          =   array(  'mahasiswa_npm'=>$npm,
                                            'mahasiswa_beasiswa'=>$jenis_beasiswa,
                                            'mahasiswa_nama'=>$nama,
                                            'mahasiswa_jk'=>$jk,
                                            'mahasiswa_kode_prodi'=>$kode_prodi,
                                            'mahasiswa_jenjang'=>$jenjang_kuliah,
                                            'mahasiswa_ipk'=>$ipk,
                                            'mahasiswa_pekerjaan'=>$pekerjaan,
                                            'mahasiswa_jml_tanggungan'=>$tanggungan,
                                            'mahasiswa_penghasilan'=>$penghasilan,
                                            'mahasiswa_prestasi'=>$prestasi,
                                            'mahasiswa_n_prestasi'=>$nil_pre,
                                            'mahasiswa_keterangan'=>$keterangan,
                                            'mahasiswa_alamat'=>$alamat,
                                            'mahasiswa_telepon'=>$tlp,
                                            'mahasiswa_nama_mhs_direkening'=>$nama_rekening,
                                            'mahasiswa_nama_bank'=>$bank,
                                            'mahasiswa_no_rekening'=>$no_rekening,
                                            'mahasiswa_status'=>$status,
                                            'mahasiswa_nama_ortu'=>$ortu,
                                            'mahasiswa_sks'=>$sks,
                                            'mdb'=>'1',
                                            );
            $value = $this->input->post('no_urut');
            if ($this->mcrud->update($this->tables,$mahasiswa,'mahasiswa_no_urut',$value)){
                $data= $nama.' telah berhasil diupdate.';
                $this->session->set_flashdata('sukses',$data);
                redirect('mahasiswa');
            }else{
                echo "error";
            }
            
        }
        else{
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $data['no_epsbed']=  $this->mcrud->getAll('no_epsbed');
            $data['pekerjaan_orang_tua']=  $this->mcrud->getAll('pekerjaan_orang_tua');
            $data['jenjang']=  $this->mcrud->getAll('jenjang');
            $data['beasiswa']=  $this->mcrud->getAll('beasiswa');
            $data['row']=  $this->mcrud->get_mahasiswabyid($value);
            $this->template->load('index', $this->folder.'/edit',$data);
        }
    }

    public function delete($value='')
    {
        
        if($this->mcrud->delete($this->tables,  'mahasiswa_no_urut',  $this->uri->segment(3)))
        {
             redirect($this->uri->segment(1));
        }
       
    }

    /*Data Mahasiswa*/
    function ppa()
    {
        $data['title']=  "Data Mahasiswa Pendaftar Beasiswa PPA";
        $data['record']=  $this->mcrud->get_beasiswa_ppa();
        $this->template->load('index', $this->folder.'/view-ppa',$data);
    }
    function bbp()
    {
        $data['title']=  "Data Mahasiswa Pendaftar Beasiswa BBP-PPA";
        $data['record']=  $this->mcrud->get_beasiswa_bbp();
        $this->template->load('index', $this->folder.'/view-bbp',$data);
    }
    function ppa_fix()
    {
        $data['all']=  $this->mcrud->countAll('data_mahasiswa');
        $data['ppa']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_beasiswa',1);
        $data['Pppa']= ($data['ppa']/$data['all'])*100;
        $j_PPA=round($data['Pppa']/100*205);

        $data1['title']=  "Data Mahasiswa Beasiswa PPA";
        $data1['record']=  $this->mcrud->get_beasiswa_ppa_limit($j_PPA);
        $this->template->load('index', $this->folder.'/view-ppa',$data1);
    }
    function bbp_fix()
    {
        $data['all']=  $this->mcrud->countAll('data_mahasiswa');
        $data['bbp']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_beasiswa',2);
        $data['Pbbp']= ($data['bbp']/$data['all'])*100;
        $j_BBP=round($data['Pbbp']/100*205);

        $data['title']=  "Data Mahasiswa Beasiswa BBP-PPA";
        $data['record']=  $this->mcrud->get_beasiswa_bbp_limit($j_BBP);
        $this->template->load('index', $this->folder.'/view-bbp',$data);
    }

}?>