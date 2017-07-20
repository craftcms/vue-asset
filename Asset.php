<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\vue;

use craft\web\AssetBundle;

/**
 * Vue.js asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * @var string The JS filename (sans "[.min].js") to register
     */
    public $jsFile = 'vue';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__.'/lib';

        $this->js = [
            $this->jsFile.$this->dotJs(),
        ];

        parent::init();
    }
}
