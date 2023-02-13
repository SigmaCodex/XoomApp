<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

    public function index()
    {
        $this->load->view('customer/CustomerFormBooking');

    }

    public function CustomerFormBooking(){
        // $this->load->view('customer/datepicker');
        $this->send_email();
    }



//-------------- Admin Side ------------------------
    public function adminDashboard(){
        $session = $this->session->userdata('username');
        if (!$session){
            redirect(login);
        }
        else{
            $this->load->model('MainModel');
            $val['total_customer'] = $this->MainModel->total_customer(); 
            $val['number_completed'] = $this->MainModel->number_completed();
            $val['today_customer'] = $this->MainModel->today_customer();

            $this->load->view('admin/template/header');
            $this->load->view('admin/dashboard',$val);
        }
    }

    public function listOfBooking(){

        $this->load->model('MainModel');
        $val['details'] = $this->MainModel->list_booking(); 
        $this->load->view('admin/template/header');
        $this->load->view('admin/bookinglist',$val);
    }

    public function listofworker_commision(){
        $this->load->model('MainModel');
        $val['details'] = $this->MainModel->listofworker_commision(); 
        $this->load->view('admin/template/header');
        $this->load->view('admin/workercommisionList',$val);
    }
    
    public function listofproduct_commision(){
        $this->load->model('MainModel');
        $val['details'] = $this->MainModel->listofproduct_commision(); 
        $this->load->view('admin/template/header');
        $this->load->view('admin/productcommision',$val); 
    }

    public function listofworkers(){
        $this->load->model('MainModel');
        $val['details'] = $this->MainModel->listofworkers(); 
        $this->load->view('admin/template/header');
        $this->load->view('admin/workerlist',$val); 
    
    }

    public function login_form(){
        $this->load->view('login');
    }




}
    