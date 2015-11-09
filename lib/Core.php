<?php


class Core {
    
    private $__config;
    
    public function __construct($config) {        
        $this->__config = require($config);        
    }
    
    public function run() {

        include_once(LIB_DIR."Controller.php");
        include_once(LIB_DIR."Model.php");
        
        $controller = isset($_GET["c"]) ? $_GET["c"] : $this->__config["defaultController"];
        $action     = isset($_GET["a"]) ? $_GET["a"] : $this->__config["defaultAction"];
        
        define("DB_HOST", $this->__config["db"]["host"]);
        define("DB_NAME", $this->__config["db"]["name"]);
        define("DB_USER", $this->__config["db"]["user"]);
        define("DB_PWD",  $this->__config["db"]["password"]);
        define("DB_CHARSET","utf8");
        
        $controller = ucwords(strtolower($controller));
        $action     = "action".ucwords(strtolower($action));
        
        $c_file = APP_DIR."controller/".$controller."Controller.php";
        
        // 所有的异常处理缺失
        if(!file_exists($c_file)) die("controller not exists");
        include_once($c_file);
        $isSmarty = isset($this->__config["smarty"]) ? $this->__config["smarty"] : true;
        $c = $controller."Controller";
        $obj_c = new $c($isSmarty);
        
        if(!method_exists($c, $action)) die("method not exists");
        $obj_c->$action();   
    }
       
    
}