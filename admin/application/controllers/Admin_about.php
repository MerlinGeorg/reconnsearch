<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_about_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_about_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displayabout()
	{
		$result['res'] = $this->Admin_about_model->get_about();

  	    $this->load->view('display_about',$result);
	} 

	public function editabout()
  {
  	    $aboutid = $this->input->post('id');

		$res = $this->Admin_about_model->get_aboutid($aboutid);

		echo json_encode($res);
  }

  public function updateabout()
  {
  	    $about_id= $this->input->post('pagenm');	
		    $fillimg = $this->input->post('image1');

		    $config['upload_path']="./uploads";
        $config['allowed_types']='jpeg|jpg|png|pdf|xls|xlsx|docx';
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
        	if(!empty($about_id)){
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
    
       	'about_pic'=>$filename,
       	'about_description'=>$this->input->post('descnm'),
       	'about_designation'=>$this->input->post('membboardnm'),
        'about_role'=>$this->input->post('rolenm'),
       	'about_name'=>$this->input->post('namenm'),
       	'about_date'=>$date
      	);


        if ($about_id=='')
      {
        $result1 = $this->Admin_about_model->insert_about($data1);
      }
      else
      {
			   $result1 = $this->Admin_about_model->update_about($about_id,$data1);
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

  public function deleteabout()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_about_model->delete_about($id);
          
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
    $about_stat = $this->input->post('status');
    $about_id = $this->input->post('id');

    if ($about_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'about_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($about_stat==0)
      {
        $data1 = array
        (
          'about_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_about_model->updateabout_stat($about_id,$data1);
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