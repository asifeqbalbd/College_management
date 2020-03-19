<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Registration extends CI_Controller {

    	public function index()
    	{
    		$data['title'] = "Reg. Form";
    		$data['error'] = $this->session->flashdata('error');
    		$data['success'] = $this->session->flashdata('success');
    		$this->load->view('inc/header',$data);
            $this->load->view('inc/navbar1');
            $this->load->view('form');
            $this->load->view('inc/footer');
        }

        public function validation()
        {
          $this->form_validation->set_rules('name', 'Name', 'required');
          
          if ($this->form_validation->run() == false) 
          {
             $this->index();
         }
         else
         {
             if (!empty($_FILES['picture']['name'])) 
             {   
                $path = $_FILES['picture']['name'];
                $image_name = 'image-'.time().'.'.pathinfo($path, PATHINFO_EXTENSION); 
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1600;
                $config['max_height']           = 1200;
                $config['file_name']            = $image_name;  
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('picture'))
                {                	
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);  
                    $this->index();
                }
                else
                {
                    $vilg = $this->input->post('village');
                    $dis = $this->input->post('dis');
                    $thana = $this->input->post('thana');
                    $post = $this->input->post('Office');
                    $premanet_add = $vilg.", ".$post.", ".$thana.", ".$dis;
                    $data = array( 
                        "sid" => $this->input->post('sid'),  
                        "name" => $this->input->post('name'),
                        "birth" => $this->input->post('birth'),
                        "f_name" => $this->input->post('f_name'),
                        "m_name" => $this->input->post('m_name'),
                        "mobile" => $this->input->post('mobile'),
                        "gmobile" => $this->input->post('gmobile'),
                        "emaile" => $this->input->post('email'),
                        "course" => $this->input->post('course'),
                        "trade" => $this->input->post('trade'),
                        "session" => $this->input->post('session'),
                        "duration" => $this->input->post('duration'),
                        "roll" => $this->input->post('roll'),
                        "reg" => $this->input->post('reg'),
                        "premanet_add" => $premanet_add,
                        "passing" => $this->input->post('passing'),
                        "ondustry" => $this->input->post('ondustry'),
                        "cnumber" => $this->input->post('cnumber'),
                        "designation" => $this->input->post('designation'),
                        "salary" => $this->input->post('salary'),         
                        "image" => $image_name
                    );
                    $this->load->model('Upmodel');
                    if($this->Upmodel->insertdata($data) == true)
                    {
                        $this->session->set_flashdata('success', 'Inserted successfully'); 
                        $this->index();
                    }
                    else 
                    {
                        $this->session->set_flashdata('error', 'Insert failed'); 
                        $this->index();
                    }
                }
            }
            else
            {          
                $this->session->set_flashdata('error', 'Please select an image.'); 
                $this->index();
            }   
        }		
    }

    public function show()
    {
        if (!$this->session->userdata('logged_in')) 
        {
            redirect(base_url().'registration/login');
        }
        $data['title'] = "Data Table";
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $this->load->model('Upmodel');
        $data['result'] = $this->Upmodel->showdata();
        $data["msg"]=$this->session->flashdata('success');
        $this->load->view('inc/header',$data);
        $this->load->view('inc/navbar');
        $this->load->view('show');
        $this->load->view('inc/footer');
    }

    public function up_validation()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('details', 'District', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('session', 'Session', 'is_natural');
        $this->form_validation->set_rules('roll', 'Roll', 'is_natural');
        $this->form_validation->set_rules('reg', 'Reg.No', 'is_natural');
        
        if (!empty($_FILES['picture']['name'])) 
        {   
            $path = $_FILES['picture']['name'];
            $image_name = 'image-'.time().'.'.pathinfo($path, PATHINFO_EXTENSION); 
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['max_size']             = 1024;
            $config['max_width']            = 1600;
            $config['max_height']           = 1200;
            $config['file_name']            = $image_name;  
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picture'))
            {                   
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);  
                $this->index();
            }
            else
            {
                $data = array(    
                    "sid" => $this->input->post('sid'),  
                    "name" => $this->input->post('name'),
                    "birth" => $this->input->post('birth'),
                    "f_name" => $this->input->post('f_name'),
                    "m_name" => $this->input->post('m_name'),
                    "mobile" => $this->input->post('mobile'),
                    "gmobile" => $this->input->post('gmobile'),
                    "emaile" => $this->input->post('email'),
                    "course" => $this->input->post('course'),
                    "trade" => $this->input->post('trade'),
                    "session" => $this->input->post('session'),
                    "duration" => $this->input->post('duration'),
                    "roll" => $this->input->post('roll'),
                    "reg" => $this->input->post('reg'),
                    "premanet_add" => $premanet_add,
                    "passing" => $this->input->post('passing'),
                    "ondustry" => $this->input->post('ondustry'),
                    "cnumber" => $this->input->post('cnumber'),
                    "designation" => $this->input->post('designation'),
                    "name" => $this->input->post('salary'),         
                    "image" => $image_name
                );
                $id = $this->input->post('id');
                $this->load->model('Upmodel');
                if($this->Upmodel->updatedata($data, $id) == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully'); 
                    $this->show();
                }
                else 
                {
                    $this->session->set_flashdata('error', 'Insert failed'); 
                    $this->index();
                }
            }
        }
        else
        {          
            $this->session->set_flashdata('error', 'Please select an image.'); 
            $this->index();
        }   
    }

    public function deletedata(){
        $id = $this->uri->segment(3);
        $this->load->model('Upmodel');
        $a  =$this->Upmodel->delete($id);
        if($a == true){
            $this->session->set_flashdata("success","Delete Successfull...");
            redirect('registration/show');
        }
        else{
            $this->session->set_flashdata("success","Delete faile...");
            redirect('registration/show');

        }
    }

    public function login()
    {
        if ($this->session->userdata('logged_in')!='') 
        {
            redirect(base_url().'registration/show');
        }

        $data['title']='Login';
        $data['error']= $this->session->flashdata('error');
        $this->load->view('inc/header', $data);
        $this->load->view('loginform');
        $this->load->view('inc/footer');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()==false) 
        {
            $this->login();
        }
        else
        {
            $user = $this->input->post('username');
            $pass = md5($this->input->post('password'));
            $this->load->model('Upmodel');
            $result = $this->Upmodel->login_val($user);

            foreach ($result as $data) 
            {
                $password = $data->auth_password;
                $role = $data->auth_role;
            }

            if ($pass === $password) 
            {
                $data = array(
                    'logged_in' => true,
                    'role' => $role
                );
                $this->session->set_userdata($data);
                redirect('registration/show');
            }
            else 
            {
                $this->session->set_flashdata('error', 'Wrong Password');
                redirect('registration/login');
            }
        }
    }

        /**
         * Destroy session
         */
        public function logout()
        {
            session_destroy();
            redirect('registration');

        }

        public function single()
        {
            if (!$this->session->userdata('logged_in')) 
            {
                redirect(base_url().'registration/login');
            }
            $id = $this->uri->segment(3);
            $data['title'] = "Profile";
            $data['error'] = $this->session->flashdata('error');
            $data['success'] = $this->session->flashdata('success');
            $this->load->model('Upmodel');
            $data['result'] = $this->Upmodel->singlenews($id);
            $data["msg"]=$this->session->flashdata('success');
            $this->load->view('inc/header',$data);
            $this->load->view('inc/navbar');
            $this->load->view('single');
            $this->load->view('inc/footer');

        }       
    }
