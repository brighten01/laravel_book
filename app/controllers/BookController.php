<?php

class BookController extends BaseController
{

    /**
     * 图书管理系统默认首页
     * @return mixed
     */

    private $db;
    private $book;

    public function __construct()
    {
        $this->pagesize = 20;
        $this->book = new Book();
    }

    public function index()
    {

        return View::make("user.login");
    }

    /**
     * 增加书籍
     * @return mixed
     */
    public function add()
    {

        $issubmit = Input::get("issubmit");
        if ($issubmit) {

            $data = array(
                "book_name" => Input::get("book_name"),
                "author" => Input::get("author"),
                "history_time" => Input::get("create_time"),
                "press" => Input::get("press"),
                "type" => Input::get("type"),
                "source" => Input::get("source"),
                "create_time" => time()
            );
            $insert_id = $this->book->addBook($data);
            $this->reportScript("/book/listinfo", "添加成功");
        }
        return View::make("book.add");
    }

    /**
     * 编辑数据
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $bookinfo = $this->book->getBookById($id);
        $issubmit = Input::get("issubmit");
        if ($issubmit) {
            $data = Input::all();
            $runData = array();
            foreach ($data as $key => $value) {
                if ($key != "issubmit" && $key != "_token") {
                    $runData[$key] = $value;
                }
            }
            $query = $this->book->UpdateBook($id, $runData);
            if ($query) {
                $this->reportScript("/book/listinfo/", "修改成功");
            } else {
                $this->reportScript("/book/listinfo/", "修改失败");
            }

        }
        return View::make("book.edit", array("bookinfo" => $bookinfo, "id" => $id));
    }

    /**
     * 删除书籍
     * @param $id
     */
    public function del($id)
    {
        $query = $this->book->deleteBook($id);
        if ($query) {
            $this->reportScript("/book/listinfo/", "删除成功");
        } else {
            $this->reportScript("/book/listinfo/", "删除失败");
        }
    }

    /**
     * 书籍列表
     * @return mixed
     */
    public function listinfo()
    {
        $conditions = array();
        $count = $this->book->getBookCount($conditions);
        $pageno = Input::get('page');
        if (empty($pageno)) {
            $pageno = 1;
        }
        $data = $this->book->getBookList($pageno, $this->pagesize, $conditions);
        return View::make('book.listinfo', array("data" => $data));
    }

    /**
     * 借阅列表信息
     * @return mixed
     */
    public function getBorrowList()
    {
        return View::make('book.list');
    }

    /**
     *借阅信息
     */
    public function binfo()
    {

    }

    /**
     * 添加类别
     */
    public function addtype()
    {

    }

    /**
     *类别列表
     */
    public function typelist()
    {

    }
}

