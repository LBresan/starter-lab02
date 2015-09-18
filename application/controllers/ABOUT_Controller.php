<?php

class About extends MY_Controller {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        //$this->load->view->('welcome');
        $this->data['pagebody'] = 'about';
        $this->render();
    }
    
}