<?php

class Task extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
    }

    public function index()
    {
        $id = (int) $this->session->userdata('user_id');

        $this->load->model('common/user','User');
        $this->load->model('tasks','Tasks');

        $data = array();
        $data['user_details'] = $this->User->getUserDetails($id);
        $data['open_tasks'] = $this->Tasks->task_list_by_type(1);
        $data['closed_tasks'] = $this->Tasks->task_list_by_type(0);
        if ($this->tank_auth->is_logged_in())
            $this->load->view('task/index',$data);
        else
            redirect('/auth/login/');
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('task_description', 'Task Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('priority', 'Priority', 'required');

        $filetype = ".".$this->_file_type($_FILES['userfile']['type']);

        if($this->form_validation->run())
        {
            $filename = $this->session->userdata('user_id')."_".time().$filetype;
            if($this->_upload_file($filename))
            {
                $data = array(
                    'user_id'       => (int) $this->session->userdata('user_id'),
                    'subject'       => $this->form_validation->set_value('title'),
                    'description'   => $this->form_validation->set_value('task_description'),
                    'attachment'    => $filename,
                    'priority'      => $this->form_validation->set_value('priority'),
                    'create_date'   => date("Y-m-d H:i:s",time()),
                    'status'        => 1,
                );
                $this->load->model('tasks','Task');
                if($this->Task->save($data))
                {
                    redirect('/task/');
                }
                else
                {
                    echo "Somthing wrong to save data. Please try again.";
                }
            }
        }
    }

    public function details()
    {
        $id = $this->uri->segment(3);

        $user_id = (int) $this->session->userdata('user_id');

        $this->load->model('common/user','User');
        $this->load->model('tasks','Tasks');

        $data = array();
        $data['user_details'] = $this->User->getUserDetails($user_id);
        $data['open_tasks'] = $this->Tasks->task_list_by_type(1);
        $data['closed_tasks'] = $this->Tasks->task_list_by_type(0);
        $data['task'] = $this->Tasks->task_by_id($id);

        if(is_numeric($id))
        {
            $this->load->view('task/details',$data);
        }
        else
        {
            redirect('/task/');
        }
    }

    protected function _upload_file($filename)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['file_name'] = $filename;
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload())
        {
            return false;
        }
        else
        {
            $this->upload->data();
        }
        return true;
    }

    protected function _file_type($file)
    {
        switch ($file)
        {
            case 'image/jpg':
                return "jpg";
                break;
            case 'image/png':
                return "png";
                break;
            case 'image/gif':
                return "gif";
                break;
            default:
                return "";
                break;
        }
    }

}