<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_workshops extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_workshops_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_workshops_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displayworkshops()
	{
		$result['res'] = $this->Admin_workshops_model->get_workshops();

  	    $this->load->view('display_workshops',$result);
	} 

	public function editworkshops()
  {
  	    $workshopsid = $this->input->post('id');

		$res = $this->Admin_workshops_model->get_workshopsid($workshopsid);

		echo json_encode($res);
  } 

  public function updateworkshops()
  {
  	    $workshops_id= $this->input->post('pagenm');	
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
        	if(!empty($workshops_id)){
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
        'workshops_title'=>$this->input->post('titlenm'),
        'workshops_subtitle'=>$this->input->post('subtitlenm'),
        'workshops_date'=>$this->input->post('datenm'),
       	'workshops_pic'=>$filename,
       	'workshops_desc'=>$this->input->post('descnm'),
       	'workshops_insdate'=>$date

      	);


        if ($workshops_id=='')
      {
        $result1 = $this->Admin_workshops_model->insert_workshops($data1);
      }
      else
      {
			   $result1 = $this->Admin_workshops_model->update_workshops($workshops_id,$data1);
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

  public function deleteworkshops()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_workshops_model->delete_workshops($id);
          
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
    $workshops_stat = $this->input->post('status');
    $workshops_id = $this->input->post('id');

    if ($workshops_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'workshops_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($workshops_stat==0)
      {
        $data1 = array
        (
          'workshops_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_workshops_model->updateworkshops_stat($workshops_id,$data1);
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