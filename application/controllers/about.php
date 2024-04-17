<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

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
	public function index()
	{
		$title['title'] = 'ABIA Food';
		$this->load->view('template/header', $title);
		$this->load->view('page/home');
		$this->load->view('page/about');
		$this->load->view('page/menu');
		$this->load->view('page/event');
		$this->load->view('page/chefs');
		$this->load->view('page/gallery');
		$this->load->view('page/contact');
		$this->load->view('template/footer');
	}
} -->
