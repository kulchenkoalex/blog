<?php

    function articles_all(){
        $art1=["id"=>1, "title"=>"Title1", "description"=>"2017-01-02", "content"=>"Content1"];
         $art2=["id"=>2, "title"=>"Title2", "description"=>"2017-01-02", "content"=>"Content2"];
        
        $arr[0] = $art1;
        $arr[1] = $art2;
        
        return $arr;
    }

function articles_get($id){
    return ["id"=>1, "title"=>"Простой заголовок", "description"=>"2017-01-02", "content"=>"Тут будет написана статья"];
        
    }
function articles_new($title, $description, $content){
        
    }
function articles_edit($id, $title, $description, $content){
        
    }
function articles_delete($id){
        
    }

?>