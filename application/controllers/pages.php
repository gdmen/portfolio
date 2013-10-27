<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

    $this->demo_url = 'http://archive.garymenezes.com/';

    $this->load->spark('markdown-extra/0.0.0');

		$this->layout->title("Gary Menezes");
    $this->layout->js(base_url().'assets/js/jquery.min.js');
    $this->layout->js(base_url().'assets/js/bootstrap.js');
    //$this->layout->js(base_url().'assets/js/custom.js');
    $this->layout->css(base_url().'assets/css/styles.css');
    $this->layout->css(base_url().'assets/css/styles-responsive.css');
    $this->layout->css(base_url().'assets/css/font-awesome.min.css');
	}

	public function index()
  {
    $data['page'] = 'employment';
    
    $blurb_file = APPPATH . 'views/markdown/static/home.md';
    $data['blurb'] = '';
    // Load blurb
    if(file_exists($blurb_file) && ($blurb_file = file_get_contents($blurb_file)) !== "") {
      $dob = new DateTime('1992-2-17');
      $blurb_file = preg_replace('/\$\$age\$\$/', $dob->diff(new DateTime())->format('%Y%'), $blurb_file); 
      $data['blurb'] = parse_markdown_extra($blurb_file);
    }
      
    // array of highlight elements on the front page
    $data['highlights'] = array();
    
    // add most recent blog post
    
    // add first project
    
    // 
    $this->layout->view('pages/home', $data);     // Render view and layout
	}

	public function employment()
  {
	  $page = 'employment';
    $data['page'] = $page;
    
    // Load menu
    // menu element = [<page url>, <thumbnail url>, <title>]
    $data['items'] = array();
    
    $menu_items = array();
    $menu = APPPATH . 'views/markdown/'. $page .'/menu';
    if(file_exists($menu)) {
      $menu_items = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
    } else {
      show_404();
    }
    $thumbnails =  glob('assets/img/thumbnails/'. $page .'/*.{jpg,jpeg,JPG,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);
    // TODO: improve the logic here - O(n^2) atm
    foreach($menu_items as $item) {
      foreach($thumbnails as $image_path) {
        $project_title = basename($image_path, '.' . pathinfo($image_path)['extension']);
        if($project_title === $item) {
          $data['items'][$item] = [base_url() . $page . '#' . $item,
                             $image_path,
                             $item];
        }
      }
    }
    
    //$this->layout->js(base_url().'assets/js/jquery.fancybox.js');
    //$this->layout->css(base_url().'assets/css/jquery.fancybox.css');
    
    // Load content for each menu item
    foreach($data['items'] as $menu_data) {
      $item_name = $menu_data[2];
      $file = APPPATH . 'views/markdown/'. $page .'/items/' . $item_name . ".md";
      // Load project
      if(is_file($file)) {
        if(($text = file_get_contents($file)) !== "") {
          $text = preg_replace('/\$\$content_url\$\$/', base_url() . 'assets/content/', $text);
          $text = preg_replace('/\$\$demo_url\$\$/', $this->demo_url, $text);
          $section_blob = "";
          $section_title = "";
          foreach(preg_split("/((\r?\n)|(\r\n?))/", $text) as $line) {
            if(preg_match("/^----(.*)----$/", $line, $match)) {
              if($section_title !== "" && $section_blob !== ""){
                $parsed_blob = "";
                if($section_title == "body") {
                  $parsed_blob = parse_markdown_extra($section_blob);
                } else {
                  $parsed_blob = $section_blob;
                }
                $data['items'][$item_name][$section_title] = $parsed_blob;
                $section_blob = "";
              }
              $section_title = strtolower($match[1]);
            } else {
              $section_blob .= $line . "\n";
            }
          }
        }
      } else {
        show_404();
      }
    }
    $this->layout->view('pages/employment', $data);
	}

	public function education()
  {
	  $page = 'education';
    $data['page'] = $page;
    
    $blurb_file = APPPATH . 'views/markdown/static/home.md';
    $data['blurb'] = '';
    // Load blurb
    if(file_exists($blurb_file) && ($blurb_file = file_get_contents($blurb_file)) !== "") {
      $dob = new DateTime('1992-2-17');
      $blurb_file = preg_replace('/\$\$age\$\$/', $dob->diff(new DateTime())->format('%Y%'), $blurb_file); 
      $data['blurb'] = parse_markdown_extra($blurb_file);
    }
      
    // array of highlight elements on the front page
    $data['highlights'] = array();
    
    // add most recent blog post
    
    // add first project
    
    // 
    $this->layout->view('pages/education', $data);     // Render view and layout
	}

	public function projects($project)
	{
	  $page = 'projects';
    $data['page'] = $page;
    
    // If no project selected
    if($project === "") {
      // Load menu
      // menu element = [<page url>, <thumbnail url>, <title>, <thumbnail size>, <caption size>]
      $data['menu'] = array();
      
      // get name, size, and (implicitly) ordering of project menu items
      $menu_config = array();
      $menu = APPPATH . 'views/markdown/'. $page .'/menu';
      if(file_exists($menu)) {
        $menu_config_lines = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
        foreach($menu_config_lines as $line) {
          $split = explode(' ', $line);
          $menu_config[$split[1]] = $split;
        }
      } else {
        show_404();
      }
      
      // save menu elements
      $thumbnails =  glob('assets/img/thumbnails/'. $page .'/*.{jpg,jpeg,JPG,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);
      // TODO: improve the logic here - O(n^2) atm
      $current_row = -1;
      foreach($menu_config as $key => $menu_element) {
        foreach($thumbnails as $image_path) {
          $project_title = basename($image_path, '.' . pathinfo($image_path)['extension']);
          if($project_title === $key) {
            if($menu_element[0] === "1") {
              $current_row += 1;
            }
            $data['menu'][$current_row][] = [base_url() . $page . '/' . $menu_element[1],
                                             $image_path,
                                             preg_replace('/_/', ' ', $menu_element[1]),
                                             $menu_element[2],
                                             $menu_element[3],
                                             $menu_element[0]];
          }
        }
      }
      $this->layout->view('pages/projects', $data);
    } else {
      $project_config = array(
          'plaintext' => ['title', 'links', 'technologies'],
          'md' => ['authors', 'summary', 'features', 'details', 'bugs', 'media'],
          'menu' => ['summary', 'features', 'details', 'bugs', 'media']
        );
      $this->layout->js(base_url().'assets/js/jquery.fancybox.js');
      $this->layout->css(base_url().'assets/css/jquery.fancybox.css');
      
      $file = APPPATH . 'views/markdown/'. $page .'/items/' . $project . ".md";
      $data['project_menu'] = array();
      // Load project
      if(is_file($file)) {
        if(($text = file_get_contents($file)) !== "") {
          $text = preg_replace('/\$\$content_url\$\$/', base_url() . 'assets/content/', $text);
          $text = preg_replace('/\$\$demo_url\$\$/', $this->demo_url, $text);
          $section_blob = "";
          $section_title = "";
          foreach(preg_split("/((\r?\n)|(\r\n?))/", $text) as $line) {
            if(preg_match("/^----(.*)----$/", $line, $match)) {
              if($section_title !== "" && $section_blob !== ""){
                $parsed_blob = "";
                if(in_array($section_title, $project_config['md'])) {
                  $parsed_blob = parse_markdown_extra($section_blob);
                } else if($section_title == "technologies") {
                  $parsed_blob = explode(',', $section_blob);
                } else {
                  $parsed_blob = $section_blob;
                }
                $data['project_' . $section_title] = $parsed_blob;
                if(in_array($section_title, $project_config['menu'])) {
                  $data['project_menu'][] = $section_title;
                }
                $section_blob = "";
              }
              $section_title = strtolower($match[1]);
            } else {
              $section_blob .= $line . "\n";
            }
          }
        }
      } else {
        show_404();
      }
	    $this->layout->view('pages/project', $data);
	  }
	}
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
