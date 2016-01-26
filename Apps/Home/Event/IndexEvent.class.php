<?php
namespace Home\Event;
class IndexEvent {
    public function login(){
        echo 'login event';
    }

    public function logout(){
        echo 'logout event';
    }
}