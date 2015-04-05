<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{

    public function __construct(){
        parent::__construct();

        //load model news
        $this->user = new Models\Usermodel();
    }


    public function index()
    {
        $data['title'] = 'Hello world!';
        $this->output('home', $data);
    }

    public function debug(){
        echo '<pre>';print_r( $this->user->retrive(10,0) );
    }

    public function delete($id=4){
        $this->user->delete($id);
    }
}
