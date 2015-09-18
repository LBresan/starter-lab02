<?php

class Gallery extends Application {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        //$this->load->view->('welcome');
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
    
}