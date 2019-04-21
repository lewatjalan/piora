<?php 
/**
 * 
 */
class mod_artikel extends CI_model 
{
	
	function select_all()
	{
		//load table artikel dri database
		return $this->db->get('artikel'); 
	
	}
}