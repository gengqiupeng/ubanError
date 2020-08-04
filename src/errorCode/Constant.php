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
    //-------------------业务逻辑相关-----------------------------------------//
    /**
     * @var int 业务逻辑错误
     */
    public static $BUSINESS_ERROR = 50001;

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