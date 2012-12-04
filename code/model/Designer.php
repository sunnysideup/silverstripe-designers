<?php

class Designer extends DataObject {

	public static $db = array(
		"Name" => "Varchar",
		"Location" => "Varchar",
		"Notes" => "Varchar(255)",
		"Rate" => "Enum('$,$$,$$$,$$$$,$$$$$', '$$$')"
	);

	public static $has_one = array(
		"Sample1" => "Image",
		"Sample2" => "Image",
		"Sample3" => "Image"
	);

	public static $belongs_many_many = array(
		"DesignersPages" => "DesignersPage"
	);

	static $default_order = "\"Rate\" ASC, \"Name\" ASC";

}

class Designer_Admin extends ModelAdmin {

	public static $managed_models = array("Designer");

	public static $url_segment = 'designer';

	public static $menu_title = 'Designers';

	public $showImportForm = false;

}
