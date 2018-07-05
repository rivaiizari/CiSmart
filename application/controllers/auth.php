<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class auth extends CI_Controller
{
    
    
    function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }
    
    
    function index()
    {
        $this->form_validation->set_rules('kode_aman','Captcha','trim|callback_login|required');
        
        if ($this->form_validation->run()==false) {
            $this->load->view('login',array('image'=>$this->create_captcha()));
        }else{
            if ($this->login()==true) {
               redirect('dashboard');
            };
        }
    }

    public function create_captcha()
    {
        $vals = array(
            'img_path'   => './captcha/',
            'img_url'    => base_url().'captcha/',
            'img_width'  => '130',
            'img_height' => 49,
            'word'  => strtoupper(random_string('alnum', 5)),
            'border' => 0, 
            'expiration' => 7200
            );

            // create captcha image
        $cap = create_captcha($vals);

            // store image html code in a variable
        $data = $cap['image'];

            // store the captcha word in a session
        $this->session->set_userdata('mycaptcha', $cap['word']);
        return $data;
    }
    

    function login()
    {
        if(isset($_POST['submit']))
        {

            $username   =  $this->input->post('username');
            $password   =  $this->input->post('password');
            $capth        = strtoupper( $this->input->post('kode_aman'));

            if($this->session->userdata('mycaptcha')==$capth){
                $login=  $this->db->get_where('user',array('user_username'=>$username,'user_password'=>  md5($password)));
                if($login->num_rows()>0)
                {
                    $r=  $login->row_array();
                    $data=array('user_id'=>$r['user_id'],
                                'user_nama_lengkap'=>$r['user_nama_lengkap'],
                                'user_username'=>$r['user_username'],
                                 );
                    $this->session->set_userdata($data);
                    return true;
                    
                }
                else
                {
                    $this->form_validation->set_message('login','Password dan Username salah! Coba ulangi lagi.');
                    return false;
                }
            }else{
                    $this->form_validation->set_message('login','Kode keamanan salah! Coba ulangi lagi.');
                    return false;;
            }
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
    
    function logoutpmb()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}