<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_mediacoveragetitle extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_mediacoveragetitle_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_mediacoveragetitle_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displaymtitle()
	{
		$result['res'] = $this->Admin_mediacoveragetitle_model->get_mediatitle();

  	    $this->load->view('display_mediacoveragetitle',$result);

	} 

	public function edittitle()
  {
  	    $titleid = $this->input->post('id');

		$res = $this->Admin_mediacoveragetitle_model->get_titleid($titleid);

		echo json_encode($res);
  }

  public function updatetitle()
  {
  	    $title_id= $this->input->post('pagenm');	
		    
	     $date=date('Y-m-d');

		    $data1 = array
      	(
    
       	'mediacoverage_title'=>$this->input->post('titlenm'),
        'mediacoverage_date'=>$this->input->post('datenm'),       	
       	'mediacoverage_insdate'=>$date
      	);


        if ($title_id=='')
      {
        $result1 = $this->Admin_mediacoveragetitle_model->insert_title($data1);
      }
      else
      {
			   $result1 = $this->Admin_mediacoveragetitle_model->update_title($title_id,$data1);
		  }	

		  if ($result1==1)
		  {
			   echo "success";
		  }
		  else
		  {
			   echo "failed";
		  }	

	}

  public function deletetitle()
    {
       $id = $this->input->post('id');
      
       $res = $this->Admin_mediacoveragetitle_model->delete_title($id);
        
             
       if($res == 1)
        {   
            echo "success";
        }else{  
            echo "failed";
        }
    }


    public function changestatus()
  {
    $title_stat = $this->input->post('status');
    $title_id = $this->input->post('id');

    if ($title_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'mediacoverage_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($title_stat==0)
      {
        $data1 = array
        (
          'mediacoverage_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_mediacoveragetitle_model->updatetitle_stat($title_id,$data1);
        if ($res123==1) 
        {
          echo "success";
        }
        else
        {
          echo "failed";
        } 

  }

}
?>