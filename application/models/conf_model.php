<?php if (! defined('BASEPATH')) exit('No direct script access');

class conf_model extends Model {

	function __construct()
	{
		parent::Model();
	}
	
	/**
	 * Get version of Panel
	 *
	 * @return void
	 * @author Ivan A. Zenteno <ivan.zenteno@infapen.com>
	 */
	function get_version()
	{
		$query = $this->db->getwhere('conf', array('class'=>'version'));
		if ($query->num_rows() > 0)
		{
			return $query->row()->value; ;
		}
		else
			return false;
	}
	
	/**
	 * Get all messages to User
	 *
	 * @param string $id_user 
	 * @return array
	 * @author Ivan A. Zenteno <ivan.zenteno@infapen.com>
	 */
	function get_messages($id_user, $id_admin = 0)
	{
		$query = $this->db->getwhere('messages', array('para' => $id_user) );
		if($id_admin > 0)
		{
			$this->db->where(array('de' => $id_admin ) );	
		}
		return $query;

	}
	
	
	function get_post($post)
	{
		$query = $this->db->getwhere('conf', array('class'=>'faqs'));
		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
			return false;
	}

}