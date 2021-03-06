<?php
/**
 * Created by PhpStorm.
 * User: eson
 * Date: 2019-02-27
 * Time: 22:20
 */

namespace app\api\lib;

/**
 * 验证码处理类
 * Class VerifyCode
 * @package app\api\lib
 */
class VerifyCode
{
    /**
     * 获取随机数字 - 用于图形验证码
     * @param $length int
     * @return string
     */
    public function get_code ($length = 6)
    {
        $str = null;
        $strPol = "ABCDEFGHGKLMNPQRSUVWXYZabcdefghigkmnpqrsuvwxyz";
        $max = strlen($strPol) - 1;
        for ($i = 0; $i < $length; $i++) {
            $str .= $strPol[rand(0, $max)]; //rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }

    /**
     * 获取随机数字 - 用于短息验证码
     * @param int $length
     * @return string
     */
    public function get_code_tel ($length = 6)
    {
        $str = null;
        $strPol = "0123456789";
        $max = strlen($strPol) - 1;
        for ($i = 0; $i < $length; $i++) {
            $str .= $strPol[rand(0, $max)]; //rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }

    /**
     * @FIXME
     * @param $tel
     * @param $code
     */
    public function sendTelMes ($tel, $code)
    {
        /*短信服务尚未申请*/
    }

    /**
     * @FIXME
     * @param $email
     * @param $code
     */
    public function sendEmailMes ($email, $code)
    {
        /*邮箱服务服务尚未申请*/
    }
}