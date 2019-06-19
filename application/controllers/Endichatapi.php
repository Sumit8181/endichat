<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// endichat api are developed here.//

class Endichatapi extends CI_Controller {

	public function __construct() {        

        parent::__construct();

        $this->load->model('Mastermodelfile');

		$this->load->helper('url');

		$this->load->library('email');

		$this->load->library('session');

        $this->load->library('form_validation');
        $this->_request = (object) \json_decode(file_get_contents('php://input'), true);
       

    }

    public function user_registration_process()
    {
      $senddata=[];
        
      $_data['firstname']=$_POST['firstname'];
      $_data['lastname']=$_POST['lastname'];
      $_data['emailid']= $_POST['emailid'];
      $_data['phonenumber']= $_POST['phonenumber'];
      $_data['zipcode']= $_POST['zipcode'];
      $_data['password']= $_POST['password'];
      if(isset($_data))
      {
          $isphone_exist=$this->Mastermodelfile->SelectDataByWhereObjectFormat('usermaster',$_data['phonenumber'],'phonenumber');
          
          if(!empty($isphone_exist))
           {
               $senddata['message']="user already registered by this phone number";
           }
        else{
       if(isset($_FILES['profile_pic']))
       {
           
           $config['upload_path']          = 'assets/userprofile' ;
           $config['allowed_types']        = 'gif|jpg|png|jpeg';
           $config['max_size']             = '51200' ;
           $config['max_width']            = '10000000';
           $config['max_height']           = '10000000';
           $config['encrypt_name']         = FALSE ;
           $this->load->library('upload', $config);
           if (! $this->upload->do_upload('profile_pic'))
           {
               $error2 = array('error' => $this->upload->display_errors());
           } else {
               $profile_pic = $this->upload->data(); 
               $profile_pics = $profile_pic['file_name'];
           }
           
       }
       $data=['firstname'=>$_data['firstname'],'lastname'=>$_data['lastname'],'emailid'=>$_data['emailid'],'phonenumber'=>$_data['phonenumber'],
       'zipcode'=>$_data['zipcode'],'password'=>md5($_data['password']),'profile_pic'=>$profile_pics];
      
       $registered=$this->Mastermodelfile->InsertRowIntoDatabase($data,'usermaster');
       
       if(isset($registered))
       {
        $senddata['message']="user registred successfully";

       }else{
           $senddata['message']="registration failed";
       }
    }
    }
       echo json_encode($senddata);
}

    public function user_login_process()
    {
        $senddata=[];
        $_data = \json_decode(file_get_contents('php://input'), true);
        $emailid=$_data['emailid'];
        $password=md5($_data['password']);
        
        $userdata=$this->Mastermodelfile->SelectDataByWhereObjectFormat('usermaster',$emailid,'emailid');
        if(!empty($userdata))
        {
        if($userdata[0]->emailid == $emailid && $userdata[0]->password == $password)
        {
        $senddata['message']="user logged in successfully";
        $info['firstname']=$userdata[0]->firstname;
        $info['lastneme']=$userdata[0]->lastname;
        $info['emailid']=$userdata[0]->emailid;
        $info['phonenumber']=$userdata[0]->phonenumber;
        $info['zipcode']=$userdata[0]->zipcode;
        $info['profile_pic']=base_url()."assets/userprofile/".$userdata[0]->profile_pic;
        $senddata['data']=$info;

        }else
        {
            $senddata['message']="login failed";
        }
    }else{
        $senddata['error']="user does not exists";
    }
        echo json_encode($senddata);
        }
    
        public function getuserlist()
        {
            $senddata=[];
            $users=$this->Mastermodelfile->SelectDataAllObjectFormat('usermaster');
            for($i=0;$i<count($users);$i++)
            {
            foreach($users as $user)
            {
                $data[$i]['firstname']=$user->firstname;
                $data[$i]['lastaname']=$user->lastname;
                $data[$i]['phonenumber']=$user->phonenumber;
                $data[$i]['profile_pic']=base_url()."assets/userprofile/".$user->profile_pic;
                $data[$i]['emailid']=$user->emailid;
            }
            }
            
            $senddata = $data;
            echo json_encode($data);

        }

        public function upload_any_files($id)
        {
            $senddata=[];
            $is_user=$this->Mastermodelfile->SelectDataByWhereObjectFormat('usermaster',$id,'id');
            
            if(isset($_FILES['any_file']) && !empty($is_user))
            {
                
                $config['upload_path']          = 'assets/uploadfiles' ;
                $config['allowed_types']        = 'gif|jpg|png|jpeg|mp4|3gp|mkv|flv|doc|docx|odt|pdf|rtf|txt|mp3|xlsx|wav';
                $config['max_size']             = '512000' ;
                $config['max_width']            = '10000000';
                $config['max_height']           = '10000000';
                $config['encrypt_name']         = FALSE ;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('any_file'))
                {
                    $error2 = array('error' => $this->upload->display_errors());
                } else {
                    $file = $this->upload->data(); 
                    $files = $file['file_name'];
                    $senddata['message']="File uploaded successfully";
            }
        }else{
            $senddata['message']="File not uploaded";
        }
        echo json_encode($senddata);
    }

     

}
?>