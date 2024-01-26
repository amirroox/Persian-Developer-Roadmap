<?php
namespace App\Controller;

use App\Core\Request;

class TopicsController{

    private Request $req;
    public function __construct()
    {
        global $request;
        $this->req = $request;
    }

    public function show(){
        $uri = $this->req->getUri();
        $uri = strtolower(str_replace('/topic/', '', $uri));
        view("Topics.$uri.index");
    }

}