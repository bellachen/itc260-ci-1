<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {
        
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
        }
    
         public function index()
        {
                $api_key = $this->load->view($this->config->item('flickr'));
                
                /*
                $tags = 'bears,polar';
                $perPage = 25;
                $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
                $url.= '&api_key=' . $api_key;
                $url.= '&tags=' . $tags;
                $url.= '&per_page=' . $perPage;
                $url.= '&format=json';
                $url.= '&nojsoncallback=1';

                $response = json_decode(file_get_contents($url));
                $pics = $response->photos->photo;

                foreach($pics as $pic){

                    $size = 'm';
                    $photo_url = '
                    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

                    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

                }
                */
            }
    }