<?php

class Browser 
{
	public $array = array(
						'chrome' => array('Chrome',0,0),
                        'firefox' => array('FireFox',0,0),
                        'safari' => array('Safari',0,0),
                        'opera' => array('Opera',0,0),
                        'explorer' => array('Explorer',0,0),
                        'knqueror' => array('Konqueror',0,0),
                        'lynx' => array('Lynx',0,0)
	);
	
	public function arrayToPost(){

		foreach ($this->array as $key => $value)
		{
			$arr[$key] = $value[0];
		}
		return $arr;
	}
}
