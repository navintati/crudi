<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model("users_add", 'us');
	}

	public function index()
	{

        $data['users'] = $this->us->get_alldata();
        // echo "<pre>"; print_r($data['users']); echo "</pre>"; die(' PREE DATA ');
        $this->load->view('template/header');
		$this->load->view('view_list', $data);
        $this->load->view('template/footer');
	}

    public function addregister()
    {        
        $this->load->view('template/header');
        $this->load->view('user_signup');
        $this->load->view('template/footer');
    }

    public function addUser() {
        
        if (!empty($_POST)) {
            
            $val = implode(',', $this->input->post('chek'));
            $data = array(
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'age' => $this->input->post('age'),
                'hobbies' => $val,
                'image' => $_FILES['image']['name'],
                'created_on' => date('Y-m-d H:i:s', time())
            );

            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '55000';
            // $config['max_width']            = '1024';
            // $config['max_height']           = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('image') ) {
                echo "ERROR";

            } else {
                $form_data = $this->us->insertUser($data);
                $this->session->set_flashdata('msg', 'Succefully Registered');
                redirect(base_url());
                               
            }

        }
    }

    public function editUser($id)
    {
        $data['updateuser'] = $this->us->userID($id);
        
        $this->load->view('template/header');
        $this->load->view('user_edit', $data);
        $this->load->view('template/footer');
        
    }

    public function updateUser() {
        
        if (!empty($_POST)) {

            $val = implode(',', $this->input->post('chek'));
            $data = array(
                'id' => $this->input->post('id'),
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'age' => $this->input->post('age'),
                'hobbies' => $val,
                'image' => $_FILES['image']['name']
            );

            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('image') ) {
                echo "ERROR";

            } else {
                $form_data = $this->us->userData($data['id'], $data);
                $this->session->set_flashdata('msg', 'Succefully Registered');
                redirect(base_url());
                               
            }

        }
    }

    public function deleteuser($id)
    {
        $data['deleteuser'] = $this->us->userDelID($id);
        $this->session->set_flashdata('msg', 'Record hab beeb Deleted');
        redirect(base_url());

    }



}
