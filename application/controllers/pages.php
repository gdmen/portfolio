<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
    
    $this->load->spark('markdown-extra/0.0.0');
		
		$this->layout->title("Gary Menezes");
    $this->layout->js(base_url().'/assets/js/jquery.min.js');
    $this->layout->js(base_url().'assets/js/bootstrap.js');
    //$this->layout->js(base_url().'assets/js/custom.js');
    $this->layout->css(base_url().'assets/css/styles.css');
    $this->layout->css(base_url().'assets/css/styles-responsive.css');
    $this->layout->css(base_url().'assets/css/font-awesome.min.css');
	}

	public function index()
  {
    $data['page'] = 'home';
    
    $blurb_file = APPPATH . 'views/markdown/static/home.md';
    $data['blurb'] = '';
    // Load blurb
    if (file_exists($blurb_file) && ($blurb_file = file_get_contents($blurb_file)) !== "") {
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

	public function blog($offset)
	{
	  $page = 'blog';
    $data['page'] = $page;
    $posts_per_page = 3;
    
    $success = False;
    
    $data['posts'] = array();
    $posts = array();
    $num_posts = 0;
    $dir = APPPATH . 'views/markdown/'. $page .'/items/';
    // Get post paths
    if (is_dir($dir)) {
      // Sort posts by date & then get the offset segment
      $posts =  glob($dir . '/*.{md}', GLOB_BRACE);
      $num_posts = count($posts);
      natsort($posts);
      $posts = array_reverse($posts);
      // Fix invalid <$offset>
      $offset = ($offset > $num_posts - 1) ? $num_posts - ($num_posts % $posts_per_page) : max(0, $offset);
      $posts = array_slice($posts, $offset, $posts_per_page);
    }
    
    // Load selected posts
    foreach ($posts as $file) {
      if (file_exists($file)) {
        $basename = basename($file, '.md');
        $split = explode("_", $basename);
        $date = date_create_from_format('Y-m-d', $split[0]);
        $date = $date->format('d M Y');
        $title = preg_replace('/-/', ' ', $split[1]);
        $md = file_get_contents($file);
        $post = parse_markdown_extra($md);
        $data['posts'][] = ['title' => $title,
                            'date' => $date,
                            'post' => $post];
        $success = True;
      }
    }
    
    if ( ! $success) {
      show_404();
    }
    if ($offset > 0) {
      $data['new'] = base_url() . $page . '/' . max(0, $offset - $posts_per_page);
    }
    if ($offset + $posts_per_page < $num_posts) {
      $data['old'] = base_url() . $page . '/' . ($offset + $posts_per_page);
    }
	  $this->layout->view('pages/blog', $data);
	}

	public function blog_post($year,$month,$day,$name)
	{
	  $page = 'post';
    $data['page'] = $page;
    $posts_per_page = 5;
    
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
    
    $data['active'] = $item;
	  $this->layout->view('pages/blog', $data);
	}

	public function projects($project)
	{
	  $page = 'projects';
    $data['page'] = $page;
    $success = True;
    
    // If no project selected
    if ($project === "") {
      // Load menu
      // menu element = [<page url>, <thumbnail url>, <title>, <thumbnail size>, <caption size>]
      $data['menu'] = array();
      
      // get name, size, and (implicitly) ordering of project menu items
      $menu_config = array();
      $menu = APPPATH . 'views/markdown/'. $page .'/menu';
      if (file_exists($menu)) {
        $menu_config_lines = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
        foreach ($menu_config_lines as $line) {
          $split = explode(' ', $line);
          $menu_config[$split[1]] = $split;
        }
      } else {
        show_404();
      }
      
      // save menu elements
      $thumbnails =  glob('assets/img/thumbnails/*.{jpg,jpeg,JPG,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);
      // TODO: improve the logic here - O(n^2) atm
      $current_row = -1;
      foreach ($menu_config as $key => $menu_element) {
        foreach ($thumbnails as $image_path) {
          $project_title = basename($image_path, '.' . pathinfo($image_path)['extension']);
          if ($project_title === $key) {
            if ($menu_element[0] === "1") {
              $current_row += 1;
            }
            $data['menu'][$current_row][] = [base_url() . $page . '/' . $menu_element[1],
                                             $image_path,
                                             preg_replace('/_/', ' ', $menu_element[1]),
                                             $menu_element[2],
                                             $menu_element[3],
                                             $menu_element[0]];
          }
          //$data['menu'][] = [base_url() . $page . '/' . $project_title,
          //                   $image_path,
          //                   preg_replace('/_/', ' ', $project_title)];
        }
      }
      $this->layout->view('pages/projects', $data);
      /*
      $menu = APPPATH . 'views/markdown/'. $page .'/menu';
      if (file_exists($menu)) {
        $data['menu'] = preg_split('/[\n|\r]+/', file_get_contents($menu), -1, PREG_SPLIT_NO_EMPTY);
        $data['content'] = "x";
	      $this->layout->view('pages/projects', $data);
      } else {
        show_404();
      }
      */
    } else {
      $this->layout->js(base_url().'assets/js/jquery.fancybox.js');
      $this->layout->css(base_url().'assets/css/jquery.fancybox.css');
      
      $dir = APPPATH . 'views/markdown/'. $page .'/items/' . $project;
      $data['project_menu'] = array();
      // Load project
      if (is_dir($dir)) {
        $mds = ['authors', 'summary', 'features', 'details', 'bugs', 'media'];
        $plaintexts = ['title', 'links', 'technologies'];
        foreach ($mds as $c) {
          $file = $dir . '/'. $c .'.md';
          if (file_exists($file) && ($file = file_get_contents($file)) !== "") {
            $file = preg_replace('/\$\$content_url\$\$/', base_url() . 'assets/content/', $file);
            $file = preg_replace('/\$\$demo_url\$\$/', base_url() . 'demo/', $file);
            $file = preg_replace('/\$\$live_url\$\$/', base_url(), $file);
            $data['project_' . $c] = parse_markdown_extra($file);
            // Special formatting
            if ($c != 'authors') {
              $data['project_menu'][] = $c;
            }
          }
        }
        foreach ($plaintexts as $c) {
          $file = $dir . '/'. $c .'.md';
          if (file_exists($file)) {
            $file = file_get_contents($file);
            $file = preg_replace('/\$\$content_url\$\$/', base_url() . 'assets/content/', $file); 
            $file = preg_replace('/\$\$demo_url\$\$/', base_url() . 'demo/', $file);
            $file = preg_replace('/\$\$live_url\$\$/', base_url() . '/', $file);
            
            // Special formatting
            if ($c === 'technologies') {
              $file = explode(',', $file);
            }
            $data['project_' . $c] = $file;
          }
        }
      } else {
        $success = False;
      }
      
      if (!$success) {
        show_404();
      }
	    $this->layout->view('pages/project', $data);
	  }
	}

	public function photography()
  {
    $this->layout->js(base_url().'assets/js/jquery.fancybox.js');
    $this->layout->css(base_url().'assets/css/jquery.fancybox.css');
    $data['page'] = 'photography';
    
    $success = True;
    
    $blurb_file = APPPATH . 'views/markdown/static/photography.md';
    $data['blurb'] = '';
    // Load blurb
    if (file_exists($blurb_file) && ($blurb_file = file_get_contents($blurb_file)) !== "") {
      $dob = new DateTime('1992-2-17');
      $blurb_file = preg_replace('/\$\$age\$\$/', $dob->diff(new DateTime())->format('%Y%'), $blurb_file); 
      $data['blurb'] = parse_markdown_extra($blurb_file);
    } else {
      $success = False;
    }
    
    $data['images'] = array();
    $dir = 'assets/content/photography';
    // Load pictures
    if (is_dir($dir)) {
      foreach (new DirectoryIterator($dir) as $subdir) {
        if($subdir->isDir() && !$subdir->isDot()) {
          // get images in gallery
          $images =  glob($subdir->getPathname() . '/*.{jpg,jpeg,JPG,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);
          natsort($images);
          $data['images'][$subdir->getFilename()] = $images;
        }
      }
    } else {
      $success = False;
    }
    
    if (!$success) {
      show_404();
    }
    $this->layout->view('pages/photography', $data);
	}
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
