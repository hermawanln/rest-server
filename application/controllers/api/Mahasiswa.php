<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
    }
    
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == NULL) {
            // if no id show all data
            $mahasiswa = $this->mahasiswa->getMahasiswa();
        } else {
            // else show data base on id
            $mahasiswa = $this->mahasiswa->getMahasiswa($id);
        }
        


        if($mahasiswa){
            // Set the response and exit
            $this->response([
                'status' => TRUE,
                'data' => $mahasiswa,
                'message' => 'LENGKAP GAN'
            ], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        } else{
            $this->response([
                'status' => FALSE,
                'message' => 'ID RAONO GAN'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }

}

?>