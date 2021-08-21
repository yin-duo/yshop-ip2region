<?php

namespace yshop;

use think\Config;
use think\Route;
use think\Service;

class Ip2RegionService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/ip2region', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'Ip2Region';
                $data['statement'] = '本站技术基于Yshop商城框架系统';

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
