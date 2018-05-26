<?php
class Car extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('MCar');
    }

    function index(){
        $this->load->view('list_car');
    }

    function get_all_data(){
        $car = $this->MCar->get_all();
        echo json_encode($car);
    }

    function save_car(){
        $data = $this->MCar->save_car();
        echo json_encode($data);
    }

    function update_car(){
        $data = $this->MCar->update_car();
        echo json_encode($data);
    }

    function delete_car(){
        $data = $this->MCar->delete_car();
        echo json_encode($data);
    }
}