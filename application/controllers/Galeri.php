<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sf_construct();
        $this->load->model('Galeri_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        sf_validate('M');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'galeri/index.html';
            $config['first_url'] = base_url() . 'galeri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Galeri_model->total_rows($q);
        $galeri = $this->Galeri_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'galeri_data' => $galeri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/galeri/galeri_list',
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
            $config['base_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'galeri/index.html';
            $config['first_url'] = base_url() . 'galeri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Galeri_model->total_rows($q);
        $galeri = $this->Galeri_model->get_limit_data($config['per_page'], $start, $q);


        $data = array(
            'galeri_data' => $galeri,
            'idhtml' => $idhtml,
            'q' => $q,
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/galeri/galeri_lookup',
        );
        ob_start();
        $this->load->view($data['content'], $data);
        return ob_get_contents();
        ob_end_clean();
    }

    public function read($id) 
    {
        sf_validate('R');
        $row = $this->Galeri_model->get_by_id($id);
        if ($row) {
        $data = array(
		'id_galeri' => $row->id_galeri,
		'gambar' => $row->gambar,
		'judul' => $row->judul,
		'deskripsi' => $row->deskripsi,
		'note' => $row->note,
		'add_1' => $row->add_1,
		'add_2' => $row->add_2,
		'created_at' => $row->created_at,
		'created_by' => $row->created_by,
		'updated_at' => $row->updated_at,
		'updated_by' => $row->updated_by,
		'isactive' => $row->isactive,
	    'content' => 'backend/galeri/galeri_read',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function create() 
    {
        sf_validate('C');
        $data = array(
        'button' => 'Create',
        'action' => site_url('galeri/create_action'),
	    'id_galeri' => set_value('id_galeri'),
	    'gambar' => set_value('gambar'),
	    'judul' => set_value('judul'),
	    'deskripsi' => set_value('deskripsi'),
	    'note' => set_value('note'),
	    'add_1' => set_value('add_1'),
	    'add_2' => set_value('add_2'),
	    'created_at' => set_value('created_at'),
	    'created_by' => set_value('created_by'),
	    'updated_at' => set_value('updated_at'),
	    'updated_by' => set_value('updated_by'),
	    'isactive' => set_value('isactive'),
	    'content' => 'backend/galeri/galeri_form',
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
		'gambar' => sf_upload('galeri', 'assets/blogsekolah/galeri/', 'jpeg|jpg|png', 1000000, 'gambar'),
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'note' => $this->input->post('note',TRUE),
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'created_at' => date('Y-m-d H:i:s'),
		'created_by' => $this->session->userdata('username'),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
		'isactive' => 1,
	    );

            $this->Galeri_model->insert($data);
            $this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
            redirect(site_url('galeri'));
        }
    }
    
    public function update($id) 
    {
        sf_validate('U');
        $row = $this->Galeri_model->get_by_id($id);

        if ($row) {
            $data = array(
            'button' => 'Update',
            'action' => site_url('galeri/update_action'),
		'id_galeri' => set_value('id_galeri', $row->id_galeri),
		'gambar' => set_value('gambar', $row->gambar),
		'judul' => set_value('judul', $row->judul),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'note' => set_value('note', $row->note),
		'add_1' => set_value('add_1', $row->add_1),
		'add_2' => set_value('add_2', $row->add_2),
		'created_at' => set_value('created_at', $row->created_at),
		'created_by' => set_value('created_by', $row->created_by),
		'updated_at' => set_value('updated_at', $row->updated_at),
		'updated_by' => set_value('updated_by', $row->updated_by),
		'isactive' => set_value('isactive', $row->isactive),
	    'content' => 'backend/galeri/galeri_form',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('galeri'));
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
            $this->update($this->input->post('id_galeri', TRUE));
        } else {
            $data = array(
		'gambar' => sf_upload('galeri', 'assets/blogsekolah/galeri/', 'jpeg|jpg|png', 1000000, 'gambar'),
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'note' => $this->input->post('note',TRUE),
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_at' => date('Y-m-d H:i:s'),
		'updated_by' => $this->session->userdata('username'),
		'isactive' => $this->input->post('isactive',TRUE),
	    );

            $this->Galeri_model->update($this->input->post('id_galeri', TRUE), $data);
            $this->session->set_flashdata('message', 'Edit data telah berhasil!');
            redirect(site_url('galeri'));
        }
    }
    
    public function delete($id) 
    {
        sf_validate('D');
        $row = $this->Galeri_model->get_by_id($id);

        if ($row) {
            /*$data = array(
                'isactive'=>0,
            );
            $this->Berita_model->update($id,$data);*/
            $this->Galeri_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus data berhasil!');
            redirect(site_url('galeri'));
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('galeri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('gambar', 'gambar', 'trim');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('note', 'note', 'trim');
	$this->form_validation->set_rules('add_1', 'add 1', 'trim');
	$this->form_validation->set_rules('add_2', 'add 2', 'trim');
	$this->form_validation->set_rules('created_at', 'created at', 'trim');
	$this->form_validation->set_rules('created_by', 'created by', 'trim');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
	$this->form_validation->set_rules('updated_by', 'updated by', 'trim');
	$this->form_validation->set_rules('isactive', 'isactive', 'trim');
	$this->form_validation->set_rules('id_galeri', 'id_galeri', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        sf_validate('E');
        $this->load->helper('exportexcel');
        $namaFile = "galeri.xls";
        $judul = "galeri";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Note");
	xlsWriteLabel($tablehead, $kolomhead++, "Add 1");
	xlsWriteLabel($tablehead, $kolomhead++, "Add 2");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Created By");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
	xlsWriteLabel($tablehead, $kolomhead++, "Isactive");

	foreach ($this->Galeri_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gambar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->note);
	    xlsWriteLabel($tablebody, $kolombody++, $data->add_1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->add_2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_by);
	    xlsWriteNumber($tablebody, $kolombody++, $data->isactive);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-08-27 15:38:17 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */