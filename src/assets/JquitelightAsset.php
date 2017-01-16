<?php

namespace iamwebdesigner\jquitelight\assets;

use yii\web\AssetBundle;

/**
 * Class JquitelightAsset
 * @package iamwebdesigner\jquitelight\assets
 * @author iamwebdesigner
 */
class JquitelightAsset extends AssetBundle
{
	public $sourcePath = '@bower/jquitelight';
	public $js = [
		'jquitelight.min.js'
	];
	public $depends = [
		'yii\web\JqueryAsset'
	];
}