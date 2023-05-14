<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

	public function add()
	{
		$this->template->load('p_form_template','project_form/reward/reward_form');
	}


}
