<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class welcome extends CI_Controller 
	{
		public function index()
		{
			$this->load->helper('url');
			$this->load->library('parser');
			$num=1;
					

			$data ['blog_entries']=$num;

			

		$this->parser->parse('welcome_message', $data);
		}

		}
	
	
?>