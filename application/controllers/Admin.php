<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {        

        parent::__construct();

        $this->load->model('Mastermodelfile');

		$this->load->helper('url');

		$this->load->library('email');

		$this->load->library('session');

		$this->load->library('form_validation');

    }




    public function index()
    {

    	if($this->session->userdata('admindata') == "MlkiwSeQAz35361" && $this->session->userdata('session_status') != "")
    	{
    		redirect('admindashboard') ;
    	
    	} else {

    		$data = array() ;

	    	$data['admin_heading'] = "Welcome To EndiChat SuperAdmin Panel" ;

	    	$this->load->view('admin/header.php') ;

	    	$this->load->view('admin/body.php', $data) ;

	    	$this->load->view('admin/footer.php') ;

    	}
    	
    }





    public function admin_login_processor()
    {
    	if($this->input->post())
    	{
    		$this->form_validation->set_rules('username','User Name','required|trim');

    		$this->form_validation->set_rules('password','Password','required');

    		if($this->form_validation->run()==FALSE)
    		{
    			$this->session->set_flashdata('error',validation_errors());

				redirect('admin/?validation=error');

				exit();
    		
    		} else {

    			$username = trim($this->input->post('username')) ;

				$password = md5($this->input->post('password')) ;

				$admin_db_value = $this->Mastermodelfile->SelectDataByWhereArrayFormat('superadmin', 1, 'id') ;

				$db_user = $admin_db_value[0]['username'] ;

				$db_pass = $admin_db_value[0]['password'] ;

				if($username == $db_user && $db_pass == $password)
				{
					$session_data = array(

					    'admindata' => 'MlkiwSeQAz35361',

					    'session_status' => base64_encode(time())

					) ;

					$this->session->set_userdata($session_data);

					$set_flash_messge = array('message' => 'Welcome to EndiChat SuperAdmin panel.','class' => 'alert alert-success fade in');

					$this->session->set_flashdata('superadminloginsuccess', $set_flash_messge);

					redirect('admindashboard') ;
				
				} else {

					$set_flash_messge_wrong = array('message' => 'You put wrong credential. Please check once again.','class' => 'alert alert-success fade in');

					$this->session->set_flashdata('superadminloginfail', $set_flash_messge_wrong);

					redirect('admin/?validation=wrongcredential') ;

				}
    		}
    	}
    }






    public function admin_logout()
    {
    	if($this->session->userdata('admindata') == "MlkiwSeQAz35361")
    	{
    		$session_data_unset = array(

					    'admindata' => '',

					    'session_status' => ''

					) ;

    		$this->session->unset_userdata($session_data_unset);

			$this->session->sess_destroy();

			redirect('admin') ;
    	
    	} else {

    		redirect('admindashboard') ;

    	}
    }












}