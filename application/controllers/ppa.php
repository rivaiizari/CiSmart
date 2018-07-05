<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppa extends CI_Controller {

    var $folder =   "mahasiswa";
    var $tables =   "data_mahasiswa";
    var $title  =   "Data Mahasiswa Beasiswa PPA";
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        $data['title']=  $this->title;
        $data['record']=  $this->mcrud->get_beasiswa_ppa();
		$this->template->load('index', $this->folder.'/view-ppa',$data);
    }

    public function add()
    {
        if(isset($_POST['submit']))
        {
            $nama   =   $this->input->post('nama');
            $data   =   array('nama_gedung'=>$nama);
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $this->template->load('index', $this->folder.'/add',$data);
        }
    }

}

?>