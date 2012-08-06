<?php 
if (! defined('BASEPATH')) exit('No direct script access');

class front extends MasterController {

	private $data = array();
	
	function __construct()
	{
		($this->tank_auth->is_logged_in()?true:redirect('/users/'));
		parent::__construct();
		$this->data = $this->conf_model->get_version();
		$this->template->add_css('assets/css/block-lists.css');
		$this->template->add_css('assets/css/simple-lists.css');
	}

	function index()
	{
/*		$this->template->add_css('assets/css/block-lists.css');
		$this->template->add_css('assets/css/simple-lists.css');*/
//		$this->template->write_view('content', 'front_view', $this->data);
		$this->template->render();
	}
	
	function music_list()
	{
		$music['videos'] = $this->_load_music();

		$this->template->add_js("assets/js/list.js");
		$this->template->write_view('content', 'list_music', $music);
		$this->template->render();
		
	}
	
	private function _load_music()
	{		
		$list = array();
		$last_line = shell_exec('ls /home/vremixes/uploads/pack01');
		$last_line2 = shell_exec('ls /home/vremixes/uploads/pack02');
		$last_line3 = shell_exec('ls /home/vremixes/uploads/olbrich001');
		$last_line4 = shell_exec('ls /home/vremixes/uploads/andres001');
		
		$list['pack01'] = explode('.mp4', $last_line);
		$list['pack02'] = explode('.mp4', $last_line2);
		$list['olbrich'] = explode('.mp4', $last_line3);
		$list['andres'] = explode('.mp4', $last_line4);
		return $list;	
	}

}