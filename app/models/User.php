<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function attachEvent(){

        Event::listen('auth.login',function ($users){

        });
    }

    /**
     * 获取用户信息
     * @param $uid
     */
    public function getUserInfo($uid){

    }


    /**
     * 添加用户数据
     * @param $data
     */
    public  function addUser($data){

    }

    /**
     * 添加借阅信息
     * @param $data
     */
    public function addBorrower($data){

    }

    /**
     * 删除借阅信息
     * @param $id
     */
    public function deleteBorrowInfo($id,$uid){

    }

    /**
     * 验证用户
     * @param $username
     * @param $password
     */
    public function check($username ,$password){

    }

    /**
     * 编辑借阅信息
     * @param $id
     */
    public function editBorrowInfo($id){

    }

    /**
     *设置session
     */
    public function setSession(){

    }
}
