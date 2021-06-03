<?php
//Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pengumuman extends CI_Controller {
    function __construct() {
        parent::__construct();
        sf_construct();
        $this->load->model('Pengumuman_model');
        $this->load->library('form_validation');
    }

    public function index() {
        sf_validate('M');
        $q     = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q != '') {
            $config['base_url']  = base_url() . 'pengumuman/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengumuman/index.html?q=' . urlencode($q);
        } else {
            $config['base_url']  = base_url() . 'pengumuman/index.html';
            $config['first_url'] = base_url() . 'pengumuman/index.html';
        }

        $config['per_page']          = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows']        = $this->Pengumuman_model->total_rows($q);
        $pengumuman                  = $this->Pengumuman_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = [
            'pengumuman_data' => $pengumuman,
            'q'               => $q,
            'pagination'      => $this->pagination->create_links(),
            'total_rows'      => $config['total_rows'],
            'start'           => $start,
            'content'         => 'backend/pengumuman/pengumuman_list',
        ];
        $this->load->view(layout(), $data);
    }

    public function lookup() {
        sf_validate('M');
        $q      = urldecode($this->input->get('q', TRUE));
        $start  = intval($this->input->get('start'));
        $idhtml = $this->input->get('idhtml');

        if ($q != '') {
            $config['base_url']  = base_url() . 'pengumuman/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengumuman/index.html?q=' . urlencode($q);
        } else {
            $config['base_url']  = base_url() . 'pengumuman/index.html';
            $config['first_url'] = base_url() . 'pengumuman/index.html';
        }

        $config['per_page']          = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows']        = $this->Pengumuman_model->total_rows($q);
        $pengumuman                  = $this->Pengumuman_model->get_limit_data($config['per_page'], $start, $q);

        $data = [
            'pengumuman_data' => $pengumuman,
            'idhtml'          => $idhtml,
            'q'               => $q,
            'total_rows'      => $config['total_rows'],
            'start'           => $start,
            'content'         => 'backend/pengumuman/pengumuman_lookup',
        ];
        ob_start();
        $this->load->view($data['content'], $data);
        return ob_get_contents();
        ob_end_clean();
    }

    public function read($id) {
        sf_validate('R');
        $row = $this->Pengumuman_model->get_by_id($id);
        if ($row) {
            $data = [
                'id_pengumuman'  => $row->id_pengumuman,
                'judul'          => $row->judul,
                'isi_pengumuman' => $row->isi_pengumuman,
                'deskripsi'      => $row->deskripsi,
                'nama_file'      => $row->nama_file,
                'created_at'     => $row->created_at,
                'created_by'     => $row->created_by,
                'updated_at'     => $row->updated_at,
                'updated_by'     => $row->updated_by,
                'isactive'       => $row->isactive,
                'add_1'          => $row->add_1,
                'add_2'          => $row->add_2,
                'hits_download'  => $row->hits_download,
                'content'        => 'backend/pengumuman/pengumuman_read',
            ];
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }

    public function create() {
        sf_validate('C');
        $data = [
            'button'         => 'Create',
            'action'         => site_url('pengumuman/create_action'),
            'id_pengumuman'  => set_value('id_pengumuman'),
            'judul'          => set_value('judul'),
            'isi_pengumuman' => set_value('isi_pengumuman'),
            'deskripsi'      => set_value('deskripsi'),
            'nama_file'      => set_value('nama_file'),
            'created_at'     => set_value('created_at'),
            'created_by'     => set_value('created_by'),
            'updated_at'     => set_value('updated_at'),
            'updated_by'     => set_value('updated_by'),
            'isactive'       => set_value('isactive'),
            'add_1'          => set_value('add_1'),
            'add_2'          => set_value('add_2'),
            'hits_download'  => set_value('hits_download'),
            'content'        => 'backend/pengumuman/pengumuman_form',
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
                'judul'          => $this->input->post('judul', TRUE),
                'isi_pengumuman' => $this->input->post('isi_pengumuman', TRUE),
                'deskripsi'      => $this->input->post('deskripsi', TRUE),
                'nama_file'      => sf_upload('pengumuman_img', 'assets/blogsekolah/pengumuman/', 'jpeg|jpg|png', 1000000, 'nama_file'),
                'created_at'     => date('Y-m-d H:i:s'),
                'created_by'     => $this->session->userdata('username'),
                'updated_at'     => $this->input->post('updated_at', TRUE),
                'updated_by'     => $this->input->post('updated_by', TRUE),
                'isactive'       => 1,
                'add_1'          => sf_upload('pengumuman_pdf', 'assets/blogsekolah/pengumuman/', 'pdf', 1000000, 'add_1'),
                'add_2'          => $this->input->post('add_2', TRUE),
                'hits_download'  => $this->input->post('hits_download', TRUE),
            ];

            $this->Pengumuman_model->insert($data);
            $this->session->set_flashdata('message', 'Data baru berhasil ditambahkan!');
            redirect(site_url('pengumuman'));
        }
    }

    public function update($id) {
        sf_validate('U');
        $row = $this->Pengumuman_model->get_by_id($id);

        if ($row) {
            $data = [
                'button'         => 'Update',
                'action'         => site_url('pengumuman/update_action'),
                'id_pengumuman'  => set_value('id_pengumuman', $row->id_pengumuman),
                'judul'          => set_value('judul', $row->judul),
                'isi_pengumuman' => set_value('isi_pengumuman', $row->isi_pengumuman),
                'deskripsi'      => set_value('deskripsi', $row->deskripsi),
                'nama_file'      => set_value('nama_file', $row->nama_file),
                'created_at'     => set_value('created_at', $row->created_at),
                'created_by'     => set_value('created_by', $row->created_by),
                'updated_at'     => set_value('updated_at', $row->updated_at),
                'updated_by'     => set_value('updated_by', $row->updated_by),
                'isactive'       => set_value('isactive', $row->isactive),
                'add_1'          => set_value('add_1', $row->add_1),
                'add_2'          => set_value('add_2', $row->add_2),
                'hits_download'  => set_value('hits_download', $row->hits_download),
                'content'        => 'backend/pengumuman/pengumuman_form',
            ];
            $this->load->view(layout(), $data);
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('pengumuman'));
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
            $this->update($this->input->post('id_pengumuman', TRUE));
        } else {
            $data = [
                'judul'          => $this->input->post('judul', TRUE),
                'isi_pengumuman' => $this->input->post('isi_pengumuman', TRUE),
                'deskripsi'      => $this->input->post('deskripsi', TRUE),
                'nama_file'      => sf_upload('pengumuman_img', 'assets/blogsekolah/pengumuman/', 'jpeg|jpg|png', 1000000, 'nama_file'),
                'created_at'     => $this->input->post('created_at', TRUE),
                'created_by'     => $this->input->post('created_by', TRUE),
                'updated_at'     => date('Y-m-d H:i:s'),
                'updated_by'     => $this->session->userdata('username'),
                'isactive'       => $this->input->post('isactive', TRUE),
                'add_1'          => sf_upload('pengumuman_pdf', 'assets/blogsekolah/pengumuman/', 'pdf', 1000000, 'add_1'),
                'add_2'          => $this->input->post('add_2', TRUE),
                'hits_download'  => $this->input->post('hits_download', TRUE),
            ];

            $this->Pengumuman_model->update($this->input->post('id_pengumuman', TRUE), $data);
            $this->session->set_flashdata('message', 'Edit data telah berhasil!');
            redirect(site_url('pengumuman'));
        }
    }

    public function delete($id) {
        sf_validate('D');
        $row = $this->Pengumuman_model->get_by_id($id);

        if ($row) {
            /*$data = array(
            'isactive'=>0,
            );
            $this->Berita_model->update($id,$data);*/
            $this->Pengumuman_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus data berhasil!');
            redirect(site_url('pengumuman'));
        } else {
            $this->session->set_flashdata('message', 'Maaf, data tidak ditemukan');
            redirect(site_url('pengumuman'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('isi_pengumuman', 'isi pengumuman', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim');
        $this->form_validation->set_rules('nama_file', 'nama file', 'trim');
        $this->form_validation->set_rules('created_at', 'created at', 'trim');
        $this->form_validation->set_rules('created_by', 'created by', 'trim');
        $this->form_validation->set_rules('updated_at', 'updated at', 'trim');
        $this->form_validation->set_rules('updated_by', 'updated by', 'trim');
        $this->form_validation->set_rules('isactive', 'isactive', 'trim');
        $this->form_validation->set_rules('add_1', 'add 1', 'trim');
        $this->form_validation->set_rules('add_2', 'add 2', 'trim');
        $this->form_validation->set_rules('hits_download', 'hits download', 'trim');
        $this->form_validation->set_rules('id_pengumuman', 'id_pengumuman', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel() {
        sf_validate('E');
        $this->load->helper('exportexcel');
        $namaFile  = "pengumuman.xls";
        $judul     = "pengumuman";
        $tablehead = 0;
        $tablebody = 1;
        $nourut    = 1;
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
        xlsWriteLabel($tablehead, $kolomhead++, "Judul");
        xlsWriteLabel($tablehead, $kolomhead++, "Isi Pengumuman");
        xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama File");
        xlsWriteLabel($tablehead, $kolomhead++, "Created At");
        xlsWriteLabel($tablehead, $kolomhead++, "Created By");
        xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
        xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
        xlsWriteLabel($tablehead, $kolomhead++, "Isactive");
        xlsWriteLabel($tablehead, $kolomhead++, "Add 1");
        xlsWriteLabel($tablehead, $kolomhead++, "Add 2");
        xlsWriteLabel($tablehead, $kolomhead++, "Hits Download");

        foreach ($this->Pengumuman_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteNumber($tablebody, $kolombody++, $data->judul);
            xlsWriteNumber($tablebody, $kolombody++, $data->isi_pengumuman);
            xlsWriteNumber($tablebody, $kolombody++, $data->deskripsi);
            xlsWriteNumber($tablebody, $kolombody++, $data->nama_file);
            xlsWriteNumber($tablebody, $kolombody++, $data->created_at);
            xlsWriteNumber($tablebody, $kolombody++, $data->created_by);
            xlsWriteNumber($tablebody, $kolombody++, $data->updated_at);
            xlsWriteNumber($tablebody, $kolombody++, $data->updated_by);
            xlsWriteNumber($tablebody, $kolombody++, $data->isactive);
            xlsWriteNumber($tablebody, $kolombody++, $data->add_1);
            xlsWriteNumber($tablebody, $kolombody++, $data->add_2);
            xlsWriteNumber($tablebody, $kolombody++, $data->hits_download);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-08-27 15:38:09 */
/* http://harviacode.com */
/* Customized by Youtube Channel: Peternak Kode (A Channel gives many free codes)*/
/* Visit here: https://youtube.com/c/peternakkode */