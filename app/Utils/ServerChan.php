<?php

namespace App\Utils;

use App\Services\Config;

class ServerChan
{

    /**
     * 发送消息
     */
    public static function Send($messageText)
    {
        if (Config::get('enable_serverchan') == 'true') {
            $key = (Config::get('serverchan_key'));
            $messageTitle = (Config::get('serverchan_title'));
            file_get_contents('https://sc.ftqq.com/'.$key.'.send?text='.urlencode($messageTitle).'&desp='.urlencode($messageText));
        }
    }
    
}
