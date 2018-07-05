<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    var $folder =   "profile";
    var $tables =   "user";
    var $title  =   "Data Admin";
    // var $id     =  	$this->session->userdata('user_id');
    
    function __construct() {
        parent::__construct();
        $this->load->helper('string');
        
    }
    
    
   /* function index()
    {
        $data['title']=  $this->title;
        $data['record']=  $this->mcrud->get_mahasiswa();
		$this->template->load('index', $this->folder.'/view',$data);
    }*/

    public function index($value='')
    {
    	$id     =  	$this->session->userdata('user_id');
        if(isset($_POST['submit']))
        {
            
            $user['user_nama_lengkap'] =   $this->input->post('nama');
            $user['user_username'] 	   =   $this->input->post('uname');
            if (!empty($this->input->post('pass'))) {
	            $pass0   =   $this->input->post('pass');
	            $pass1   =   $this->input->post('pass1');
	            if ($pass0 == $pass1 ) {
	            	$user['user_password'] =  md5($pass0);
	            }else{
	            	$data= 'Password tidak sama! Silahkan ulangi  lagi.';
	                $this->session->set_flashdata('error',$data);
	            	redirect('profile');
	            }
           	}

            if ($this->mcrud->update($this->tables,$user,'user_id',$id)){
                $this->session->set_userdata($user);
				$data= 'Sukses! Data telah terupdate.';
                $this->session->set_flashdata('sukses',$data);
            	redirect('profile');

                redirect('dashboard');
            }else{
                echo "error";
            }
            
        }
        else{
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $data['row']=  $this->mcrud->getByID($this->tables,'user_id',$id)->row_array();
            $this->template->load('index', $this->folder.'/edit',$data);
        }
    }



}
?>