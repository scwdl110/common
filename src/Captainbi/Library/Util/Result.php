<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 输出结果的封装
 * 只要get不要set,进行更好的封装
 * @param <T>
 */

namespace App\Util;

class Result
{

    private static function data($code, $msg, $data = null)
    {
        return json(array(
            'code' => $code ? $code : 0,
            'msg' => $msg ? $msg : 'success',
            'data' => $data
        ));
    }

    /**
     * 成功时
     * @param <T>
     * @return
     */
    public static function success($data, $msg = '')
    {
        return self::data(0, "success", $data);
    }

    /**
     * 失败
     * @param <T>
     * @return
     */
    public static function fail($code, $msg = '')
    {
        return self::data($code, $msg);
    }

}