<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \GuzzleHttp\Client;

// print_r(FCPATH."vendor/autoload.php");
// die();

class client_rest extends My_Controller {

    private $_client;

    function __construct()
    {
        
    }

    private function setHeader(Type $var = null)
    
    {
        $CI =& get_instance();
        $CI->load->library('session');

        $this->_client = new GuzzleHttp\Client([
            'base_uri' => rest_base_uri,
            'headers' => [
                'X-API-KEY' => 'sOKAFBTvutrXyQxN52GJfbj9d1gMeIZPEcRL6Haq',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'http_errors' => false

        ]);
    }

    private function setHeader_newsapi(Type $var = null) //newsapi.org yamin ahmad.askhabulyamin@gmail.com
    
    {
        $CI =& get_instance();
        $CI->load->library('session');

        $this->_client = new GuzzleHttp\Client([
            // 'base_uri' => 'https://newsapi.org/v2/top-headlines/',
            // 'headers' => [
            //     'x-api-key' => '96b7521327044529a95b04762e15d43e',
            //     'Content-Type' => 'application/x-www-form-urlencoded',
            // ],
            'http_errors' => false

        ]);
    }

    public function client_upload()
    {
        // $this->_client->request('POST', 'training/uploadMedia', [
        //     'multipart' => [
        //         [
        //             'name'     => 'foo',
        //             'contents' => 'data',
        //             'headers'  => ['X-API-KEY' => 'Y8kXhIyNCQ5SZlzeg2tu3LbdUpP1Rsxn6KoWwHFA']
        //         ],
        //         [
        //             'name'     => 'baz',
        //             'contents' => Psr7\Utils::tryFopen('/path/to/file', 'r')
        //         ],
        //         [
        //             'name'     => 'qux',
        //             'contents' => Psr7\Utils::tryFopen('/path/to/file', 'r'),
        //             'filename' => 'custom_filename.txt'
        //         ],
        //     ]
        // ]);
    }

    public function checklogin_get()
    {
        $this->setHeader();
        $response = $this->_client->request('GET', 'training/profile',[ 'query' => ['user_type' => 'trainer'] ]);
        if($response->getStatusCode()!=200){
            return false;
        } else {
            return true;
        }
    }

    public function client_get($endpoint,$query)
    {
        $this->setHeader();
        $response = $this->_client->request('GET', $endpoint,['query' => $query]);
        
        if($response->getStatusCode()!=200){
            $this->error_handling($response);
        } else {
            $d = json_decode($response->getBody()->getCOntents(),true);            
            return $d['data'];
        }
        
    }

    public function clientNewsapi_get($endpoint,$query) // Newapi.org
    {
        $this->setHeader_newsapi();
        $response = $this->_client->request('GET', $endpoint,['query' => $query]);
        
        if($response->getStatusCode()!=200){
            $this->error_handling($response);
        } else {
            $d = json_decode($response->getBody()->getCOntents(),true);            
            return $d['data'];
        }
        
    }

    public function client_put($endpoint,$form_params)
    {
        $this->setHeader();
        $response = $this->_client->request('PUT', $endpoint,['form_params' => $form_params]);
        if($response->getStatusCode()!=200){
            $this->error_handling($response);
        } else {
            return $response;
        }
        
    }

    private function error_handling($response)
    {
        if(ENVIRONMENT=='production'){
            $d = json_decode($response->getBody()->getCOntents(),true);            
            redirect('rest-error/'.$response->getStatusCode().'/'.$d['error'], 'refresh');
        } else {
            print_r($response->getBody()->getCOntents());
            die();
        }
    }


}