<?php
// +----------------------------------------------------------------------
// | Life Is A Box Of Chocolate...
// +----------------------------------------------------------------------
// | Company: YG | User: Sody xiezhen  |  Email:2918433292@qq.com  | Time:2017/5/16 9:37
// +----------------------------------------------------------------------
// | TITLE: this to do?
// +----------------------------------------------------------------------
namespace sody\nonce;
class Helper
{
    public static $length;
    public static $pool;
    public static function init(){
        //加载配置
        $config = require_once(__DIR__.'/../config/config.php');
        self::$length = isset($config['length']) ? $config['length']: 16;
        self::$pool   = isset($config['pool']) ? $config['pool']: 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    }
    //生成随机字符串
    public static function createNonce($length=16){
        self::init();
        $length = isset($length) ? $length : self::$length;
        $str = '';
        for($i=0;$i<$length;$i++){
            $str .= substr(self::$pool,mt_rand(0,strlen(self::$pool)-1),1);
        }
        return $str;
    }
}