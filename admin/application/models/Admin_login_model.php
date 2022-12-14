<?php 
class Admin_login_model extends CI_Model 
{
 
	function validate_login()
	{
		$username = $this->security->xss_clean($this->input->post('uname'));
 	 $password=$this->security->xss_clean($this->input->post('pass'));

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('user');

		if($query->num_rows()==1)
		{
			$row=$query->row();
			$data=array(
				'id'=>$row->id,
				'type'=>$row->type,
				'username'=>$row->username,
				'validate'=>true
			);

			$this->session->set_userdata($data);
			
			return true;
			//print_r($data);
		}
		
	
		else{
			return false;
		}
	}
}
?>