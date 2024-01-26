<?php
namespace App\Controller;

use App\Core\Request;

class RoadController{

    private Request $req;
    public function __construct()
    {
        global $request;
        $this->req = $request;
    }

    public function show(){
        $uri = $this->req->getUri();
        $uri = strtolower(str_replace('/road/', '', $uri));
        view("Road.$uri.index");
    }

    public function pdf()
    {
        $uri = $this->req->getUri();
        $uri = strtolower(str_replace(['/road/', '/pdf'], ['', ''], $uri));
        download_pdf("Road.$uri.bin.$uri");
    }

}