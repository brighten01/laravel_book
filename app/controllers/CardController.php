<?php

class CardController extends BaseController
{

    private $card;

    public function __construct()
    {
        $this->card = new Card();
        $this->pagesize= 20;
    }

    public function addCard()
    {
        $issubmit = Input::get("issubmit");
        if ($issubmit) {
            $expire_time = Input::get("expire_time") ;
            $data = array(
                "card_number" => Input::get("card_number"),
                "address" => Input::get("address"),
                "mobile" => Input::get("mobile"),
                "id_card" => Input::get("id_card"),
                "create_time" => time(),
                "update_time" => time(),
                "expire_time" => strtotime($expire_time),
            );
            $id = $this->card->addCard($data);
            if ($id) {
                $this->reportScript("/card/listinfo", "添加成功");
            } else {
                $this->reportScript("/card/listinfo", "添加失败");
            }
        }
        return View::make("card.add");
    }

    public function del($id)
    {
        $insert_id = $this->card->deleteCard($id);
        if ($insert_id) {
            $this->reportScript("/card/listinfo", "添加成功");
        } else {
            $this->reportScript("/card/listinfo", "添加失败");
        }
    }

    /**
     * 编辑
     * @param $id
     */
    public function edit($id)
    {
        $card_info = $this->card->getCardInfo($id);
        $issubmit = Input::get("issubmit");
        if ($issubmit) {
            $data = array(
                "card_number" => Input::get("card_number"),
                "address" => Input::get("address"),
                "mobile" => Input::get("mobile"),
                "id_card" => Input::get("id_card"),
                "create_time" => time(),
                "update_time" => time(),
                "expire_time" => Input::get("expire_time"),
                "expire_time" => Input::get("expire_time"),
            );
            $id = $this->card->editCard($id, $data);
            if ($id) {
                $this->reportScript("/card/listinfo", "修改成功");
            } else {
                $this->reportScript("/card/listinfo", "修改失败");
            }
        }
        return View::make("card.edit", array("id" => $id, "data" => $card_info));
    }

    public function listinfo()
    {
        $conditions = array();
        $count = $this->card->getCardCount($conditions);
        $pageno = Input::get('page');
        if (empty($pageno)) {
            $pageno = 1;
        }
        $data = $this->card->getCardList($pageno, $this->pagesize, $conditions);
        return View::make('card.list', array("data" => $data));
    }

}