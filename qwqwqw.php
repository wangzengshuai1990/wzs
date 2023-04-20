<?php

namespace WeChatAppPlugin;

use Codeages\PluginBundle\System\PluginBase;
use WeChatAppPlugin\Biz\WeChatAppServiceProvider;

class WeChatAppPlugin extends PluginBase
{
    public function boot()
    {
        parent::boot();
        $biz = $this->container->get('biz');
        $biz->register(new WeChatAppServiceProvider());
    }
}
