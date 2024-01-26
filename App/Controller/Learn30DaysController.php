<?php
namespace App\Controller;

use App\Core\Request;

class Learn30DaysController{

    private Request $req;
    public function __construct()
    {
        global $request;
        $this->req = $request;
    }

    public function show(){
        $uri = $this->req->getUri();
        $uri = strtolower(str_replace('/', '', $uri));
        view("30Days.$uri.index");
    }

    public function days(){
        $uri = $this->req->getUri();
        $uri = explode('/', $uri) ;
        $name_days = strtolower($uri[1]);
        $day = strtolower($uri[2]);
        view("30Days.$name_days.days.$day");
    }

}