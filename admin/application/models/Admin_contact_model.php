<?php
class Admin_contact_model extends CI_Model 
{
	function get_contact(){
		$query =$this->db->get('contact');
		return $query->result();
	}
	function edit_contact($id)
	{
		$this->db->where('contact_id',$id);
		$query = $this->db->get('contact');
		return $query->row();
	}
	function update_contact($page_id,$data1)
	{
		$this->db->where('contact_id',$page_id);
		$query = $this->db->update('contact',$data1);
		return $query;
	}
}
