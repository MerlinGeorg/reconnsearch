<?php 
class Admin_articles_model extends CI_Model 
{
	function get_articles()
   {
   		$query = $this->db->get('articles');
   		return $query->result();
   }

   function get_articlesid($articlesid)
   {
   	$this->db->where('articles_id',$articlesid);
   	$query = $this->db->get('articles');
   	return $query->row();
   }

   function update_articles($articles_id,$data1)
   {
   	$this->db->where('articles_id',$articles_id);
   	$query = $this->db->update('articles',$data1);
   	return $query;
   }

   function delete_articles($id)
   {
      $this->db->where('articles_id',$id);
      $query = $this->db->delete('articles');
      return $query;
   }
   function insert_articles($data1)
      {
         $query = $this->db->insert('articles',$data1);
         return $query;
      }

   function updatearticles_stat($articles_id,$data1)
   {
      $this->db->where('articles_id',$articles_id);
      $query = $this->db->update('articles',$data1);
      return $query;
   }
}
