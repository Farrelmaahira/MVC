<?php

class about extends Controller {
    public function index()
    {
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
    public function page()
    {
        echo "about/page";
    }
}