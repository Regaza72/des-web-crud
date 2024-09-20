<?php
class Notificacion_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_notificaciones($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('notificaciones');
            return $query->result_array();
        }

        $query = $this->db->get_where('notificaciones', array('id' => $id));
        return $query->row_array();
    }

    public function set_notificacion($data) {
        return $this->db->insert('notificaciones', $data);
    }

    public function update_notificacion($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('notificaciones', $data);
    }

    public function delete_notificacion($id) {
        return $this->db->delete('notificaciones', array('id' => $id));
    }
}
