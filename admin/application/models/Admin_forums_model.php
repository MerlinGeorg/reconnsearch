<?php 
class Admin_forums_model extends CI_Model 
{
	function get_forums()
   {
   		$query = $this->db->get('forums');
   		return $query->result();
   }

   function get_forumsid($forumsid)
   {
   	$this->db->where('forums_id',$forumsid);
   	$query = $this->db->get('forums');
   	return $query->row();
   }

   function update_forums($forums_id,$data1)
   {
   	$this->db->where('forums_id',$forums_id);
   	$query = $this->db->update('forums',$data1);
   	return $query;
   }

   function delete_forums($id)
   {
      $this->db->where('forums_id',$id);
      $query = $this->db->delete('forums');
      return $query;
   }
   function insert_forums($data1)
      {
         $query = $this->db->insert('forums',$data1);
         return $query;
      }

   function updateforums_stat($forums_id,$data1)
   {
      $this->db->where('forums_id',$forums_id);
      $query = $this->db->update('forums',$data1);
      return $query;
   }
}
