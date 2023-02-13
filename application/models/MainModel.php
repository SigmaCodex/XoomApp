<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MainModel extends CI_Model{

   public function user_validate()
   {
      $user = $this->input->post('user_name');
      $pass = $this->input->post('pass_word');

      $this->db->where('username',$user);
      $this->db->where('password',$pass);

      $query = $this->db->get('users');

      if(!empty($query->result_array()))
      {

         $row = $query->row();
         $data  = array(
            'user_id' => $row->user_id,
            'username'  => $row->username,
            'user_type' => $row->user_type

         );
         $this->session->set_userdata($data);
         return true;

      }
      else
      {
         return false;
      }

   }



//-------customer side------
	public function AddBooking(){
            $data = array(
            'Name'  =>     $this->input->post('name'),
            'email'  => $this->input->post('email'),
            'contactNum'      => $this->input->post('phone'),
            'address'  => $this->input->post('Address'), 
            'services'  => $this->input->post('services'),
            'time'  =>$this->input->post('time'),
            'date'  => $this->input->post('date'),
            'car_type' => $this->input->post('car_type'),
            'status' => "waiting",
            'comment' => $this->input->post('message')
            );

         // echo json_encode($data);
          $this->db->insert('customer',$data);
			 // echo "Data inserted";
	}

   public function check_bookdate(){
      $date = $this->input->post('date');

      $query = $this->db->select('*')->from('customer')->where('date',$date)->where('status !=',"cancelled")->get();
      $row = $query->num_rows();
   
      echo json_encode($row);
   }
   public function check_time(){
      $date = $this->input->post('date');
  
      $query = $this->db->select('*')->from('customer')->where('date',$date)->where('status !=',"cancelled")->get();
      $result = $query->result();
      echo json_encode($result);

   }





//---------------Admin Side---------------
   //dashboard
   public function total_customer(){
      $query = $this->db->select('*')->from('customer')->get();
      $row = $query->num_rows();
      return $row;
   }
   public function number_completed(){
      $query = $this->db->select('*')->from('customer')->where('status',"complete")->get();
      $row = $query->num_rows();
      return $row;
   }
   public function today_customer(){
      $now = new DateTime();
      $now->setTimezone(new DateTimezone('Asia/Manila'));
      $date = $now->format('m/d/Y');

      $query = $this->db->select('*')->from('customer')->where('date',$date)->get();
      $row = $query->num_rows();
      return $row;
   }

   //booking list
   public function list_booking(){
      // $this->db->select('*');
      // $this->db->order_by("status", "desc");
      // $this->db->order_by("date", "asc");
      // $this->db->from('customer');
       $query = $this->db->select('*')->order_by("status", "desc")->order_by("date", "asc")->from('customer')->get();
      // $query = $this->db->get();
      return $query->result();;
   }
   public function listofworker_commision(){
      // $this->db->select('*');
      // $this->db->order_by("date", "asc");
      // $this->db->from('service_commissions');
      $this->db->select('*');
      $this->db->from('service_commissions');
      $this->db->order_by(" service_commissions.date", "asc");
      $this->db->join('customer',      'customer_id = cust_id');
      $query = $this->db->get();
      return $query->result();
   }


//Worker Commision Side 
   public function select_workercommision(){
      $c_id= $this->input->post('commisionId');

      $this->db->select('*');
      $this->db->from('service_commissions');
      $this->db->join('customer',      'customer_id = cust_id');
      $this->db->where("commission_id",$c_id);
      $query = $this->db->get();

      echo json_encode($query->result());
   }


   public function update_workercommision(){
      //update workerdetails (updated 10/10/2021)
      $id = $this->input->post('commisionId');


         $data = array(
            'personnel' =>   $this->input->post('staff1'),
            'partner' =>   $this->input->post('staff2'),
            'type' =>   $this->input->post('p_type'),
            'size' =>   $this->input->post('size'),
            'others_amount' =>   $this->input->post('charges'),
            'additional_notes' =>   $this->input->post('a_reason'),
            'discount_notes' =>   $this->input->post('disc_note'),
            'discount_amount' =>   $this->input->post('discount'),
            'discount' =>   $this->input->post('discount_name'),
            'plate' =>   $this->input->post('plate_num'),
            'total' =>   $this->input->post('total'),
            'mng_discount' =>   $this->input->post('mnger_discount')
            );  

          $this->db->where('commission_id',$id);
          $this->db->update("service_commissions",$data);
           // echo json_encode($data);
   }



//bookinglist Logic
   public function select_customer(){
      $id= $this->input->post('c_Id');
      $query = $this->db->select('*')->from('customer')->where('customer_id',$id)->get();
      $result = $query->result();
      echo json_encode($result);
   }
   public function delete_customer(){
      $id= $this->input->post('c_Id');

      $this->db->where("customer_id",$id);
      $this->db->delete("customer");

   }
   public function update_customer(){
       $id= $this->input->post('c_Id');
         $data = array(
            'Name'  =>     $this->input->post('name'),
            'email'  => $this->input->post('email'),
            'contactNum'      => $this->input->post('phone'),
            'address'  => $this->input->post('Address'), 
            'services'  => $this->input->post('services'),
            'time'  =>$this->input->post('time'),
            'date'  => $this->input->post('date'),
            'car_type' => $this->input->post('car_type'),
            'status' =>  $this->input->post('status'),
            'comment' => $this->input->post('message')
            );

      $this->db->where('customer_id',$id);
      $this->db->update("customer",$data);
   }


   public function filter_bookinglist(){
      $selected  = $this->input->post('slected');
      $today     = $this->input->post('date');

       if ($selected == "today"){
          //Filter by today
         $query = $this->db->select('*')->from('customer')->where('date',$today)->get();
         $result = $query->result();
         echo json_encode($result);
        

        }else if($selected == "complete"){
          //Filter by Complete Status
         $query = $this->db->select('*')->order_by("date", "desc")->from('customer')->where('status',"complete")->get();
         $result = $query->result();
         echo json_encode($result);

        }else if($selected == "waiting"){
           //Filter by Waiting
            $query = $this->db->select('*')->from('customer')->where('status',"waiting")->get();
            $result = $query->result();
            echo json_encode($result);

        }else{
          //Filter by all
            $query = $this->db->select('*')->order_by("status", "desc")->order_by("date", "asc")->from('customer')->get();
            $result = $query->result();
            echo json_encode($result);
        }

   }


   // Pruduct Commision 
   public function listofproduct_commision(){

      $this->db->select('*');
      $this->db->from('product_commissions');
      $this->db->order_by("date", "asc");
      $query = $this->db->get();
      return $query->result();

   }

   public function select_productcommision(){

       $id = $this->input->post('product_commisionId');

      $this->db->select('*');
      $this->db->from('product_commissions');
      $this->db->where('product_commission_id',$id);
      $query = $this->db->get();
      // return $query->result();
       echo json_encode($query->result());
   }

      public function select_ListOrders(){

       $id = $this->input->post('product_commisionId');

      $this->db->select('*');
      $this->db->from('product_item_orders');
      $this->db->where('product_commission_id',$id);
      $query = $this->db->get();
      // return $query->result();
      echo json_encode($query->result());

   }

   // worker staff side
   public function listofworkers(){
      $query = $this->db->select('*')->from('worker')->get();
      return $query->result();

   }

   public function add_workerstaff(){
      $data = array(
            'name' =>   $this->input->post('name'),
            'username' =>   $this->input->post('username'),
            'password' =>   $this->input->post('password'),
            'user_type' =>   $this->input->post('type'),
            'status' =>  "active",
      ); 
       $this->db->insert('worker',$data);
   }

   public function select_workerstaff(){
      $id = $this->input->post('id');

      $query = $this->db->select('*')->from('worker')->where('worker_id',$id)->get();
      $result = $query->result();
      echo json_encode($result);

   }
   public function update_workerstaff(){
      $id = $this->input->post('id');
      $data = array(
            'name' =>   $this->input->post('name'),
            'username' =>   $this->input->post('username'),
            'password' =>   $this->input->post('password'),
            'user_type' =>   $this->input->post('type'),
            'status' =>   $this->input->post('status'),
      ); 

      $this->db->where('worker_id',$id);
      $this->db->update("worker",$data);
   }

   public function delete_workerstaff(){
      $id= $this->input->post('id');

      $this->db->where("worker_id",$id);
      $this->db->delete("worker");
   }

}
