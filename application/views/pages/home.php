class Main extends CI_Controller {
    // Layout used in this controller
    public $layout_view = 'layout/default';
 
    public function index() {
       $this->load->library('layout');          // Load layout library
       $this->layout->title('Site index page'); // Set page title
       $data = array();
       $this->layout->view('index', $data);     // Render view and layout
    }
}
