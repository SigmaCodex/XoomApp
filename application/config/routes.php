<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//logical Controller 
//admin
	// Admin Product Commision Side
$route['selectproductcommision']   = 'LogicalController/select_productcommision';	
$route['selectlistorder']          = 'LogicalController/select_listorders';
	//Admin CommisionWorker Side
$route['selectworkercommision']    = 'LogicalController/select_workercommision';
$route['updateworkercommision']    = 'LogicalController/update_workercommision';//updated 10/04/2021

	//worker Staff
$route['addworkerstaff']        = 'LogicalController/add_workerstaff';
$route['selectworkerstaff']     = 'LogicalController/select_workerstaff';
$route['updateworkerstaff']     = 'LogicalController/update_workerstaff';
$route['deleteworkerstaff']     = 'LogicalController/delete_workerstaff';

	//Admin Filter 
$route['filterbookinglist']        = 'LogicalController/filter_bookinglist';
	//Admin selected customer side	
$route['updatecustomer']    = 'LogicalController/update_customer';
$route['deletecustomer']    = 'LogicalController/delete_customer';
$route['selectcustomer'] 	= 'LogicalController/select_customer';
	//customer booking
$route['checktime']		    = 'LogicalController/check_time';
$route['checkbookdate']     = 'LogicalController/check_bookdate';
$route['submitbooking']		= 'LogicalController/submit_booking';
//MainController
	//login
	$route['login']         = 'Main_Controller/login_form';
	$route['sign-in']                = 'LogicalController/login_validation';
    $route['sign_out']               = 'LogicalController/log_out';
	//admin
	$route['admindashboard']  = 'Main_Controller/adminDashboard';
	$route['listofbooking']   = 'Main_Controller/listOfBooking';
	$route['listofworkercommision'] = 'Main_Controller/listofworker_commision';
	$route['listofproductcommision'] = 'Main_Controller/listofproduct_commision';
	$route['listofworkers'] = 'Main_Controller/listofworkers';
	//Customer	
	$route['customerform']		 = 'Main_Controller/CustomerFormBooking';

$route['default_controller'] = 'Main_Controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
