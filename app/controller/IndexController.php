<?php

class IndexController extends Controller {
    
    
    public function actionIndex() {
        
        $m = new Model();
        $rows = $m->queryAll("mvc_test");
        $row = $m->sql("mvc_test", "insert into mvc_test (name, mail)values('test', 'testmail')");
        echo "this is index";
        
    }
    
    
    public function actionTest() {
        
        $data = array("name" => "wangchunwei", "mail" => "willwcw@163.com");
        //$this->render("index/test.html", $data);
        $this->render("index/test", $data);
    }
    
    
}