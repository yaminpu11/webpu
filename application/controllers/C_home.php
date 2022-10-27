<?php defined("BASEPATH") OR exit("No direct script access allowed");

// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");

  class C_home extends MY_Controller {
    function __construct()
    {
        $API = '';
        parent::__construct();
        $this->load->helper('url');

        $this->API= rest_base_uri;
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->library('pagination');
    }


    function index(){

        $client = new GuzzleHttp\Client();
        $get_api = $this->client_rest->client_get('blogs/TrandingNews',[]);
        $getAnouncem_api = $this->client_rest->client_get('announcement/listAnnouncement',[]);
        $currentPage = 01;
        $maxpage = 10;
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&page='.$currentPage.'&pageSize='.$maxpage.'&apiKey=96b7521327044529a95b04762e15d43e',[]);
        // $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&apiKey=96b7521327044529a95b04762e15d43e',[]);
        $d = json_decode($response->getBody()->getCOntents(),true);            
        $data['response'] = $get_api;
        $data['newsapi'] = $d['articles'];
        $data['announcement'] = $getAnouncem_api;

        //konfigurasi pagination
        $jumlah_data = $d['totalResults'];
        // $config['base_url'] = $response; //site url
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = $maxpage;

        // Membuat Style pagination untuk BootStrap v4
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-start">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = '';
        $config['first_tag_open'] = '<li class="page-item"><a href="#" class="page-link"><span class="flaticon-arrow roted">';
        $config['first_tag_close'] = '</span></a></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev"><a href="#" class="page-link"><span class="flaticon-arrow roted">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<li class="page-item"><a class="page-link"  href="#"><span class="flaticon-arrow right-arrow">';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item"><a class="page-link"  href="#">';
        $config['last_tag_close'] = '</a></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item"><a href="#" class="page-link">';
        $config['num_tag_close'] = '</a></li>';

        // $config['first_link']       = 'First';
        // $config['last_link']        = 'Last';
        // $config['next_link']        = 'Next';
        // $config['prev_link']        = 'Prev';
        // $config['full_tag_open']    = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-start">';
        // $config['full_tag_close']   = '</ul></nav>';
        // $config['num_tag_open']     = '<li class="page-item"><a href="#" class="page-link">';
        // $config['num_tag_close']    = '</a></li>';
        // $config['cur_tag_open']     = '<li class="page-item active"><a href="#" class="page-link">';
        // $config['cur_tag_close']    = '</a></li>';
        // $config['next_tag_open']    = '<li class="page-item"><a href="#" class="page-link"><span class="flaticon-arrow right-arrow">';
        // $config['next_tagl_close']  = '</span></a></li>';
        // $config['first_tag_open']   = '<li class="page-item"><a href="#" class="page-link"><span class="flaticon-arrow roted"></span>';
        // $config['first_tagl_close'] = '</a></li>';
        // $config['last_tag_open']    = '<li class="page-item"><a href="#" class="page-link">';
        // $config['last_tag_close']  = '</a></li>';

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        // print_r($getAnouncem_api);
        $content = $this->load->view('home/V_home',$data,true);
        parent::template($content);

    }


    public function about(){ 
        $this->load->view('page/V_about');
    }   


  }

?>