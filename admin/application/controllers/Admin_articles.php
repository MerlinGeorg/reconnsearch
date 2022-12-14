<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_articles extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_articles_model');
	 }

	 public function index()
	{
	    $a = array('content' => 'admin_articles_view');
	    $this->load->view('admintemplate',$a);
	}
 
	public function displayarticles()
	{
		$result['res'] = $this->Admin_articles_model->get_articles();

  	    $this->load->view('display_articles',$result);
	} 

	public function editarticles()
  {
  	    $articlesid = $this->input->post('id');

		$res = $this->Admin_articles_model->get_articlesid($articlesid);

		echo json_encode($res);
  } 

  public function updatearticles()
  {
  	    $articles_id= $this->input->post('pagenm');	
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
        	if(!empty($articles_id)){
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
        'articles_title'=>$this->input->post('titlenm'),
        'articles_date'=>$this->input->post('datenm'),
       	'articles_pic'=>$filename,
       	'articles_desc'=>$this->input->post('descnm'),
       	'articles_insdate'=>$date

      	);


        if ($articles_id=='')
      {
        $result1 = $this->Admin_articles_model->insert_articles($data1);
      }
      else
      {
			   $result1 = $this->Admin_articles_model->update_articles($articles_id,$data1);
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

  public function deletearticles()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_articles_model->delete_articles($id);
          
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
    $articles_stat = $this->input->post('status');
    $articles_id = $this->input->post('id');

    if ($articles_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'articles_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($articles_stat==0)
      {
        $data1 = array
        (
          'articles_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_articles_model->updatearticles_stat($articles_id,$data1);
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