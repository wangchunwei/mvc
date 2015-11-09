<?php
class Controller {
    
    protected $__function;
    protected $__postfix;
    
    public function __construct($isSmarty = true) {
        
        if($isSmarty) {
            $this->__function = "smartyDisplay";
            $this->__postfix  = "tpl";
        }else{
            $this->__function = "display";
            $this->__postfix  = "html";
        }            
    }
    
    public function render($template, $data = array()) {
        
        header("Content-type: text/html; charset=utf-8");
        include_once(LIB_DIR."View.php");
        $smarty = new View();
        $smarty->template_dir = APP_DIR.'views/';
        foreach($data as $key => $value) {
            $smarty->assign($key, $value);
        }
        $smarty->{$this->__function}($template.".".$this->__postfix);        
    }
    
    
}