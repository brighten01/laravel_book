<?php

class Card extends Eloquent
{

    public function getCardInfo($card_id)
    {
        $data = array();
        $data =  DB::table("book_user_card")->where("id",$card_id)->fetch();
        return $data;
    }

    public function editCard($id ,$data)
    {
        $query = DB::table("book_user_card")->where("id",$id)->update($data);
        return $query;
    }

    public function deleteCard($id)
    {
        $query = DB::table("book_user_card")->where("id",$id)->delete();
        return $query;
    }

    public function getCardList($pageno, $perPage, $conditions = array())
    {
        $offset = ($pageno-1) * $perPage;
        $data=  DB::table("book_user_card")->skip($offset)->take($perPage)->fetch();
        return $data;
    }

    public function getCardCount($conditions = array())
    {
        $count = DB::table("book_user_card")->count();
        return $count;
    }

    public function addCard($data){
        $insert_id = DB::table("book_user_card")->insertGetId($data);
        return $insert_id;
    }


}