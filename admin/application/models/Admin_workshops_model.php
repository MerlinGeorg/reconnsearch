<?php 
class Admin_workshops_model extends CI_Model 
{
	function get_workshops()
   {
   		$query = $this->db->get('workshops');
   		return $query->result();
   }

   function get_workshopsid($workshopsid)
   {
   	$this->db->where('workshops_id',$workshopsid);
   	$query = $this->db->get('workshops');
   	return $query->row();
   }

   function update_workshops($workshops_id,$data1)
   {
   	$this->db->where('workshops_id',$workshops_id);
   	$query = $this->db->update('workshops',$data1);
   	return $query;
   }

   function delete_workshops($id)
   {
      $this->db->where('workshops_id',$id);
      $query = $this->db->delete('workshops');
      return $query;
   }
   function insert_workshops($data1)
      {
         $query = $this->db->insert('workshops',$data1);
         return $query;
      }

   function updateworkshops_stat($workshops_id,$data1)
   {
      $this->db->where('workshops_id',$workshops_id);
      $query = $this->db->update('workshops',$data1);
      return $query;
   }
}
