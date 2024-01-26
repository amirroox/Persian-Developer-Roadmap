<?php
namespace App\Core;

class Request{
    private array $params;
    private $agent;
    private $ip;
    private string $method;
    private $uri;
    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->agent = $_SERVER["HTTP_USER_AGENT"];
        $this->ip = $_SERVER["REMOTE_ADDR"];
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->uri = strtolower(strtok($_SERVER["REQUEST_URI"], "?"));
    }
    public function getAgent()
    {
        return $this->agent;
    }
    public function getIp()
    {
        return $this->ip;
    }
    public function getMethod(): string
    {
        return $this->method;
    }
    public function getParams(): array
    {
        return $this->params;
    }
    public function getUri()
    {
        return $this->uri;
    }
    public function param($key) {
        return $this->params[$key] ?? null ;
    }
    public function __call($method, $arg)
    {
        foreach ($this->params as $key => $value)
        {
            if ($method == $key) return $value;
        }
        return null;
    }
}
