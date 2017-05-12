<?php
/**
 * Adds lodash to assets
 * @author Pablo palacios
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2lodashasset
 */
namespace moplin\yii2lodashasset;
use yii\web\AssetBundle;
/**
 * Asset for the lodash library
 */
class LodashAsset extends AssetBundle
{
    public $sourcePath = '@bower/lodash';
    public $js = [
        'lodash.js',
    ];
}