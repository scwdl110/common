<?php


namespace Captainbi\Library\Base;


abstract class Logic
{
    protected  $model;

    public function __construct()
    {
        $this->model = $this->setModel();
    }

    abstract protected function setModel();

    public function get(int $id) {
        // 我们假设存在一个 Info 实体
        return $this->model::where('id',$id)->first();
    }

    public function save($array) {
        $pk = $this->model->getPk();
        if ($array[$pk]) {//更新
            $this->model::update($array);
        } else {//插入
            return $this->model::create($array);
        }
    }

    public function delete($id) {
        return $this->model::destroy($id);
    }

}