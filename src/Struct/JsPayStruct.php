<?php
/**
 * Created by PhpStorm.
 * User: Mztli
 * Date: 2016/11/3
 * Time: 17:10
 */

namespace Service\Struct;


use Service\Config\WxConfig;
use Service\Tools\Tool;

class JsPayStruct extends BStruct implements IStruct
{
    protected $packge;

    /**
     * @param mixed $packge
     */
    public function setPackge($packge)
    {
        $this->packge = $packge;
    }




    public function GetParams()
    {
        $Options =[
            'appId' => WxConfig::GetInstance()->getAppId(),
            'nonceStr' => Tool::RandStr(32),
            'signType' => 'MD5',
            'timeStamp' => time()
        ];
        $this->MergeOptions($Options);
        return $Options;
    }
}