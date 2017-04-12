<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
        $name = 'main';     
        $data['user'] = $this->ion_auth->user()->row(); 
        $data['this_user_groups'] = $this->ion_auth->get_users_groups()->result();
        $this->template->admin_view($name,$data);  
	}
}
