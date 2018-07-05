<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    var $folder =   "master";
    var $tables =   "akademik_tahun_akademik";
    var $pk     =   "tahun_akademik_id";
    var $title  =   "Tahun Akademik";
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        $data['title']=  $this->title;
        $data['beasiswa']=  $this->mcrud->getAll('beasiswa');
        $data['jenjang']=  $this->mcrud->getAll('jenjang');
        $data['pekerjaan']=  $this->mcrud->getAll('pekerjaan_orang_tua');
        $data['epsbed']=  $this->mcrud->getAll('no_epsbed');
		$this->template->load('index', $this->folder.'/view',$data);
    }

}

?>