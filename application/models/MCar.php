<?php
class MCar extends CI_Model{
    function get_all(){
        $car = $this->db->get('tb_mobil');
        return $car->result();
    }

    function save_car(){
        $data = array(
            'merk' => $this->input->post('merk'),
            'plat' => $this->input->post('plat'),
            'thn' => $this->input->post('tahun'),
            'warna' => $this->input->post('warna')
        );

        $result = $this->db->insert('tb_mobil', $data);
        return $result;
    }

    function update_car(){
        $id = $this->input->post('id');

        $data = array(
            'merk' => $this->input->post('merk'),
            'plat' => $this->input->post('plat'),
            'warna' => $this->input->post('warna'),
            'thn' => $this->input->post('tahun')
        );

        $this->db->where("id", $id);
        $this->db->set($data);
        $res = $this->db->update("tb_mobil");
        return $res;
    }

    function delete_car(){
        $id = $this->input->post('id');

        $this->db->where("id", $id);
        $res = $this->db->delete("tb_mobil");
        return $res;
    }
}