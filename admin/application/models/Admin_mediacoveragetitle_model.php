<?php 
class Admin_mediacoveragetitle_model extends CI_Model 
{
	function get_mediatitle()
   {
   		$query = $this->db->get('mediacoveragetitle');
   		return $query->result();
   }

   function get_titleid($titleid)
   {
   	$this->db->where('mediacoverage_id',$titleid);
   	$query = $this->db->get('mediacoveragetitle');
   	return $query->row();
   }

   function update_title($title_id,$data1)
   {
   	$this->db->where('mediacoverage_id',$title_id);
   	$query = $this->db->update('mediacoveragetitle',$data1);
   	return $query;
   }

   function delete_title($id)
   {
      $this->db->where('mediacoverage_id',$id);
      $query = $this->db->delete('mediacoveragetitle');
      return $query;
   }
   function insert_title($data1)
      {
         $query = $this->db->insert('mediacoveragetitle',$data1);
         return $query;
      }

   function updatetitle_stat($title_id,$data1)
   {
      $this->db->where('mediacoverage_id',$title_id);
      $query = $this->db->update('mediacoveragetitle',$data1);
      return $query;
   }
}
