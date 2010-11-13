<?php
	return (OBJECT) array(
		"site"=>"portfolio",
		"languages"	=> array('nl'),
      	"timezone"	=> "Europe/Amsterdam",
		"load"=>array(
			"database"	=> true,
			"log"		=> true,
			"cache"		=> false,
			"modules"	=> array(
				"image_module" => true
				)
			),
		);