<?php

namespace uban\errorCode;

use think\Exception;
use think\facade\Lang;

class Error
{
    /**
     * @var int 0表示成功
     */
    protected $code = 0;
    protected $msg = '';
    protected $data = '';

    /**
     * Error constructor.
     * @param int $code
     * @param $data string|object 携带的数据
     * @param string $msg
     */
    public function __construct($data, $msg = '', $code = 1)
    {
        $this->code = $code;
        $this->data = $data;
        $this->msg = $msg;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return int 错误代码
     */
    public function getCode()
    {
        return $this->code;
    }

    public function getMsg()
    {
        if ($this->msg == "") {
            return $this->getMsgByCode();
        } else {
            return $this->msg;
        }
    }

    private function getMsgByCode()
    {
        $errorArray = ErrorArray::getCodeArray();
        if (Lang::getLangset() == "en-us") {
            $errorArray = $errorArray['en'];
        } else {
            $errorArray = $errorArray['cn'];
        }

        if (!isset($this->code, $errorArray)) {
            throw new Exception('ErrorCode Not Define');
        }

        return $data['message'] = $errorArray[$this->code];
    }

    /**
     * @return bool 判断是否有错误
     */
    public
    function isSuccess()
    {
        return $this->code === 0;
    }

    /**
     * @param $result string
     * @param $data string|array
     * @param $msg string
     * @return Error
     */
    public
    static function instance($result, $data = '', $msg = '')
    {
        return new Error($data, $msg, $result);
    }

    /**
     * @return string
     */
    public
    function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public
    function setData($data)
    {
        $this->data = $data;
    }
}