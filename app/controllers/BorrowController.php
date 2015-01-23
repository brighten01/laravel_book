<?php

class BorrowController extends  BaseController{

    /**
     * 添加借阅信息
     */
    public function add(){

        return View::make("borrow.add");
    }

    /**
     * 管理借阅信息
     */
    public  function listinfo(){
        return View::make("borrow.list");
    }

    /*
     * 编辑借阅信息
     */
    public function edit($id){
        return View::make("borrow.edit");
    }

    /**
     * 删除借阅信息
     * @param $id
     */
    public function delete($id){

    }

    /**
     * 显示借阅信息
     * @param $id
     */
    public function info($id){

    }

}