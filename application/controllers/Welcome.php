<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		redirect('login');
	}

	public function contactus()
	{
		$this->load->view('main/pages/contactus');
	}

	public function aboutus()
	{
		$this->load->view('main/pages/aboutus');
	}

	public function pp()
	{
		$this->load->view('main/pages/pp');
	}

	public function home()
	{
		$data['event'] = $this->model_event->get()->result();
		$data['trending'] = $this->model_event->trending()->result();
		$data['closer'] = $this->model_event->closer()->result();

		$this->load->view('main/home/home', $data);
	}

}
