<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Admindashboard extends CI_Controller {

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

    		$data = array() ;

	    	$data['message'] = "Welcome to EndiChat Superadmin panel dashboard." ;

	    	$this->load->view('admindashboard/header.php') ;

	    	$this->load->view('admindashboard/leftpanel.php') ;

	    	$this->load->view('admindashboard/index.php', $data) ;

	    	$this->load->view('admindashboard/footer.php') ;

    	} else {
    		redirect('admin') ;
    	}
    	
    }







    public function sitesettings()
    {       
        if($this->session->userdata('admindata') == "MlkiwSeQAz35361" && $this->session->userdata('session_status') != "")
        {
            $data = array() ;
            if($this->input->post())
            {
            	$data_for_update = array('app_name' => $this->input->post('appname'),
                                            'app_slogan' => $this->input->post('appslogan'),
                                            'app_description' => $this->input->post('appdescription'),
                                        'app_emailid' => $this->input->post('appemailid'),
                                    'app_phone' => $this->input->post('appphoneno'),
                                'app_mobile' => $this->input->post('appmobileno')) ;

                $id = 1 ;
                $fieldname = 'app_settings_id' ;
                $tablename = 'site_settings' ;
                $update_done = $this->Mastermodelfile->UpdateRowIntoDatabase($id, $tablename, $data_for_update, $fieldname) ;

                if(isset($update_done) && $update_done != "")
                {
                    $this->session->set_flashdata('sitesettingsupdate', 'App settings updated successfully. Thank You.');
                    redirect('admindashboard/sitesettings/');
                } else {
                    $this->session->set_flashdata('sitesettingsupdate', 'There is a problem to save data. Please try again later.');
                    redirect('admindashboard/sitesettings/');
                }
            }
            $data['sitesetting'] = $this->Mastermodelfile->SelectDataByWhereArrayFormat('site_settings', 1, 'app_settings_id') ;
            $this->load->view('admindashboard/header.php');
            $this->load->view('admindashboard/leftpanel.php');
            $this->load->view('admindashboard/sitesettings.php', $data);
            $this->load->view('admindashboard/footer.php');
        } else {
            redirect('admin') ;
        }
    }





    public function changepassword()
    {
    	if($this->session->userdata('admindata') == "MlkiwSeQAz35361" && $this->session->userdata('session_status') != "")
    	{
    		$data = array() ;
    		$this->load->view('admindashboard/header.php');
            $this->load->view('admindashboard/leftpanel.php');
            $this->load->view('admindashboard/changepassword.php', $data);
            $this->load->view('admindashboard/footer.php');
    	} else {
    		redirect('admin') ;
    	}
    }




    public function changepasswordprocess()
    {
    	if($this->session->userdata('admindata') == "MlkiwSeQAz35361" && $this->session->userdata('session_status') != "")
    	{
    		if($this->input->post())
    		{
    			$this->form_validation->set_rules('oldpassword','Old Password','required');
    			$this->form_validation->set_rules('newpassword','New Password','required');
    			$this->form_validation->set_rules('confirmpassword','Confirm Password','required');
    			if($this->form_validation->run()==FALSE)
                {
                    $this->session->set_flashdata('error',validation_errors());
                    redirect('admindashboard/changepassword/?valid=error');
                    exit();
                } else {
                	$oldpass = $this->input->post('oldpassword') ;
                	$newpass = $this->input->post('newpassword') ;
                	$confirmpassword = $this->input->post('confirmpassword') ;
                	$current_pass = $this->Mastermodelfile->SelectDataByWhereArrayFormat('superadmin', 1, 'id') ;
                	if(md5($oldpass) != $current_pass[0]['password'])
                	{
                		$this->session->set_flashdata('changepasswordmessage', 'Your old password does not match. Sorry!') ;
                    	redirect('admindashboard/changepassword/') ;
                	} else if(md5($oldpass) == $current_pass[0]['password']) {
                		if($newpass != $confirmpassword) {
                			$this->session->set_flashdata('changepasswordmessage', 'New password does not match with confirmed password. Sorry!') ;
                    		redirect('admindashboard/changepassword/') ;
                		} else if($newpass == $confirmpassword) {
                			$pass_to_update = md5($confirmpassword) ;
                			$update_pass_arr = array('password' => $pass_to_update) ;
                			$update_pass = $this->Mastermodelfile->UpdateRowIntoDatabase(1, 'superadmin', $update_pass_arr, 'id') ;
                			if(isset($update_pass) && $update_pass != "")
                			{
                				$this->session->set_flashdata('changepasswordmessage', 'Password updated successfully.') ;
                    			redirect('admindashboard/changepassword/') ;
                			} else {
                				$this->session->set_flashdata('changepasswordmessage', 'There are some error to update password. Sorry!') ;
                    			redirect('admindashboard/changepassword/') ;
                			}
                		}
                	}
                }
    		}
    	} else {
    		redirect('admin') ;
    	}
    }































}