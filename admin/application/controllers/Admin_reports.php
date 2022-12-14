<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_reports extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_reports_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_reports_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displayreports()
	{
		$result['res'] = $this->Admin_reports_model->get_reports();

  	    $this->load->view('display_reports',$result);
	} 

	public function editreports()
  {
  	    $reportsid = $this->input->post('id');

		$res = $this->Admin_reports_model->get_reportsid($reportsid);

		echo json_encode($res);
  } 

  public function updatereports()
  {
  	    $reports_id= $this->input->post('pagenm');	
		    $fillimg = $this->input->post('image1');

		    $config['upload_path']="./uploads";
        $config['allowed_types']='jpeg|jpg|png|pdf|xls|xlsx|docx|mp4';
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('picnm'))
        {
        	$error = array('error'=> $this->upload->display_errors());
        }
        else
        {
        	$data = array('upload_data' => $this->upload->data());
        }
     
      	if ($_FILES['picnm']['size'] == 0)
      	{
        	$filename = $fillimg;
      	}
      	else
      	{
        	if(!empty($reports_id)){
          		$unlink_path = 'uploads/'.$fillimg;
          		if(!empty($fillimg)){
            		unlink($unlink_path);
          		}         
        	}
        	$filename = $data['upload_data']['file_name'];
      	}
	     $date=date('Y-m-d');

		    $data1 = array
      	(
        'reports_title'=>$this->input->post('titlenm'),
        'reports_date'=>$this->input->post('datenm'),
       	'reports_pic'=>$filename,
       	'reports_desc'=>$this->input->post('descnm'),
       	'reports_insdate'=>$date

      	);


        if ($reports_id=='')
      {
        $result1 = $this->Admin_reports_model->insert_reports($data1);
      }
      else
      {
			   $result1 = $this->Admin_reports_model->update_reports($reports_id,$data1);
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

  public function deletereports()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_reports_model->delete_reports($id);
          
        $img_path = 'uploads/'.$image_name;
        
        unlink($img_path);  
             
       if($res == 1)
        {   
            echo "success";
        }else{  
            echo "failed";
        }
    }


    public function changestatus()
  {
    $reports_stat = $this->input->post('status');
    $reports_id = $this->input->post('id');

    if ($reports_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'reports_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($reports_stat==0)
      {
        $data1 = array
        (
          'reports_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_reports_model->updatereports_stat($reports_id,$data1);
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