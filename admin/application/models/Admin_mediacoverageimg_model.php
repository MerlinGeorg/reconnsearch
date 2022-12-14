<?php 
class Admin_mediacoverageimg_model extends CI_Model 
{
	function get_mediaimg()
   {
   		$query = $this->db->get('mediacoveragetitle');
   		return $query->result();
   }
   function get_titles(){
      $query123="SELECT mediacoverageimg.mediacoverageimg_id,mediacoverageimg.mediacoverageimg_pic,mediacoverageimg.mediacoverageimg_title,mediacoverageimg.mediacoverageimg_status,mediacoverageimg.mediacoverageimg_date,mediacoveragetitle.mediacoverage_title AS image_title FROM mediacoverageimg LEFT JOIN mediacoveragetitle ON mediacoverageimg.mediacoverageimg_title = mediacoveragetitle.mediacoverage_id";
      $query = $this->db->query($query123);
      return $query->result();
   }


   function get_imgid($imgid)
   {
   	$this->db->where('mediacoverageimg_id',$imgid);
   	$query = $this->db->get('mediacoverageimg');
   	return $query->row();
   }

   function update_img($img_id,$data1)
   {
   	$this->db->where('mediacoverageimg_id',$img_id);
   	$query = $this->db->update('mediacoverageimg',$data1);
   	return $query;
   }

   function delete_img($id)
   {
      $this->db->where('mediacoverageimg_id',$id);
      $query = $this->db->delete('mediacoverageimg');
      return $query;
   }
   function insert_img($data1)
      {
         $query = $this->db->insert('mediacoverageimg',$data1);
         return $query;
      }

   function updateimg_stat($img_id,$data1)
   {
      $this->db->where('mediacoverageimg_id',$img_id);
      $query = $this->db->update('mediacoverageimg',$data1);
      return $query;
   }
}
