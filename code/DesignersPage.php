<?php

class DesignersPage extends Page
{
    private static $icon = "designers/images/treeicons/DesignersPage";

    private static $many_many = array(
        "Designers" => "Designer"
    );
}

class DesignersPage_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
        PrettyPhoto::include_code();
        Requirements::themedCSS("DesignersPage", "designers");
        Config::inst()->Update("PrettyPhoto", "theme", "dark_rounded");//"dark_rounded", "dark_square", "facebook", "light_rounded", "light_square" OR create your own!
        Config::inst()->Update("PrettyPhoto", "more_config", "AnimationSpeed: 'slow', opacity: 0.30, showTitle: false");//see readme for some examples!
    }
}
