<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->layout->title("Gary Menezes");
	}

	public function index()
	{
    $this->layout->title('Site index page'); // Set page title
    $data['page'] = 'home';
    $this->layout->view('pages/home', $data);     // Render view and layout
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
