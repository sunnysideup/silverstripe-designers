<?php

class DesignersPage extends Page {

	private static $icon = "designers/images/treeicons/DesignersPage";

	private static $many_many = array(
		"Designers" => "Designer"
	);


}

class DesignersPage_Controller extends Page_Controller {

	function init() {
		parent::init();
		Requirements::themedCSS("DesignersPage");
		PrettyPhoto::include_code();
		PrettyPhoto::set_theme("dark_rounded");//"dark_rounded", "dark_square", "facebook", "light_rounded", "light_square" OR create your own!
		PrettyPhoto::set_more_config("AnimationSpeed: 'slow', opacity: 0.30, showTitle: false");//see readme for some examples!
	}

}
