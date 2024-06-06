<?php

class Home extends Controller{
    public function index()
    {
        $data['nama'] = 'kafka';
        $data['pekerjaan'] = 'pelajar';
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'gojo.jpg';
        $data['nama'] = 'kafka';
        $data['pekerjaan'] = 'Idol (Treasure)';
        $this->view('templates/header', $data);
        $this->view('home/page');
        $this->view('templates/footer');
    }
    
}