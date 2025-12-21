<?php 

class Router {
    private $method;
    private $uri;
    private $callback;
    private $matched;

    function __construct()
    {
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->uri = $_SERVER['REQUEST_URI'];

    }

    public function get($uri, $callback)
    {
        return $callback;
        // if($this->method == 'get'){
        //     echo $uri . "here";
        // }

        // $matched = true;

        // if($matched){
        //     $this->callback = $callback;
        //     $this->matched = true;
        // }
    }

    public function post($uri, $callback)
    {
        
    }

    public function put($uri, $callback)
    {
        
    }

    public function patch($uri, $callback)
    {
        
    }

    public function delete($uri, $callback)
    {
        
    }
}