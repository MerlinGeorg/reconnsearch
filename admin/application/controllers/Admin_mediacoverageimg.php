<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_mediacoverageimg extends CI_Controller {
  function __construct()
   {
      parent::__construct();
      $this->load->model('Admin_mediacoverageimg_model');
   }

   public function index()
  {
      $getimg=$this->Admin_mediacoverageimg_model->get_mediaimg();
      $a = array('content' => 'admin_mediacoverageimg_view',
                'getimg' => $getimg);
      $this->load->view('admintemplate',$a);
  }

  public function displaymimg(){
      $result['res'] = $this->Admin_mediacoverageimg_model->get_titles();
      $this->load->view('display_mediacoverageimg',$result);
  }

  public function editimg()
  {
        $imgid = $this->input->post('id');

    $res = $this->Admin_mediacoverageimg_model->get_imgid($imgid);

    echo json_encode($res);
  }
 
  public function updateimg()
  {
        $img_id= $this->input->post('pagenm');  
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
          if(!empty($about_id)){
              $unlink_path = 'uploads/'.$fillimg;
              if(!empty($fillimg)){
                unlink($unlink_path);
              }         
          }
          $filename = $data['upload_data']['file_name'];
        }

       
       $ins_date=date('Y-m-d');
        $data1 = array
        (
        'mediacoverageimg_pic'=>$filename,
        'mediacoverageimg_title'=>$this->input->post('titlenm'),               
        'mediacoverageimg_date'=>$ins_date
        );


        if ($img_id=='')
      {
        $result1 = $this->Admin_mediacoverageimg_model->insert_img($data1);
      }
      else
      {
         $result1 = $this->Admin_mediacoverageimg_model->update_img($img_id,$data1);
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

  public function deleteImgs()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_mediacoverageimg_model->delete_img($id);
          
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
    $img_stat = $this->input->post('status');
    $img_id = $this->input->post('id');

    if ($img_stat==1)    //if the item is aleready in showing state,upon clicking on it =>make it to hide
    {
      $data1 = array
      (
        'mediacoverageimg_status'=>0   //status=0 =>it's hidden
      );
    }
    else
    {
      if($img_stat==0)
      {
        $data1 = array
        (
          'mediacoverageimg_status'=>1  //status=1 =>it's showing
        );
      }
    }
       
        $res123 = $this->Admin_mediacoverageimg_model->updateimg_stat($img_id,$data1);
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