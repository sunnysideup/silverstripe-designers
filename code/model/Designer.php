<?php

class Designer extends DataObject {

	private static $db = array(
		"Name" => "Varchar",
		"Location" => "Varchar",
		"Notes" => "Varchar(255)",
		"Rate" => "Enum('$,$$,$$$,$$$$,$$$$$', '$$$')"
	);

	private static $has_one = array(
		"Sample1" => "Image",
		"Sample2" => "Image",
		"Sample3" => "Image"
	);

	private static $belongs_many_many = array(
		"DesignersPages" => "DesignersPage"
	);

	private static $default_order = "\"Rate\" ASC, \"Name\" ASC";

}

class Designer_Admin extends ModelAdmin {

	private static $managed_models = array("Designer");

	private static $url_segment = 'designer';

	private static $menu_title = 'Designers';

	public $showImportForm = false;

}
