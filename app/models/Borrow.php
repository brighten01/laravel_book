<?php

class Borrow  extends Eloqunet{

    public function __construct(){

    }

    /**
     * 获取借阅信息
     */
    public function getBorrowInfoById($id){

    }

    /**
     *  获取借阅列表
     * @param $pageno
     * @param $perPage
     * @param $conditions
     */
    public function getBorrowList($pageno ,$perPage , $conditions){

    }

    /**
     * 获取所有的借阅记录数量
     * @param $conditions
     */
    public function getBorrowCount($conditions){

    }

    /**
     * 查看借阅状态
     */
    public function getBorrowStatus(){

    }

    /**
     * 获取某个用户过期的数据
     * @param $book_id
     * @param $uid
     */
    public function IsExpire($book_id,$uid){

    }

    /**
     * 获取用户的借阅信息
     */
    public function getUserBorrowInfo(){

    }

}
