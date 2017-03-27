<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{	
		/*$content['nama']="Nafianta Budi P";
		$content['kelas']="TI-2D |1541180096";
		$content['phone']="+6283-838-576-089";
		$content['email']="nafiantabudi96@gmail.com";
		$content['addres']="Jl Mergan Kelurahan Blok D1 Malang";
		$content['born']="Malang 16/06/1996";
		$content['hobbies']="Futsal,Reading,Movie";*/
		
		$this->load->view('about');
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */