<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogicalController extends CI_Controller {

//------Customer Booking---------
    public function submit_booking()
    {
        $this->load->model('MainModel');
        $this->MainModel->AddBooking();
    }

    public function check_bookdate(){

    	$this->load->model('MainModel');
        $this->MainModel->check_bookdate();
    }

    public function check_time(){
    	$this->load->model('MainModel');
        $this->MainModel->check_time();
    }

//----------Login and Signout Logic-------
    public function login_validation()
    {

            $value['user'] = $this->input->post('user_name');
            $value['pass'] = $this->input->post('pass_word');

            // $this->load->helper(array('form', 'url'));
            $this->load->helper('url');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('user_name', 'Username', 'required');
            $this->form_validation->set_rules('pass_word', 'Password', 'required');
            
            
            if ($this->form_validation->run() == FALSE)
                {       
                        // $this->load->view('login',$value);
                }
                else
                {
                    //true
                     $this->load->model('MainModel');
                     $result = $this->MainModel->user_validate();

            
                    if(!$result){   
                        $val['error1'] = "Incorrect Username or Password ";
                        $this->load->view('login',$val);
                        
                    }else{
                        /// ari ko ma role kung user baka or admin
                         $session = $this->session->userdata('user_type');
                        
                        if ($session == "Admin")
                        {
                              redirect('admindashboard','refresh');
                        }
                        
                    }
                
                }


    }
    public function log_out(){
        $this->session->unset_userdata(array("id"=>"","logged_in"=>"","password"=>"","user_type"=>''));
        $this->session->sess_destroy();
        redirect(login);
    }

  

//------------Admin----------------
    //Customer Side
    public function select_customer(){
    	$this->load->model('MainModel');
    	$this->MainModel->select_customer();
    }
    public function delete_customer(){
    	$this->load->model('MainModel');
    	$this->MainModel->delete_customer();
    }
    public function update_customer(){
    	$this->load->model('MainModel');
    	$this->MainModel->update_customer();
    }

    public function filter_bookinglist(){
    	$this->load->model('MainModel');
    	$this->MainModel->filter_bookinglist();
    }


    //Commision Worker Side
    public function select_workercommision(){
    	$this->load->model('MainModel');
    	$this->MainModel->select_workercommision();
    }
        //updated 10/04/2021
    public function update_workercommision(){
        
        $this->load->model('MainModel');
        $this->MainModel->update_workercommision();
    }



    //Product Commsion Side
    public function select_productcommision(){
         $this->load->model('MainModel');
         $this->MainModel->select_productcommision();

    
    }
    public function select_listorders(){
         $this->load->model('MainModel');
         $this->MainModel->select_ListOrders();
    }

    //worker staff
    public function add_workerstaff(){
        $this->load->model('MainModel');
        $this->MainModel->add_workerstaff();

    }
    public function select_workerstaff(){
        $this->load->model('MainModel');
        $this->MainModel->select_workerstaff();
    }
    public function update_workerstaff(){
        $this->load->model('MainModel');
        $this->MainModel->update_workerstaff();
    }
    public function delete_workerstaff(){
        $this->load->model('MainModel');
        $this->MainModel->delete_workerstaff();
    }
}
    