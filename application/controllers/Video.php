<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Video extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sf_construct();
        $this->load->model('Video_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        sf_validate('M');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'video/index.html';
            $config['first_url'] = base_url() . 'video/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Video_model->total_rows($q);
        $video = $this->Video_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'video_data' => $video,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/video/video_list',
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
            $config['base_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'video/index.html';
            $config['first_url'] = base_url() . 'video/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Video_model->total_rows($q);
        $video = $this->Video_model->get_limit_data($config['per_page'], $start, $q);


        $data = array(
            'video_data' => $video,
            'idhtml' => $idhtml,
            'q' => $q,
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'backend/video/video_lookup',
        );
        ob_start();
        $this->load->view($data['content'], $data);
        return ob_get_contents();
        ob_end_clean();
    }

    public function read($id) 
    {
        sf_validate('R');
        $row = $this->Video_model->get_by_id($id);
        if ($row) {
        $data = array(
		'id_video' => $row->id_video,
		'link' => $row->link,
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
	    'content' => 'backend/video/video_read',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('video'));
        }
    }

    public function create() 
    {
        sf_validate('C');
        $data = array(
        'button' => 'Create',
        'action' => site_url('video/create_action'),
	    'id_video' => set_value('id_video'),
	    'link' => set_value('link'),
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
	    'content' => 'backend/video/video_form',
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
		'link' => $this->input->post('link',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'note' => $this->input->post('note',TRUE),
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'created_at' => date('Y-m-d H:i:s'),
		'created_by' => $this->session->userdata('username'),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
		'isactive' => 1,
		'hits' => $this->input->post('hits',TRUE),
	    );

            $this->Video_model->insert($data);
            $this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
            redirect(site_url('video'));
        }
    }
    
    public function update($id) 
    {
        sf_validate('U');
        $row = $this->Video_model->get_by_id($id);

        if ($row) {
            $data = array(
            'button' => 'Update',
            'action' => site_url('video/update_action'),
		'id_video' => set_value('id_video', $row->id_video),
		'link' => set_value('link', $row->link),
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
	    'content' => 'backend/video/video_form',
	    );
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('video'));
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
            $this->update($this->input->post('id_video', TRUE));
        } else {
            $data = array(
		'link' => $this->input->post('link',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'note' => $this->input->post('note',TRUE),
		'add_1' => $this->input->post('add_1',TRUE),
		'add_2' => $this->input->post('add_2',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_at' => date('Y-m-d H:i:s'),
		'updated_by' => $this->session->userdata('username'),
		'isactive' => $this->input->post('isactive',TRUE),
		'hits' => $this->input->post('hits',TRUE),
	    );

            $this->Video_model->update($this->input->post('id_video', TRUE), $data);
            $this->session->set_flashdata('message', 'Edit data telah berhasil!');
            redirect(site_url('video'));
        }
    }
    
    public function delete($id) 
    {
        sf_validate('D');
        $row = $this->Video_model->get_by_id($id);

        if ($row) {
            /*$data = array(
                'isactive'=>0,
            );
            $this->Berita_model->update($id,$data);*/
            $this->Video_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus data berhasil!');
            redirect(site_url('video'));
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('video'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('link', 'link', 'trim|required');
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
	$this->form_validation->set_rules('hits', 'hits', 'trim|required');
	$this->form_validation->set_rules('id_video', 'id_video', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        sf_validate('E');
        $this->load->helper('exportexcel');
        $namaFile = "video.xls";
        $judul = "video";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Link");
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

	foreach ($this->Video_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->link);
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

/* End of file Video.php */
/* Location: ./application/controllers/Video.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-10-04 12:38:44 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */