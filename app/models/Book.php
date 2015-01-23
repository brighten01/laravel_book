<?php

/**
 * author: gaohui
 * create_time : 2015年1月22日
 * description : 图书馆里系统书籍管理model
 *
 *
 */
use Illuminate\Database\Query\Builder;

class Book extends Eloquent
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取图书信息
     */
    public function getBookInfo()
    {

    }

    /**
     * 根据id 获取图书信息
     * @param $id  int
     * @return  $data  array
     */
    public function getBookById($id)
    {
        $data = DB::table("book_info")->where("book_id", $id)->fetch();
        if($data){
            return $data[0];
        }

    }

    /**
     * 添加新的图书
     * @param $data
     */
    public function addBook($data)
    {
        if (!$data) return;
        $insert_id = DB::table("book_info")->insertGetId($data);
        return $insert_id;
    }


    /**
     * 删除图书
     * @param $id
     * @param array $conditions
     */
    public function deleteBook($id)
    {
        $query = DB::table("book_info")->where("book_id",$id)->delete();
        return $query;
    }

    /**
     * 根据条件获取图书
     * @param $pageno  页码
     * @param $perPage 分页量
     * @param array $conditions 条件数组
     */
    public function getBookList($pageno, $perPage, $conditions = array())
    {
        $book = DB::table("book_info");
        $offset = ($pageno - 1) * $perPage;

        $data = array();
        if (!empty($conditions)) {
            $data = $book->skip($offset)->take($perPage)->fetch();
        } else {
            $data = $book->skip($offset)->take($perPage)->fetch();
        }
        return $data;
    }

    /**
     * 获取图书数量
     * @param $conditions 提交数组
     * @return  $totalcount  array  结果数组
     */
    public function getBookCount($conditions)
    {
        return DB::table('book_info')->count();
    }

    public function UpdateBook($id ,$data){
        if(!$id ) return ;
        $query = DB::table("book_info")->where("book_id",$id)->update($data);
        return $query ;
    }
}