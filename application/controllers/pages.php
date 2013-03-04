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
    $this->layout->css(base_url().'assets/css/font-awesome.min.css');
    $this->layout->css(base_url().'assets/css/custom.css');
	}

	public function index()
  {
    $data['page'] = 'home';
    $this->layout->view('pages/home', $data);     // Render view and layout
	}

	public function blog($item)
	{
	  $page = 'blog';
    $success = True;
    
    // Load menu
    $menu = APPPATH . 'views/markdown/'. $page .'/menu';
    if (file_exists($menu)) {
      $data['menu'] = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
    } else {
      $success = False;
    }
    
    $file = APPPATH . 'views/markdown/'. $page .'/items/';
    // Load default post
    if ($item === "") {
      if (count($data['menu']) > 0) {
        $item = $data['menu'][0];
        $file .= $item . '.md';
      } else {
        $success = False;
      }
    } else {
      $file .= $item . '.md';
    }
    
    // Load post
    // TODO: Add support for repeated titles
    if (file_exists($file)) {
      $md = file_get_contents($file);
      $data['content'] = parse_markdown_extra($md);
    } else {
      $success = False;
    }
    
    if ( ! $success) {
      show_404();
    }
    
    $data['page'] = $page;
    $data['active'] = $item;
	  $this->layout->view('pages/blog', $data);
	}

	public function projects($project)
	{
	  $page = 'projects';
    $success = True;
    
    $data['page'] = $page;
    $data['active'] = $project;
    
    // If no project selected
    if ($project === "") {
      // Load menu
      $menu = APPPATH . 'views/markdown/'. $page .'/menu';
      if (file_exists($menu)) {
        $data['menu'] = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
        $data['content'] = "x";
	      $this->layout->view('pages/projects', $data);
      } else {
        show_404();
      }
    } else {
      $dir = APPPATH . 'views/markdown/'. $page .'/items/' . $project;
      // Load project
      if (is_dir($dir)) {
        $data['project_menu'] = array();
        $mds = ['summary', 'features', 'media', 'details', 'bugs', 'technologies'];
        $plaintexts = ['title', 'authors', 'links'];
        foreach ($mds as $c) {
          $file = $dir . '/'. $c .'.md';
          if (file_exists($file) && ($md = file_get_contents($file)) !== "") {
            $md = preg_replace('/\$\$content_url\$\$/', base_url() . 'assets/content/', $md); 
            $data['project_' . $c] = parse_markdown_extra($md);
            $data['project_menu'][] = $c;
          }
        }
        foreach ($plaintexts as $c) {
          $file = $dir . '/'. $c .'.md';
          if (file_exists($file)) {
            $data['project_' . $c] = file_get_contents($file);
          }
        }
      } else {
        $success = False;
      }
      
      if ( ! $success) {
        show_404();
      }
	    $this->layout->view('pages/project', $data);
	  }
	}
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
