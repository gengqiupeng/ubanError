<?php

namespace uban\errorCode;


class ErrorArray
{
    public static function getCodeArray()
    {
        return [
            'en' => [
            ],
            'cn' => [
                Constant::$SUCCESS_NUM         => "请求成功",
                Constant::$FAIL_NUM            => '系统错误',
                Constant::$REQUEST_PARAM_ERROR => '参数错误',
                Constant::$DB_ERROR            => '数据库错误',
                Constant::$BUSINESS_ERROR      => '业务逻辑错误',
                Constant::$USER_IS_NOT_LOGIN   => '请先登录',
                Constant::$DATA_NOT_FOUND      => "结果不存在",
                Constant::$DATA_DUPLICATE      => "数据重复"
            ],
        ];
    }
}