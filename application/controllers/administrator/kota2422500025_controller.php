<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kota2422500025_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('kota2422500025_model');
    }

    public function index() {
        $data['list_kota2422500025'] = $this->kota2422500025_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kota2422500025/index',$data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota2422500025() {
        $data['title'] = 'Tambah kota2422500025';
        $this->form_validation->set_rules('nama_kota025', 'Nama kota2422500025', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->_simpan_kota2422500025();
            } 

            else {
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/kota2422500025/tambah_kota2422500025');
                $this->load->view('administrator/templates/footer');
            }
    }

    private function _simpan_kota2422500025() {
        $data = [
            'nama_kota025' => ($this->input->post('nama_kota025')),
            'jenis_kota025' => ($this->input->post('jenis_kota025')),
            'provinsi025' => ($this->input->post('provinsi025')),
            'status025' => ($this->input->post('status025'))
        ];

        $simpan = $this->kota2422500025_model->tambah($data);
            if ($simpan) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Berhasil Tambah kota2422500025-!
                    </div>
                </div>
                ');
            } 

            else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Gagal Tambah kota2422500025-!
                    </div>
                </div>
                ');
            }

        redirect('admin/kota2422500025');
    }

    public function hapus_kota2422500025($id) {
        $kota2422500025 = $this->kota2422500025_model->get_by_id($id);
        if ($kota2422500025) {
            $hapus = $this->kota2422500025_model->hapus($id);
                if ($hapus) {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Berhasil Hapus kota2422500025-!
                        </div>
                    </div>
                    ');
                } 

                else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Gagal Hapus kota2422500025-!
                        </div>
                    </div>
                    ');
                }
                    redirect('admin/kota2422500025');

        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    kota2422500025 Tidak Ditemukan-!
                </div>
            </div>
            ');

            redirect('admin/kota2422500025');
        }
    }

    public function ubah_kota2422500025($id) {
        $kota2422500025 = $this->kota2422500025_model->get_by_id($id);
        if ($kota2422500025) {
            $this->form_validation->set_rules('nama_kota025', 'Nama kota2422500025', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $this->_ubah_kota2422500025($id);
                } 

                else {
                    $data['title'] = 'Ubah kota2422500025';
                    $data['kota2422500025'] = $kota2422500025;
                    $this->load->view('administrator/templates/header', $data);
                    $this->load->view('administrator/templates/sidebar');
                    $this->load->view('administrator/kota2422500025/ubah_kota2422500025', $data);
                    $this->load->view('administrator/templates/footer');
                }
        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    kota2422500025 Tidak Ditemukan-!
                </div>
            </div>
            ');
            redirect('admin/kota2422500025');
        }
    }

    private function _ubah_kota2422500025($id) {
        $data = [
            'nama_kota025' => $this->input->post('nama_kota025'),
            'jenis_kota025' => $this->input->post('jenis_kota2422500025'),
            'provinsi025' => $this->input->post('provinsi_2422500025'),
            'status025' => $this->input->post('status_2422500025')
            ];

        $ubah = $this->kota2422500025_model->ubah($id, $data); 
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Ubah kota2422500025-!
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal Ubah kota2422500025!
            </div>
            ');
        }

        redirect('admin/kota2422500025');
    }
}
