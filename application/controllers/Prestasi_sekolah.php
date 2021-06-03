<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prestasi_sekolah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sf_construct();
        $this->load->model('Prestasi_sekolah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        sf_validate('M');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'prestasi_sekolah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'prestasi_sekolah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'prestasi_sekolah/index.html';
            $config['first_url'] = base_url() . 'prestasi_sekolah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Prestasi_sekolah_model->total_rows($q);
        $prestasi_sekolah = $this->Prestasi_sekolah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'prestasi_sekolah_data' => $prestasi_sekolah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/prestasi_sekolah/prestasi_sekolah_list',
        );
        $this->load->view(layout(), $data);
    }

    public function lookup()
    {
        sf_validate('M');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        $idhtml = $this->input->get('idhtml');
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'prestasi_sekolah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'prestasi_sekolah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'prestasi_sekolah/index.html';
            $config['first_url'] = base_url() . 'prestasi_sekolah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Prestasi_sekolah_model->total_rows($q);
        $prestasi_sekolah = $this->Prestasi_sekolah_model->get_limit_data($config['per_page'], $start, $q);


        $data = array(
            'prestasi_sekolah_data' => $prestasi_sekolah,
            'idhtml' => $idhtml,
            'q' => $q,
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/prestasi_sekolah/prestasi_sekolah_lookup',
        );
        ob_start();
        $this->load->view($data['content'], $data);
        return ob_get_contents();
        ob_end_clean();
    }

    public function read($id) 
    {
        sf_validate('R');
        $row = $this->Prestasi_sekolah_model->get_by_id($id);
        if ($row) {
        $data = array(
		'id_prestasi' => $row->id_prestasi,
		'jenis_prestasi' => $row->jenis_prestasi,
		'nama_prestasi' => $row->nama_prestasi,
		'juara' => $row->juara,
		'tahun_perolehan' => $row->tahun_perolehan,
		'created_at' => $row->created_at,
		'created_by' => $row->created_by,
		'updated_at' => $row->updated_at,
		'updated_by' => $row->updated_by,
		'isactive' => $row->isactive,
		'add_1' => $row->add_1,
		'add_2' => $row->add_2,
		'note' => $row->note,
	    'content' => 'backend/prestasi_sekolah/prestasi_sekolah_read',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('prestasi_sekolah'));
        }
    }

    public function create() 
    {
        sf_validate('C');
        $data = array(
        'button' => 'Create',
        'action' => site_url('prestasi_sekolah/create_action'),
	    'id_prestasi' => set_value('id_prestasi'),
	    'jenis_prestasi' => set_value('jenis_prestasi'),
	    'nama_prestasi' => set_value('nama_prestasi'),
	    'juara' => set_value('juara'),
	    'tahun_perolehan' => set_value('tahun_perolehan'),
	    'created_at' => set_value('created_at'),
	    'created_by' => set_value('created_by'),
	    'updated_at' => set_value('updated_at'),
	    'updated_by' => set_value('updated_by'),
	    'isactive' => set_value('isactive'),
	    'add_1' => set_value('add_1'),
	    'add_2' => set_value('add_2'),
	    'note' => set_value('note'),
	    'content' => 'backend/prestasi_sekolah/prestasi_sekolah_form',
	);
        $this->load->view(layout(), $data);
    }
    
    public function create_action() 
    {
        sf_validate('c');        
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jenis_prestasi' => $this->input->post('jenis_prestasi',TRUE),
		'nama_prestasi' => $this->input->post('nama_prestasi',TRUE),
		'juara' => $this->input->post('juara',TRUE),
		'tahun_perolehan' => $this->input->post('tahun_perolehan',TRUE),
		'created_at' => date('Y-m-d H:i:s'),
		'created_by' => $this->session->userdata('username'),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
		'isactive' => 1,
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'note' => $this->input->post('note',TRUE),
	    );

            $this->Prestasi_sekolah_model->insert($data);
            $this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
            redirect(site_url('prestasi_sekolah'));
        }
    }
    
    public function update($id) 
    {
        sf_validate('U');
        $row = $this->Prestasi_sekolah_model->get_by_id($id);

        if ($row) {
            $data = array(
            'button' => 'Update',
            'action' => site_url('prestasi_sekolah/update_action'),
		'id_prestasi' => set_value('id_prestasi', $row->id_prestasi),
		'jenis_prestasi' => set_value('jenis_prestasi', $row->jenis_prestasi),
		'nama_prestasi' => set_value('nama_prestasi', $row->nama_prestasi),
		'juara' => set_value('juara', $row->juara),
		'tahun_perolehan' => set_value('tahun_perolehan', $row->tahun_perolehan),
		'created_at' => set_value('created_at', $row->created_at),
		'created_by' => set_value('created_by', $row->created_by),
		'updated_at' => set_value('updated_at', $row->updated_at),
		'updated_by' => set_value('updated_by', $row->updated_by),
		'isactive' => set_value('isactive', $row->isactive),
		'add_1' => set_value('add_1', $row->add_1),
		'add_2' => set_value('add_2', $row->add_2),
		'note' => set_value('note', $row->note),
	    'content' => 'backend/prestasi_sekolah/prestasi_sekolah_form',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('prestasi_sekolah'));
        }
    }
    
    public function update_action() 
    {
        sf_validate('U');
        if(!is_allow('U_'.ucwords($this->router->fetch_class()))){
            $this->session->set_flashdata('message', 'Maaf, Anda tidak memiliki akses untuk membuat data '.ucwords($this->router->fetch_class()));
            redirect(site_url(strtolower($this->router->fetch_class())));
        }
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_prestasi', TRUE));
        } else {
            $data = array(
		'jenis_prestasi' => $this->input->post('jenis_prestasi',TRUE),
		'nama_prestasi' => $this->input->post('nama_prestasi',TRUE),
		'juara' => $this->input->post('juara',TRUE),
		'tahun_perolehan' => $this->input->post('tahun_perolehan',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_at' => date('Y-m-d H:i:s'),
		'updated_by' => $this->session->userdata('username'),
		'isactive' => $this->input->post('isactive',TRUE),
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'note' => $this->input->post('note',TRUE),
	    );

            $this->Prestasi_sekolah_model->update($this->input->post('id_prestasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Edit data telah berhasil!');
            redirect(site_url('prestasi_sekolah'));
        }
    }
    
    public function delete($id) 
    {
        sf_validate('D');
        $row = $this->Prestasi_sekolah_model->get_by_id($id);

        if ($row) {
            /*$data = array(
                'isactive'=>0,
            );
            $this->Berita_model->update($id,$data);*/
            $this->Prestasi_sekolah_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus data berhasil!');
            redirect(site_url('prestasi_sekolah'));
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('prestasi_sekolah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis_prestasi', 'jenis prestasi', 'trim|required');
	$this->form_validation->set_rules('nama_prestasi', 'nama prestasi', 'trim|required');
	$this->form_validation->set_rules('juara', 'juara', 'trim|required');
	$this->form_validation->set_rules('tahun_perolehan', 'tahun perolehan', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim');
	$this->form_validation->set_rules('created_by', 'created by', 'trim');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
	$this->form_validation->set_rules('updated_by', 'updated by', 'trim');
	$this->form_validation->set_rules('isactive', 'isactive', 'trim');
	$this->form_validation->set_rules('add_1', 'add 1', 'trim');
	$this->form_validation->set_rules('add_2', 'add 2', 'trim');
	$this->form_validation->set_rules('note', 'note', 'trim');
	$this->form_validation->set_rules('id_prestasi', 'id_prestasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        sf_validate('E');
        $this->load->helper('exportexcel');
        $namaFile = "prestasi_sekolah.xls";
        $judul = "prestasi_sekolah";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Prestasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Prestasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Juara");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Perolehan");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Created By");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
	xlsWriteLabel($tablehead, $kolomhead++, "Isactive");
	xlsWriteLabel($tablehead, $kolomhead++, "Add 1");
	xlsWriteLabel($tablehead, $kolomhead++, "Add 2");
	xlsWriteLabel($tablehead, $kolomhead++, "Note");

	foreach ($this->Prestasi_sekolah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_prestasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_prestasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->juara);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_perolehan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_by);
	    xlsWriteNumber($tablebody, $kolombody++, $data->isactive);
	    xlsWriteLabel($tablebody, $kolombody++, $data->add_1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->add_2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->note);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Prestasi_sekolah.php */
/* Location: ./application/controllers/Prestasi_sekolah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-09-29 08:22:19 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */