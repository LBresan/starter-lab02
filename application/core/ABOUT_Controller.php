<?php

class About extends Application {

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