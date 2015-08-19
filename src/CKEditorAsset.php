<?php

namespace denoll\editor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author denoll <denoll@denoll.ru>
 * @link http://www.denoll.ru/
 * @package denoll/editor
 */
class CKEditorAsset extends AssetBundle
{
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/ckeditor';
        parent::init();
    }
}
