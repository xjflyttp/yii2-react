<?php

namespace xj\react;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class ReactDomAsset extends AssetBundle
{

    public $sourcePath = '@bower/react';
    public $basePath = '@webroot/assets';
    public $js = ['react-dom.js'];
    public $depends = [
        'xj\react\ReactAsset',
    ];

}
