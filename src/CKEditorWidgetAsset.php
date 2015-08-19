<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace denoll\editor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author denoll <denoll@denoll.ru>
 * @link http://www.denoll.ru/
 * @package denoll\editor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $depends = [
        'denoll\editor\CKEditorAsset'
    ];
    public $js = [
        'dosamigos-ckeditor.widget.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}
