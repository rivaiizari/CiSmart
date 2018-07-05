<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    var $folder =   "dashboard";
    var $tables =   "akademik_tahun_akademik";
    var $pk     =   "tahun_akademik_id";
    var $title  =   "Tahun Akademik";
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        $data['all']=  $this->mcrud->countAll('data_mahasiswa');
        $data['ppa']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_beasiswa',1);
        $data['bbp']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_beasiswa',2);
        $data['mi']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_kode_prodi',57401);
        $data['si']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_kode_prodi',57201);
        $data['ti3']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_kode_prodi',55401);
        $data['ti1']=  $this->mcrud->countAllby('data_mahasiswa','mahasiswa_kode_prodi',55201);
        $data['Pppa']= ($data['ppa']/$data['all'])*100;
        $data['Pbbp']= ($data['bbp']/$data['all'])*100;

        $data['ppami']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 1 AND mahasiswa_kode_prodi = 57401')->num_rows();
        $data['ppasi']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 1 AND mahasiswa_kode_prodi = 57201')->num_rows();
        $data['ppati3']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 1 AND mahasiswa_kode_prodi = 55401')->num_rows();
        $data['ppati1']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 1 AND mahasiswa_kode_prodi = 55201')->num_rows();

        $data['P_ppami']= ($data['ppami']/$data['ppa'])*100;
        $data['P_ppasi']= ($data['ppasi']/$data['ppa'])*100;
        $data['P_ppati3']= ($data['ppati3']/$data['ppa'])*100;
        $data['P_ppati1']= ($data['ppati1']/$data['ppa'])*100;

        $data['bbpmi']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 2 AND mahasiswa_kode_prodi = 57401')->num_rows();
        $data['bbpsi']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 2 AND mahasiswa_kode_prodi = 57201')->num_rows();
        $data['bbpti3']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 2 AND mahasiswa_kode_prodi = 55401')->num_rows();
        $data['bbpti1']=  $this->mcrud->queryBiasa('Select * from data_mahasiswa where mahasiswa_beasiswa = 2 AND mahasiswa_kode_prodi = 55201')->num_rows();

        $data['P_bbpmi']= ($data['bbpmi']/$data['bbp'])*100;
        $data['P_bbpsi']= ($data['bbpsi']/$data['bbp'])*100;
        $data['P_bbpti3']= ($data['bbpti3']/$data['bbp'])*100;
        $data['P_bbpti1']= ($data['bbpti1']/$data['bbp'])*100;

        $data['title']=  $this->title;
		$this->template->load('index', $this->folder.'/view',$data);
    }

}

?>