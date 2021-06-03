<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Slider extends CI_Controller {
	function __construct() {
		parent::__construct();
		sf_construct();
		$this->load->model('Slider_model');
		$this->load->library('form_validation');
	}

	public function testApi() {
		$this->load->library('curl');
		$result = $this->curl->simple_get('https://www.google.com/');
		echo $result;
	}

	public function exportpdf() {
		export_to_pdf("<h1>coba</h1>", "coba", "filename");
	}

	public function qrcode() {
		sf_qr_generate("lagi nonton chanel peternakkode");
	}

	public function index() {
		sf_validate('M');
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q != '') {
			$config['base_url'] = base_url() . 'slider/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'slider/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'slider/index.html';
			$config['first_url'] = base_url() . 'slider/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Slider_model->total_rows($q);
		$slider = $this->Slider_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = [
			'slider_data' => $slider,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'content' => 'backend/slider/slider_list',
		];
		$this->load->view(layout(), $data);
	}

	public function lookup() {
		sf_validate('M');
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));
		$idhtml = $this->input->get('idhtml');

		if ($q != '') {
			$config['base_url'] = base_url() . 'slider/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'slider/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'slider/index.html';
			$config['first_url'] = base_url() . 'slider/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Slider_model->total_rows($q);
		$slider = $this->Slider_model->get_limit_data($config['per_page'], $start, $q);

		$data = [
			'slider_data' => $slider,
			'idhtml' => $idhtml,
			'q' => $q,
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'content' => 'backend/slider/slider_lookup',
		];
		ob_start();
		$this->load->view($data['content'], $data);
		return ob_get_contents();
		ob_end_clean();
	}

	public function read($id) {
		sf_validate('R');
		$row = $this->Slider_model->get_by_id($id);
		if ($row) {
			$data = [
				'id_slider' => $row->id_slider,
				'gambar' => $row->gambar,
				'judul' => $row->judul,
				'kategori' => $row->kategori,
				'note' => $row->note,
				'add_1' => $row->add_1,
				'add_2' => $row->add_2,
				'created_at' => $row->created_at,
				'created_by' => $row->created_by,
				'updated_at' => $row->updated_at,
				'updated_by' => $row->updated_by,
				'isactive' => $row->isactive,
				'hits' => $row->hits,
				'content' => 'backend/slider/slider_read',
			];
			$this->load->view(layout(), $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('slider'));
		}
	}

	public function create() {
		sf_validate('C');
		$data = [
			'button' => 'Create',
			'action' => site_url('slider/create_action'),
			'id_slider' => set_value('id_slider'),
			'gambar' => set_value('gambar'),
			'judul' => set_value('judul'),
			'kategori' => set_value('kategori'),
			'note' => set_value('note'),
			'add_1' => set_value('add_1'),
			'add_2' => set_value('add_2'),
			'created_at' => set_value('created_at'),
			'created_by' => set_value('created_by'),
			'updated_at' => set_value('updated_at'),
			'updated_by' => set_value('updated_by'),
			'isactive' => set_value('isactive'),
			'hits' => set_value('hits'),
			'content' => 'backend/slider/slider_form',
		];
		$this->load->view(layout(), $data);
	}

	public function create_action() {
		sf_validate('c');
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = [
				'gambar' => sf_upload('slider', 'assets/blogsekolah/slider/', 'jpeg|jpg|png', 500000, 'gambar'),
				'judul' => $this->input->post('judul', TRUE),
				'kategori' => $this->input->post('kategori', TRUE),
				'note' => $this->input->post('note', TRUE),
				'add_1' => $this->input->post('add_1', TRUE),
				'add_2' => $this->input->post('add_2', TRUE),
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('username'),
				'updated_at' => $this->input->post('updated_at', TRUE),
				'updated_by' => $this->input->post('updated_by', TRUE),
				'isactive' => 1,
				'hits' => $this->input->post('hits', TRUE),
			];

			$this->Slider_model->insert($data);
			$this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
			redirect(site_url('slider'));
		}
	}

	public function update($id) {
		sf_validate('U');
		$row = $this->Slider_model->get_by_id($id);

		if ($row) {
			$data = [
				'button' => 'Update',
				'action' => site_url('slider/update_action'),
				'id_slider' => set_value('id_slider', $row->id_slider),
				'gambar' => set_value('gambar', $row->gambar),
				'judul' => set_value('judul', $row->judul),
				'kategori' => set_value('kategori', $row->kategori),
				'note' => set_value('note', $row->note),
				'add_1' => set_value('add_1', $row->add_1),
				'add_2' => set_value('add_2', $row->add_2),
				'created_at' => set_value('created_at', $row->created_at),
				'created_by' => set_value('created_by', $row->created_by),
				'updated_at' => set_value('updated_at', $row->updated_at),
				'updated_by' => set_value('updated_by', $row->updated_by),
				'isactive' => set_value('isactive', $row->isactive),
				'hits' => set_value('hits', $row->hits),
				'content' => 'backend/slider/slider_form',
			];
			$this->load->view(layout(), $data);
		} else {
			$this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
			redirect(site_url('slider'));
		}
	}

	public function update_action() {
		sf_validate('U');
		if (!is_allow('U_' . ucwords($this->router->fetch_class()))) {
			$this->session->set_flashdata('message', 'Maaf, Anda tidak memiliki akses untuk membuat data ' . ucwords($this->router->fetch_class()));
			redirect(site_url(strtolower($this->router->fetch_class())));
		}
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id_slider', TRUE));
		} else {
			$data = [
				'gambar' => sf_upload('slider', 'assets/blogsekolah/slider/', 'jpeg|jpg|png', 500000, 'gambar'),
				'judul' => $this->input->post('judul', TRUE),
				'kategori' => $this->input->post('kategori', TRUE),
				'note' => $this->input->post('note', TRUE),
				'add_1' => $this->input->post('add_1', TRUE),
				'add_2' => $this->input->post('add_2', TRUE),
				'created_at' => $this->input->post('created_at', TRUE),
				'created_by' => $this->input->post('created_by', TRUE),
				'updated_at' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('username'),
				'isactive' => $this->input->post('isactive', TRUE),
				'hits' => $this->input->post('hits', TRUE),
			];

			$this->Slider_model->update($this->input->post('id_slider', TRUE), $data);
			$this->session->set_flashdata('message', 'Edit data telah berhasil!');
			redirect(site_url('slider'));
		}
	}

	public function delete($id) {
		sf_validate('D');
		$row = $this->Slider_model->get_by_id($id);

		if ($row) {
			/*$data = array(
				            'isactive'=>0,
				            );
			*/
			$this->Slider_model->delete($id);
			$this->session->set_flashdata('message', 'Hapus data berhasil!');
			redirect(site_url('slider'));
		} else {
			$this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
			redirect(site_url('slider'));
		}
	}

	public function _rules() {
		$this->form_validation->set_rules('gambar', 'gambar', 'trim');
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('note', 'note', 'trim');
		$this->form_validation->set_rules('add_1', 'add 1', 'trim');
		$this->form_validation->set_rules('add_2', 'add 2', 'trim');
		$this->form_validation->set_rules('created_at', 'created at', 'trim');
		$this->form_validation->set_rules('created_by', 'created by', 'trim');
		$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
		$this->form_validation->set_rules('updated_by', 'updated by', 'trim');
		$this->form_validation->set_rules('isactive', 'isactive', 'trim');
		$this->form_validation->set_rules('hits', 'hits', 'trim');
		$this->form_validation->set_rules('id_slider', 'id_slider', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel() {
		sf_validate('E');
		$this->load->helper('exportexcel');
		$namaFile = "slider.xls";
		$judul = "slider";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Gambar");
		xlsWriteLabel($tablehead, $kolomhead++, "Judul");
		xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
		xlsWriteLabel($tablehead, $kolomhead++, "Note");
		xlsWriteLabel($tablehead, $kolomhead++, "Add 1");
		xlsWriteLabel($tablehead, $kolomhead++, "Add 2");
		xlsWriteLabel($tablehead, $kolomhead++, "Created At");
		xlsWriteLabel($tablehead, $kolomhead++, "Created By");
		xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
		xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
		xlsWriteLabel($tablehead, $kolomhead++, "Isactive");
		xlsWriteLabel($tablehead, $kolomhead++, "Hits");

		foreach ($this->Slider_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->gambar);
			xlsWriteLabel($tablebody, $kolombody++, $data->judul);
			xlsWriteNumber($tablebody, $kolombody++, $data->kategori);
			xlsWriteLabel($tablebody, $kolombody++, $data->note);
			xlsWriteLabel($tablebody, $kolombody++, $data->add_1);
			xlsWriteLabel($tablebody, $kolombody++, $data->add_2);
			xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
			xlsWriteLabel($tablebody, $kolombody++, $data->created_by);
			xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
			xlsWriteLabel($tablebody, $kolombody++, $data->updated_by);
			xlsWriteNumber($tablebody, $kolombody++, $data->isactive);
			xlsWriteNumber($tablebody, $kolombody++, $data->hits);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}
}

/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-08-27 15:27:37 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */