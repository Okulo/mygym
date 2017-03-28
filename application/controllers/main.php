<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
   	public function index()
	{
        $name = 'main';         
        	$this->load->view('welcome_message');     
	}

	public function welcome()
	{
		$this->load->view('welcome_message');
	}

	public function profile()
	{
	   if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
        
       $data['user'] = $this->ion_auth->user()->row();
	
		 $name = 'profile';         
        $this->template->second_view($name,$data); 
	}
	public function info()
	{
        $name = 'info';         
        $this->template->second_view($name,""); 
        //$this->load->view('blocks/info_view');
	}
	   
}
