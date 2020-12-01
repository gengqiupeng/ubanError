<?php

namespace uban\errorCode;


class ErrorArray
{
    public static function getCodeArray()
    {
        return [
            'en' => [
                Constant::$SUCCESS_NUM         => "success",
                Constant::$FAIL_NUM            => 'error',
                Constant::$REQUEST_PARAM_ERROR => 'param error',
                Constant::$DB_ERROR            => 'db error',

                Constant::$BUSINESS_INVITED_EXPIRE => 'expire',
                Constant::$BUSINESS_ERROR          => 'business error',
                Constant::$BUSINESS_HANDLED        => 'already done',
                Constant::$BUSINESS_NOT_HANDLED    => 'not handled',
                Constant::$BUSINESS_INPUT_ERROR    => 'input data error',

                Constant::$USER_IS_NOT_LOGIN     => 'please login first',
                Constant::$USER_PASSWORD_ERROR   => 'username or password error',
                Constant::$USER_IS_NOT_EXISTS    => 'user not exists',
                Constant::$USER_IS_EXPIRED       => 'user is expired',
                Constant::$USER_TOKEN_IS_EXPIRED => 'auth is expired',
                Constant::$USER_AUTH_FAILED      => 'auth failed',
                Constant::$USER_RANDOM_CODE_ERROR => 'random code error',
                Constant::$USER_RANDOM_CODE_EXPIRE = 'random code is expired',

                Constant::$DATA_NOT_FOUND => "no data found",
                Constant::$DATA_DUPLICATE => "data duplicate",
            ],
            'cn' => [
                Constant::$SUCCESS_NUM         => "请求成功",
                Constant::$FAIL_NUM            => '系统错误',
                Constant::$REQUEST_PARAM_ERROR => '参数错误',
                Constant::$DB_ERROR            => '数据库错误',

                Constant::$BUSINESS_INVITED_EXPIRE => '邀请过期',
                Constant::$BUSINESS_ERROR          => '业务逻辑错误',
                Constant::$BUSINESS_HANDLED        => '已处理完毕',
                Constant::$BUSINESS_NOT_HANDLED    => '业务未处理',
                Constant::$BUSINESS_INPUT_ERROR    => '输入的数据有误',

                Constant::$USER_IS_NOT_LOGIN      => '请先登录',
                Constant::$USER_PASSWORD_ERROR    => '用户名或密码错误',
                Constant::$USER_IS_NOT_EXISTS     => '用户不存在',
                Constant::$USER_IS_EXPIRED        => '用户已过期',
                Constant::$USER_TOKEN_IS_EXPIRED  => '用户信息过期',
                Constant::$USER_AUTH_FAILED       => '认证授权失败',
                Constant::$USER_RANDOM_CODE_ERROR => '随机码错误',
                Constant::$USER_RANDOM_CODE_EXPIRE = '随机码过期',

                Constant::$DATA_NOT_FOUND => "结果不存在",
                Constant::$DATA_DUPLICATE => "数据重复",


            ],
        ];
    }
}