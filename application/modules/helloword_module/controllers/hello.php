<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hello extends MX_Controller {

public function index()	{
	$this->sayhello();
	}
	
public function sayhello( )	{
	$this->load->view('sayhello');
	}	

}
 
/* End of file hello.php */
/* Location: ./application/modules/helloworld_module/controllers/hmvc.php */
