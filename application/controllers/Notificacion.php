<?php

class Notificacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notificacion_model');
    }

    public function index() {
        $data['notificaciones'] = $this->Notificacion_model->get_all();
        $this->load->view('notificaciones/index', $data);
    }

    public function create() {
        $this->load->view('notificaciones/create');
    }

    public function store() {
        $data = [
            'message' => $this->input->post('message'),
            'alert_type' => $this->input->post('alert_type'),
            'time_interval' => $this->input->post('time_interval'),
            'estacion_id' => $this->input->post('estacion_id'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->Notificacion_model->insert($data);
        redirect('notificacion');
    }

    public function edit($id) {
        $data['notificacion'] = $this->Notificacion_model->get($id);
        $this->load->view('notificaciones/edit', $data);
    }

    public function update($id) {
        $data = [
            'message' => $this->input->post('message'),
            'alert_type' => $this->input->post('alert_type'),
            'time_interval' => $this->input->post('time_interval'),
            'estacion_id' => $this->input->post('estacion_id')
        ];

        $this->Notificacion_model->update($id, $data);
        redirect('notificacion');
    }

    public function delete($id) {
        $this->Notificacion_model->delete($id);
        redirect('notificacion');
    }
}