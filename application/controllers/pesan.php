<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d');
        $date_created = date('Y-m-d H:i:s');

        $check = $this->db->query("SELECT * FROM visitor_online WHERE ip='$ip' AND date_created")->num_rows();
		
		if ($check == 0) {
		} else {
			$this->db->query("INSERT INTO visitor_online (ip, date, date_created) VALUES('$ip','$date','$date_created')");
		}

		$title['title'] = 'ABIA Food';

		$this->load->view('template/header_pesan', $title);
		$this->load->view('page/sample-inner-page');
		$this->load->view('template/footer');
	}
}
