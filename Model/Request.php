<?php
class Request{
    public $url;
    public $page;
    public $action;
    public $id;

    public function __construct(){
        $this->url = $_GET;
        $this->page = isset($this->url['page']) ? $this->url['page'] : '' ;
        $this->action = isset($this->url['action']) ? $this->url['action'] : '';
        $this->id = isset($this->url['id']) ? $this->url['id'] : '';
    }
}
    