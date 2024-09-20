<?php
class Notificaciones extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notificacion_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['notificaciones'] = $this->Notificacion_model->get_notificaciones();
        $this->load->view('notificaciones/index', $data);
    }

    public function crear() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        $this->form_validation->set_rules('intervalo', 'Intervalo', 'required|integer');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('notificaciones/crear');
        } else {
            $data = array(
                'mensaje' => $this->input->post('mensaje'),
                'tipo' => $this->input->post('tipo'),
                'intervalo' => $this->input->post('intervalo')
            );
            $this->Notificacion_model->set_notificacion($data);
            redirect('notificaciones');
        }
    }

    public function editar($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['notificacion'] = $this->Notificacion_model->get_notificaciones($id);

        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        $this->form_validation->set_rules('intervalo', 'Intervalo', 'required|integer');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('notificaciones/editar', $data);
        } else {
            $updated_data = array(
                'mensaje' => $this->input->post('mensaje'),
                'tipo' => $this->input->post('tipo'),
                'intervalo' => $this->input->post('intervalo')
            );
            $this->Notificacion_model->update_notificacion($id, $updated_data);
            redirect('notificaciones');
        }
    }

    public function eliminar($id) {
        $this->Notificacion_model->delete_notificacion($id);
        redirect('notificaciones');
    }
}
