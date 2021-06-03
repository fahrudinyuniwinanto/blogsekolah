<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Siswa extends CI_Controller {
	function __construct() {
		parent::__construct();
		sf_construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');
	}

	public function index() {
		sf_validate('M');
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q != '') {
			$config['base_url'] = base_url() . 'siswa/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'siswa/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'siswa/index.html';
			$config['first_url'] = base_url() . 'siswa/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Siswa_model->total_rows($q);
		$siswa = $this->Siswa_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'siswa_data' => $siswa,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'content' => 'backend/siswa/siswa_list',
		);
		$this->load->view(layout(), $data);
	}

	public function lookup() {
		sf_validate('M');
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));
		$idhtml = $this->input->get('idhtml');

		if ($q != '') {
			$config['base_url'] = base_url() . 'siswa/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'siswa/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'siswa/index.html';
			$config['first_url'] = base_url() . 'siswa/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Siswa_model->total_rows($q);
		$siswa = $this->Siswa_model->get_limit_data($config['per_page'], $start, $q);

		$data = array(
			'siswa_data' => $siswa,
			'idhtml' => $idhtml,
			'q' => $q,
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'content' => 'backend/siswa/siswa_lookup',
		);
		ob_start();
		$this->load->view($data['content'], $data);
		return ob_get_contents();
		ob_end_clean();
	}

	public function read($id) {
		sf_validate('R');
		$row = $this->Siswa_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id_siswa' => $row->id_siswa,
				'fullname' => $row->fullname,
				'nik' => $row->nik,
				'email' => $row->email,
				'tanggal_masuk' => $row->tanggal_masuk,
				'foto' => $row->foto,
				'nomor_telp' => $row->nomor_telp,
				'alumni' => $row->alumni,
				'note' => $row->note,
				'created_by' => $row->created_by,
				'updated_by' => $row->updated_by,
				'created_at' => $row->created_at,
				'updated_at' => $row->updated_at,
				'add_1' => $row->add_1,
				'add_2' => $row->add_2,
				'content' => 'backend/siswa/siswa_read',
			);
			$this->load->view(layout(), $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('siswa'));
		}
	}

	public function create() {
		sf_validate('C');
		$data = array(
			'button' => 'Create',
			'action' => site_url('siswa/create_action'),
			'id_siswa' => set_value('id_siswa'),
			'fullname' => set_value('fullname'),
			'nik' => set_value('nik'),
			'email' => set_value('email'),
			'tanggal_masuk' => set_value('tanggal_masuk'),
			'foto' => set_value('foto'),
			'nomor_telp' => set_value('nomor_telp'),
			'alumni' => set_value('alumni'),
			'note' => set_value('note'),
			'created_by' => set_value('created_by'),
			'updated_by' => set_value('updated_by'),
			'created_at' => set_value('created_at'),
			'updated_at' => set_value('updated_at'),
			'add_1' => set_value('add_1'),
			'add_2' => set_value('add_2'),
			'data_pasar'=>get_data_kategori(),
			'content' => 'backend/siswa/siswa_form',
		);
		$this->load->view(layout(), $data);
	}

	public function create_action() {
		sf_validate('c');
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'fullname' => $this->input->post('fullname', TRUE),
				'nik' => $this->input->post('nik', TRUE),
				'email' => $this->input->post('email', TRUE),
				'tanggal_masuk' => $this->input->post('tanggal_masuk', TRUE),
				'foto' => $this->input->post('foto', TRUE),
				'nomor_telp' => $this->input->post('nomor_telp', TRUE),
				'alumni' => $this->input->post('alumni', TRUE),
				'note' => $this->input->post('note', TRUE),
				'created_by' => $this->session->userdata('username'),
				'updated_by' => $this->input->post('updated_by', TRUE),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => $this->input->post('updated_at', TRUE),
				'add_1' => $this->input->post('add_1', TRUE),
				'add_2' => $this->input->post('add_2', TRUE),
			);

			$this->Siswa_model->insert($data);
			$this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
			redirect(site_url('siswa'));
		}
	}

	public function update($id) {
		sf_validate('U');
		$row = $this->Siswa_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('siswa/update_action'),
				'id_siswa' => set_value('id_siswa', $row->id_siswa),
				'fullname' => set_value('fullname', $row->fullname),
				'nik' => set_value('nik', $row->nik),
				'email' => set_value('email', $row->email),
				'tanggal_masuk' => set_value('tanggal_masuk', $row->tanggal_masuk),
				'foto' => set_value('foto', $row->foto),
				'nomor_telp' => set_value('nomor_telp', $row->nomor_telp),
				'alumni' => set_value('alumni', $row->alumni),
				'note' => set_value('note', $row->note),
				'created_by' => set_value('created_by', $row->created_by),
				'updated_by' => set_value('updated_by', $row->updated_by),
				'created_at' => set_value('created_at', $row->created_at),
				'updated_at' => set_value('updated_at', $row->updated_at),
				'add_1' => set_value('add_1', $row->add_1),
				'add_2' => set_value('add_2', $row->add_2),
				'content' => 'backend/siswa/siswa_form',
			);
			$this->load->view(layout(), $data);
		} else {
			$this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
			redirect(site_url('siswa'));
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
			$this->update($this->input->post('id_siswa', TRUE));
		} else {
			$data = array(
				'fullname' => $this->input->post('fullname', TRUE),
				'nik' => $this->input->post('nik', TRUE),
				'email' => $this->input->post('email', TRUE),
				'tanggal_masuk' => $this->input->post('tanggal_masuk', TRUE),
				'foto' => $this->input->post('foto', TRUE),
				'nomor_telp' => $this->input->post('nomor_telp', TRUE),
				'alumni' => $this->input->post('alumni', TRUE),
				'note' => $this->input->post('note', TRUE),
				'created_by' => $this->input->post('created_by', TRUE),
				'updated_by' => $this->session->userdata('username'),
				'created_at' => $this->input->post('created_at', TRUE),
				'updated_at' => date('Y-m-d H:i:s'),
				'add_1' => $this->input->post('add_1', TRUE),
				'add_2' => $this->input->post('add_2', TRUE),
			);

			$this->Siswa_model->update($this->input->post('id_siswa', TRUE), $data);
			$this->session->set_flashdata('message', 'Edit data telah berhasil!');
			redirect(site_url('siswa'));
		}
	}

	public function delete($id) {
		sf_validate('D');
		$row = $this->Siswa_model->get_by_id($id);

		if ($row) {
			/*$data = array(
				                'isactive'=>0,
				            );
			*/
			$this->Siswa_model->delete($id);
			$this->session->set_flashdata('message', 'Hapus data berhasil!');
			redirect(site_url('siswa'));
		} else {
			$this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
			redirect(site_url('siswa'));
		}
	}

	public function _rules() {
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'trim|required');
		$this->form_validation->set_rules('foto', 'foto', 'trim|required');
		$this->form_validation->set_rules('nomor_telp', 'nomor telp', 'trim|required');
		$this->form_validation->set_rules('alumni', 'alumni', 'trim|required');
		$this->form_validation->set_rules('note', 'note', 'trim');
		$this->form_validation->set_rules('created_by', 'created by', 'trim');
		$this->form_validation->set_rules('updated_by', 'updated by', 'trim');
		$this->form_validation->set_rules('created_at', 'created at', 'trim');
		$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
		$this->form_validation->set_rules('add_1', 'add 1', 'trim');
		$this->form_validation->set_rules('add_2', 'add 2', 'trim');
		$this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel() {
		sf_validate('E');
		$this->load->helper('exportexcel');
		$namaFile = "siswa.xls";
		$judul = "siswa";
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
		xlsWriteLabel($tablehead, $kolomhead++, "Fullname");
		xlsWriteLabel($tablehead, $kolomhead++, "Nik");
		xlsWriteLabel($tablehead, $kolomhead++, "Email");
		xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Masuk");
		xlsWriteLabel($tablehead, $kolomhead++, "Foto");
		xlsWriteLabel($tablehead, $kolomhead++, "Nomor Telp");
		xlsWriteLabel($tablehead, $kolomhead++, "Alumni");
		xlsWriteLabel($tablehead, $kolomhead++, "Note");
		xlsWriteLabel($tablehead, $kolomhead++, "Created By");
		xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
		xlsWriteLabel($tablehead, $kolomhead++, "Created At");
		xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
		xlsWriteLabel($tablehead, $kolomhead++, "Add 1");
		xlsWriteLabel($tablehead, $kolomhead++, "Add 2");

		foreach ($this->Siswa_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->fullname);
			xlsWriteLabel($tablebody, $kolombody++, $data->nik);
			xlsWriteLabel($tablebody, $kolombody++, $data->email);
			xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_masuk);
			xlsWriteLabel($tablebody, $kolombody++, $data->foto);
			xlsWriteLabel($tablebody, $kolombody++, $data->nomor_telp);
			xlsWriteNumber($tablebody, $kolombody++, $data->alumni);
			xlsWriteLabel($tablebody, $kolombody++, $data->note);
			xlsWriteNumber($tablebody, $kolombody++, $data->created_by);
			xlsWriteNumber($tablebody, $kolombody++, $data->updated_by);
			xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
			xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
			xlsWriteLabel($tablebody, $kolombody++, $data->add_1);
			xlsWriteLabel($tablebody, $kolombody++, $data->add_2);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-08-27 15:38:31 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */