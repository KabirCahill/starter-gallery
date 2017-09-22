<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

    /**
     * Gallery Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/gallery/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /gallery/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('gallery');
    }

}
