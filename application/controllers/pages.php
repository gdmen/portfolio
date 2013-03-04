<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
    
    $this->load->spark('markdown-extra/0.0.0');
		
		$this->layout->title("Gary Menezes");
    $this->layout->js(base_url().'/assets/js/jquery.min.js');
    $this->layout->js(base_url().'assets/js/bootstrap.min.js');
    $this->layout->css(base_url().'assets/css/bootstrap.css');
    $this->layout->css(base_url().'assets/css/bootstrap-responsive.css');
	}

	public function index()
  {
    $data['page'] = 'home';
    $this->layout->view('pages/home', $data);     // Render view and layout
	}

	public function blog($item)
	{
	  $success = True;
	  
    // Load menu
    $menu = APPPATH . 'views/markdown/blog/menu';
    if (file_exists($menu)) {
      $data['menu'] = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
    } else {
	    $success = False;
	  }
    
    // Load post **TODO: Add support for repeated titles
    $file = APPPATH . 'views/markdown/blog/items/' . $item . '.md';
	  if (!file_exists($file)) {
      if (count($data['menu']) > 0) {
        $item = $data['menu'][0];
        $file = APPPATH . 'views/markdown/blog/items/' . $item . '.md';
      } else {
	      $success = False;
      }
	  }
	  
    if ($success) {
	    $md = file_get_contents($file);
      $data['content'] = parse_markdown_extra($md);
	  } else if ( ! $success) {
	    show_404();
    }
	  
    $data['page'] = 'blog';
    $data['post'] = $item;
    $this->layout->view('pages/blog', $data);     // Render view and layout
	}

	public function projects($item)
	{
	  $success = True;
	  
    // Load menu
    $menu = APPPATH . 'views/markdown/projects/menu';
    if (file_exists($menu)) {
      $data['menu'] = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
    } else {
	    $success = False;
	  }
    
    // Load post **TODO: Add support for repeated titles
    $file = APPPATH . 'views/markdown/projects/items/' . $item . '.md';
	  if (!file_exists($file)) {
      if (count($data['menu']) > 0) {
        $item = $data['menu'][0];
        $file = APPPATH . 'views/markdown/projects/items/' . $item . '.md';
      } else {
	      $success = False;
      }
	  }
	  
    if ($success) {
	    $md = file_get_contents($file);
      $data['content'] = parse_markdown_extra($md);
	  } else if ( ! $success) {
	    show_404();
    }
	  
    $data['page'] = 'projects';
    $data['post'] = $item;
    $this->layout->view('pages/projects', $data);     // Render view and layout
	}
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
