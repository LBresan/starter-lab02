<?php

class Welcome extends MY_Controller {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        //$this->load->view->('welcome');
        $this->data['pagebody'] = 'welcome';
        $this->render();
    }
    
}