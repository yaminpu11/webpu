<?php defined("BASEPATH") OR exit("No direct script access allowed");

// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");

  class C_information extends MY_Controller {
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

    public function index()
    {
        $data = array();

        $content = $this->load->view('page/V_information',$data,true);
        parent::template($content);
    }

    public function announcement($id_announcement = false)
    {
        $data = array();
        if ($id_announcement == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['announcement'] = $this->client_rest->client_get('announcement/listAnnouncement',['page' => $page]);

            $content = $this->load->view('page/V_announcement_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data['detail'] = $this->client_rest->client_get('announcement/DetailAnnouncement',['id_announcement' => $id_announcement]);
            
            $data['recent_announcement'] = $this->client_rest->client_get('announcement/RecentAnnouncement',[]);

            $content = $this->load->view('page/V_announcement_detail',$data,true);
            parent::template($content);
        }  
    }

    public function marketing_activity($id_marketing_activity = false)
    {
        $data = array();
        if ($id_marketing_activity == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => $page]);

            $data['recent_marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_marketing_activity_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data['detail'] = $this->client_rest->client_get('marketing/DetailMarketingActivity',['id_marketing_activity' => $id_marketing_activity]);
            
            $data['recent_marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_marketing_activity_detail',$data,true);
            parent::template($content);
        }  
    }

    public function news_category()
    { 
        $data = array();

        $data['categories'] = $this->client_rest->client_get('blogs/CategoryNews',[]);

        $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

        $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

        $content = $this->load->view('page/V_news_category',$data,true);
        parent::template($content);
    } 

    public function news($id_title = false)
    { 
        if ($id_title == false) 
        {
            $data = array();

            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $category = false;
            if (!empty($this->input->get('category')))
            {
                $findcategory = $this->Custom_model->getdetail('db_blogs.category', array('Name' => $this->input->get('category')));

                if (!empty($findcategory)) 
                {
                    $category = $findcategory['ID_category'];
                }
            }

            $data['news'] = $this->client_rest->client_get('blogs/ListNews',['page' => $page, 'category' => $category]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $content = $this->load->view('page/V_news_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data = array();

            $data['detail'] = $this->client_rest->client_get('blogs/DetailNews',['id_title' => $id_title]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $this->load->view('page/V_news_detail',$data);
        }    
    }   

    public function world_article($id_article = false)
    { 
        $client = new GuzzleHttp\Client();
        if ($id_article == false) 
        {
            $data = array();

            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 1;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 1;
                }
                else
                {
                    $page = $pageget;
                    $data['page'] = $pageget;
                }
            }

            $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&page='.$page.'&pageSize='.'5'.'&apiKey=96b7521327044529a95b04762e15d43e',[]);
            $d = json_decode($response->getBody()->getCOntents(),true);      
            $data['article'] = $d['articles'];

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $content = $this->load->view('page/V_world_article_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data = array();

            $data['detail'] = $this->client_rest->client_get('blogs/DetailNews',['id_title' => $id_title]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $this->load->view('page/V_news_detail',$data);
        }    
    }   
  }

?>