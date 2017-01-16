<?php

namespace iamwebdesigner\jquitelight;

use iamwebdesigner\jquitelight\assets\JquitelightAsset;
use yii\base\Exception;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class Jquitelight
 * @package iamwebdesigner\jquitelight
 * @author iamwebdesigner
 */
class Jquitelight extends Widget
{
	/**
	 * HTML attributes for rendering container
	 * @var array
	 */
	public $htmlOptions = [];
	/**
	 * The options to be passed for javascript plugin.
	 * @var array
	 */
	public $clientOptions = [];
	/**
	 * Whether to wrap content in a div or not
	 * if false then jQuery.unwrap method used to get rid of created div
	 * @var bool
	 */
	public $wrapContent = true;
	/**
	 * List of keywords to be highlighted
	 * can be assoc array as this value if passed for first argument of mark method of js plugin
	 * @var array
	 */
	public $keywords = [];

	/**
	 * Initialize plugin and open wrapping container
	 */
	public function init()
	{
		parent::init();
		if (!$this->htmlOptions['id']) {
			$this->htmlOptions['id'] = $this->getId();
		}
		if (empty($this->keywords)) {
			throw new Exception('No keywords specified for highlighting');
		}
		Html::beginTag('div', $this->htmlOptions);
	}

	/**
	 * Register assets and close wrapping container
	 */
	public function run()
	{
		$this->registerAssets();
		Html::endTag('div');
	}

	/**
	 * Register scripts
	 */
	protected function registerAssets()
	{
		$view = $this->getView();
		$id = $this->htmlOptions['id'];
		JquitelightAsset::register($view);
		$keywords = Json::encode($this->keywords);
		$options = Json::encode($this->clientOptions);
		$view->registerJs("jQuery('#$id').mark($keywords, $options);", $view::POS_END);
		if (!$this->wrapContent) {
			$view->registerJs("jQuery('#$id').find(':eq(0)').unwrap();", $view::POS_END);
		}
	}
}