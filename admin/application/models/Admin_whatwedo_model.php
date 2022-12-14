<?php 
class Admin_whatwedo_model extends CI_Model 
{
	function get_whatwedo()
   {
   		$query = $this->db->get('about_whatwedo');
   		return $query->result();
   }

   function get_whatwedoid($whatwedoid)
   {
   	$this->db->where('whatwedo_id',$whatwedoid);
   	$query = $this->db->get('about_whatwedo');
   	return $query->row();
   }

   function update_whatwedo($whatwedo_id,$data1)
   {
   	$this->db->where('whatwedo_id',$whatwedo_id);
   	$query = $this->db->update('about_whatwedo',$data1);
   	return $query;
   }
}