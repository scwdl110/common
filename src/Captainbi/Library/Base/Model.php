<?php


namespace Captainbi\Library\Base;


class Model extends \think\Model
{
    /*
     * 父类配置只有id,目地是为了子类都根据实际去配置，
     * 如果不配置，使用模型插下会去数据库查询表字段，
     * 多一次查询,性能不好
     */
    protected $field = ['id'];
}