<?php 
class Admin_reports_model extends CI_Model 
{
	function get_reports()
   {
   		$query = $this->db->get('reports');
   		return $query->result();
   }

   function get_reportsid($reportsid)
   {
   	$this->db->where('reports_id',$reportsid);
   	$query = $this->db->get('reports');
   	return $query->row();
   }

   function update_reports($reports_id,$data1)
   {
   	$this->db->where('reports_id',$reports_id);
   	$query = $this->db->update('reports',$data1);
   	return $query;
   }

   function delete_reports($id)
   {
      $this->db->where('reports_id',$id);
      $query = $this->db->delete('reports');
      return $query;
   }
   function insert_reports($data1)
      {
         $query = $this->db->insert('reports',$data1);
         return $query;
      }

   function updatereports_stat($reports_id,$data1)
   {
      $this->db->where('reports_id',$reports_id);
      $query = $this->db->update('reports',$data1);
      return $query;
   }
}
