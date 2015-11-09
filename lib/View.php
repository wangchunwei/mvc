<?php
class View {
    
    public  $template_dir;
    public  $data = array();
    
    public function assign($key, $value) {
        $this->data[$key] = $value;
    }
    
    public function display($template) {
        foreach($this->data as $key => $value) {
            $$key = $value;
        }
        include_once($this->template_dir."/".$template);
    }
    
    public function smartyDisplay($tmplate) {
        
        include_once(EXT_DIR."smarty/smarty.class.php");
        $smarty = new Smarty();
        
        $smarty->template_dir = $this->template_dir;
        $smarty->compile_dir  = CACHE_DIR;
        $smarty->cache_dir    = CACHE_DIR;
        foreach($this->data as $key => $value) {
            $smarty->assign($key, $value);
        }
        $smarty->display($tmplate); 
        
    }
    
    
    
}