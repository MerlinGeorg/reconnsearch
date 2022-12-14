<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_forums extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_forums_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_forums_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displayforums()
	{
		$result['res'] = $this->Admin_forums_model->get_forums();

  	    $this->load->view('display_forums',$result);
	} 

	public function editforums()
  {
  	    $forumsid = $this->input->post('id');

		$res = $this->Admin_forums_model->get_forumsid($forumsid);

		echo json_encode($res);
  } 

  public function updateforums()
  {
  	    $forums_id= $this->input->post('pagenm');	
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
        	if(!empty($forums_id)){
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
        'forums_title'=>$this->input->post('titlenm'),
        'forums_date'=>$this->input->post('datenm'),
       	'forums_pic'=>$filename,
       	'forums_desc'=>$this->input->post('descnm'),
        'forums_status'=>'1',
       	'forums_insdate'=>$date
        
      	);


        if ($forums_id=='')
      {
        $result1 = $this->Admin_forums_model->insert_forums($data1);
      }
      else
      {
			   $result1 = $this->Admin_forums_model->update_forums($forums_id,$data1);
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

  public function deleteforums()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_forums_model->delete_forums($id);
          
        $img_path = 'uploads/'.$image_name;
        
        unlink($img_path);  
           echo "$res";  
       if($res == 1)
        {   
            echo "success";
        }else{  
            echo "failed";
        }
    }


    public function changestatus()
  {
    $forums_stat = $this->input->post('status');
    $forums_id = $this->input->post('id');

    if ($forums_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'forums_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($forums_stat==0)
      {
        $data1 = array
        (
          'forums_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_forums_model->updateforums_stat($forums_id,$data1);
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