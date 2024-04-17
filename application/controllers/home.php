<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

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
		$this->load->model('model_reservasi');
		$this->load->model('model_kontak');
	}

	public function index()
	{
		$date_today = date('Y-m-d');
		$pengunjung = $this->db->query("SELECT COUNT(id) as id FROM visitor_offline")->row();
		$totalpengunjungoffline = isset($pengunjung->id) ? ($pengunjung->id) : 0;
		$data['totalpengunjungoffline'] = $totalpengunjungoffline;

		$date_today = date('Y-m-d');
		$pengunjung = $this->db->query("SELECT COUNT(id) as id FROM visitor_online")->row();
		$totalpengunjungonline = isset($pengunjung->id) ? ($pengunjung->id) : 0;
		$data['totalpengunjungonline'] = $totalpengunjungonline;

		$data['totalpengunjung'] = $totalpengunjungoffline+$totalpengunjungonline;

		$ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d');
        $date_created = date('Y-m-d H:i:s');

        $check = $this->db->query("SELECT * FROM visitor_offline WHERE ip='$ip' AND date_created")->num_rows();
		$check1 = $this->db->query("SELECT * FROM visitor_online WHERE ip='$ip' AND date_created")->num_rows();
		
		if ($check1 == 0) {
		} else {
			$this->db->query("INSERT INTO visitor_online (ip, date, date_created) VALUES('$ip','$date','$date_created')");
		}
		
		if ($check == 0) {
		} else {
			$this->db->query("INSERT INTO visitor_offline (ip, date, date_created) VALUES('$ip','$date','$date_created')");
		}

		$title['title'] = 'ABIA Food';

		$this->load->view('template/header', $title);
		$this->load->view('page/home');
		$this->load->view('page/about', $data);
		$this->load->view('page/menu');
		$this->load->view('page/event');
		$this->load->view('page/gallery');
		$this->load->view('page/chefs');
		$this->load->view('page/contact');
		$this->load->view('template/footer');
	}

	public function reservasi()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$jumlah_orang = $this->input->post('jumlah_orang');
		$pesan = $this->input->post('pesan');

		$reservasi = array(
			'nama' => $nama,
			'email' => $email,
			'telepon' => $telepon,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'jumlah_orang' => $jumlah_orang,
			'pesan' => $pesan
		);

		$this->model_reservasi->insertReservasi($reservasi);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan Anda telah terkirim. Terima Kasih !</div>');
		redirect('');
	}

	public function kontak()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');

		$kontak = array(
			'nama' => $nama,
			'email' => $email,
			'subjek' => $subjek,
			'pesan' => $pesan
		);

		$this->model_kontak->insertKontak($kontak);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan Anda telah terkirim. Terima Kasih !</div>');
		redirect('');
	}
}
