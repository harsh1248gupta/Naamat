<?php 
    class Admin extends CI_Controller{
        public function index()
        {
            $this->load->view('main');
        }

        public function presentation()
        {
            $this->load->view('presentation');
        }

        public function movie()
        {
            $this->load->view('movie');
        }
        public function pptactivation()
        {
            $this->load->view('pptactivation');
        }

        public function pptcontrols()
        {
            $this->load->view('pptcontrols');
        }


        public function m_english()
        {
            $dir = "uploads/movie/english";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('m_english',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }

        public function m_arabic()
        {
            $dir = "uploads/movie/arabic";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('m_arabic',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }

        public function m_hebrew()
        {
            $dir = "uploads/movie/hebrew";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('m_hebrew',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }

        public function m_international()
        {
            $dir = "uploads/movie/international";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('m_international',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }

        public function p_english()
        {
            $dir = "uploads/presentation/english";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('p_english',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }

        public function p_hebrew()
        {
            $dir = "uploads/presentation/hebrew";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('p_hebrew',$result);
                // echo '<pre>';
                // print_r($result);
                // print_r($result['result'][3]);
            }
            
        }
        public function ppthtml()
        {
            $dir = "uploads/presentation/hebrew";
            if(is_dir($dir)){
                $result['result'] = scandir($dir);
                $this->load->view('index',$result);

            
        }
    }
}
    
?>