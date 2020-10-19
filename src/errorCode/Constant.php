<?php


namespace uban\errorCode;

/**
 * Class Constant
 * 这里定义错误码后，在使用的地方，使用ctrl+Q可以直接看到错误说明文档
 * 此类的错误码和ErrorArray中一一对应
 * @package uban\errorCode
 */
class Constant
{
    /**
     * @var int 成功代码
     */
    public static $SUCCESS_NUM = 0;
    /**
     * @var int 失败统一码
     */
    public static $FAIL_NUM = -1;

    //--------------------参数相关--------------------------//
    /**
     * @var int 参数验证失败
     */
    public static $REQUEST_PARAM_ERROR = 20001;


    //----------------------数据库相关----------------------------//
    /**
     * @var int 数据库错误
     */
    public static $DB_ERROR = 30001;

    //----------------------用户相关------------------------------------//
    /**
     * @var int 用户尚未登录
     */
    public static $USER_IS_NOT_LOGIN = 40004;
    /**
     * @var int 账号或密码错误
     */
    public static $USER_PASSWORD_ERROR = 40005;
    /**
     * @var int 用户不存在
     */
    public static $USER_IS_NOT_EXISTS = 40006;
    /**
     * @var int 用户已过期
     */
    public static $USER_IS_EXPIRED = 40007;

    /**
     * @var int 用户凭证已过期
     */
    public static $USER_TOKEN_IS_EXPIRED = 40008;
    //-------------------业务逻辑相关-----------------------------------------//
    /**
     * @var int 业务逻辑错误
     */
    public static $BUSINESS_ERROR = 50001;
    /**
     * @var int 邀请过期
     */
    public static $BUSINESS_INVITED_EXPIRE = 50002;
    /**
     * @var int 业务已处理
     */
    public static $BUSINESS_HANDLED = 50003;
    /**
     * @var int 业务未处理
     */
    public static $BUSINESS_NOT_HANDLED = 50004;

    //-----------------数据相关错误-------------------------------------//
    /**
     * @var int 数据不存在
     */
    public static $DATA_NOT_FOUND = 60001;
    /**
     * @var int 数据重复
     */
    public static $DATA_DUPLICATE = 60002;

}