<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_whatwedo extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_whatwedo_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_whatwedo_view');
	    $this->load->view('admintemplate',$a);
	}
	public function displaywhatwedo()
	{
		$result['res'] = $this->Admin_whatwedo_model->get_whatwedo();

  	    $this->load->view('display_whatwedo',$result);
	} 

	public function editwhatwedo()
  {
  	    $whatwedoid = $this->input->post('id');

		$res = $this->Admin_whatwedo_model->get_whatwedoid($whatwedoid);

		echo json_encode($res);
  }

  public function updatewhatwedo()
  {
  	    $whatwedo_id= $this->input->post('editnm');
  	    
  		$date = date('Y-m-d');

		$data1 = array
      	(
       	
       	'whatwedo_vision'=>$this->input->post('visionnm'),
       	'whatwedo_knowhow'=>$this->input->post('knowhownm'),
       	'whatwedo_date'=>$date     	
      	);

        if ($whatwedo_id!='')
		{			
			$result1 = $this->Admin_whatwedo_model->update_whatwedo($whatwedo_id,$data1);	

			if ($result1==1)
			{
				echo "success";
			}
			else
			{
				echo "failed";
			}	
		}
	}
}