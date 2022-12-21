<?php defined("BASEPATH") OR exit("No direct script access allowed");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

  class C_about extends MY_Controller {
    function __construct()
    {
        $API = '';
        parent::__construct();
        $this->API= rest_base_uri;
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('pagination');
    }

    function index(){
        $data['prodi'] = $this->client_rest->client_get('prodi/ProdiFront',[]);
        echo 123;
        die();

        $content = $this->load->view('page/V_about',$data,true);

    }    

    public function about(){
        $this->load->view('page/V_about','',true);
    }


  }

?>