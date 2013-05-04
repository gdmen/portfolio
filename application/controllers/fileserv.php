<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FileServ extends CI_Controller {

	public function Flash_Piano($name)
  {
    $this->load->helper('download');
    $name = base_url() . 'assets/content/Flash_Piano/pitches/' . $name;
    $file = file_get_contents($name);
    //header('content-type: audio/mpeg');
    //header('content-disposition: filename="music.mp3"');
    //echo $file;
    force_download($name, $file);
	}
}
/* End of file fileserv.php */
/* Location: ./application/controllers/fileserv.php */
