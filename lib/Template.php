<?php

class Template{
    //path for template
    protected $template;
    // var to be passed in
    protected $vars = array();
    
    //create constructor
    public function __construct($template){
        $this->template = $template;
    }
    
    public function __get($vars){
        return $this->vars[$keys] = $vars;
    }
    public function __set($keys, $value){
        $this->vars[$keys] = $value;
    }
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
        
    }
}