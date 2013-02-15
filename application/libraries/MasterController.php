<?php if (! defined('BASEPATH')) exit('No direct script access');

class MasterController extends Controller {

	private $info = array();
	private $id_user;
		
	function __construct()
	{
		parent::__construct();
		$this->id_user = $this->tank_auth->get_user_id();
		$this->_init();
	}
	
	function _init()
	{
		$this->info['version'] = $this->conf_model->get_version();
		$this->info['messages'] = $this->conf_model->get_messages($this->id_user);
		$this->info['messages_count'] = $this->info['messages']->num_rows();
		$this->template->write_view('menu', 'generales/menu_view', $this->info);
		$this->template->write_view('footer', 'generales/footer_view', $this->info);
		return($this->info);
	}

}