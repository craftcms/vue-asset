Vue.js Asset Bundle for Craft CMS
=================================

This package provides an asset bundle that registers [Vue.js](https://vuejs.org/).

You can require it on a Craft project or plugin via Composer:

    composer require craftcms/vue-asset

The asset bundle class is `craft\vue\Asset`. It can be registered on a request like so:

#### PHP

```php
use craft\vue\Asset as VueAsset;

Craft::$app->view->registerAssetBundle(VueAsset::class);
```

#### Twig

```twig
{% do view.registerAssetBundle('craft\\vue\\Asset') %}
```

You can also make it a dependency of another asset bundle like so:

```php
<?php
namespace ns\prefix\assets;

use craft\vue\Asset as VueAsset;
use craft\web\AssetBundle;

class MyAsset extends AssetBundle
{
    public $depends = [
        VueAsset::class,
    ];
    
    // ...
}
```
