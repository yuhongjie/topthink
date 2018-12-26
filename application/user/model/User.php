<?php

namespace app\user\model;

use think\Model;

class User extends Model
{
    //定义表名
    protected $table = 'users';

    //定义时间戳字段名

    protected $createTime = 'create_at';
    protected $updateTime = 'update_at';

    //设置修改器
    public function setPasswordAttr($value){
    	return password_hash($value, PASSWORD_DEFAULT);
    }

    public function setEmailAttr($value){
    	return strtolower($value);
    }
}

