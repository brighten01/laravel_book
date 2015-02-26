<?php

class UserController extends  BaseController{

    public function __construct(){

    }
    public function login(){
        return View::make("user.login");
    }

    public function check() {

    }

    public function logout(){

    }
    public function userinfo(){

    }


    public function borrow(){

    }

    public function card_login(){
        return View::make("user.card_login");
    }

    public function card_logout(){

    }
}