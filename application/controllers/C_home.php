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
        $this->load->model(array('Custom_model'));

        $this->menu_nav = array();
        $this->menu_nav = $this->Custom_model->getdata('db_webpu.menu_nav');

        foreach ($this->menu_nav as $key => $value) 
        {
            $findsubmenu = $this->Custom_model->getdata('db_webpu.submenu_nav', array('id_menu_nav' => $value['id_menu_nav']), 'name_submenu_nav', 'ASC');

            if (!empty($findsubmenu)) 
            {
                $this->menu_nav[$key]['submenu'] = $findsubmenu;
            }
            else
            {
                $this->menu_nav[$key]['submenu'] = '';
            }
        }
    }


    function index(){

        $client = new GuzzleHttp\Client();
        $get_api = $this->client_rest->client_get('blogs/TrendingNews',[]);
        $getAnouncem_api = $this->client_rest->client_get('announcement/listAnnouncement',[]);
        $getprodi = $this->client_rest->client_get('prodi/ProdiFront',[]);
        $getcalendaracademic = $this->client_rest->client_get('academic/calendaracademic',[]);

        $recomendnews = $this->client_rest->client_get('blogs/RecomentNews',[]);

        $marketingactivity = $this->client_rest->client_get('marketing/MarketingActivity',['page' => 0, 'limit' => 10]);

        $currentPage = 01;
        $maxpage = 10;
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&page='.$currentPage.'&pageSize='.$maxpage.'&apiKey=96b7521327044529a95b04762e15d43e',[]);
        // $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&apiKey=96b7521327044529a95b04762e15d43e',[]);
        $d = json_decode($response->getBody()->getCOntents(),true);            
        $data['response'] = $get_api;
        $data['ProdiList'] = $getprodi[0];
        $data['ProdiSlider'] = $getprodi[1];
        $data['ProdiAbout'] = $getprodi[2];
        $data['ProdiHost'] = $getprodi[3];
        $data['newsapi'] = $d['articles'];
        $data['announcement'] = $getAnouncem_api;
        $data['marketingactivity'] = $marketingactivity;

        $calendar = array();
        $calendar[0]['name'] = 'Kuliah';
        $calendar[0]['date_start'] = $getcalendaracademic[1]['kuliahStart'];
        $calendar[0]['date_end'] = $getcalendaracademic[1]['kuliahEnd'];

        $calendar[1]['name'] = 'UTS';
        $calendar[1]['date_start'] = $getcalendaracademic[1]['utsStart'];
        $calendar[1]['date_end'] = $getcalendaracademic[1]['utsEnd'];

        $calendar[2]['name'] = 'UAS';
        $calendar[2]['date_start'] = $getcalendaracademic[1]['uasStart'];
        $calendar[2]['date_end'] = $getcalendaracademic[1]['uasEnd'];

        $calendar[3]['name'] = 'Seminar TA Registration';
        $calendar[3]['date_start'] = $getcalendaracademic[1]['TARegStart'];
        $calendar[3]['date_end'] = $getcalendaracademic[1]['TARegEnd'];

        $calendar[4]['name'] = 'Penilaian Sarana Prasarana';
        $calendar[4]['date_start'] = $getcalendaracademic[1]['edom2Start'];
        $calendar[4]['date_end'] = $getcalendaracademic[1]['edom2End'];

        $calendar[5]['name'] = 'Evaluasi Dosen Oleh Mahasiswa';
        $calendar[5]['date_start'] = $getcalendaracademic[1]['edomStart'];
        $calendar[5]['date_end'] = $getcalendaracademic[1]['edomEnd'];

        $data['semester_name'] = $getcalendaracademic[0];
        $data['calendar'] = $calendar;

        // print "<pre>";
        // print_r($data['ProdiSlider']);
        // print "</pre>";
        // die();

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
        $data = array();
        $data['prodi'] = $this->client_rest->client_get('prodi/ProdiFront',[]);

        $content = $this->load->view('page/V_about',$data,true);
        parent::template($content);
    }   

    public function undergraduated_programs(){ 
        $data = array();
        $data['prodi'] = $this->client_rest->client_get('prodi/ProdiFront',[]);

        $content = $this->load->view('page/V_undergraduated_programs',$data,true);
        parent::template($content);
    }   
  }

?>