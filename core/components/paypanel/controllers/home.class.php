<?php

/**
 * The home manager controller for PayPanel.
 *
 */
class PayPanelHomeManagerController extends PayPanelMainController {
	/* @var PayPanel $PayPanel */
	public $PayPanel;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('paypanel');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->PayPanel->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->PayPanel->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->PayPanel->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->PayPanel->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->PayPanel->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->PayPanel->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->PayPanel->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "paypanel-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->PayPanel->config['templatesPath'] . 'home.tpl';
	}
}