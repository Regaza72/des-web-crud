<?php
class Notificacion_model extends CI_Model {

    public function get_all() {
        return $this->db->get('notifications')->result_array();
    }

    public function get($id) {
        return $this->db->where('id', $id)->get('notifications')->row_array();
    }

    public function insert($data) {
        return $this->db->insert('notifications', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('notifications', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('notifications');
    }
}