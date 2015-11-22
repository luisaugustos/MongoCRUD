<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlUtil
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class UrlUtil {
    
    private static $singleton;
	private $rawUrl;

	/**
	 * @return UrlUtil Description
	 */
	public static function getInstance() {
		if (self::$singleton == null) {
			self::$singleton = new UrlUtil();
		}
		return self::$singleton;
	}

            
    public function unmaskURL($url) {
		$controller = $method = $params = '';
		$this->rawUrl = $url;
		if ($url != '') {
			$value = explode('/', $url);
			$controller = (isset($value[0]) ? $value[0] : '');
			$method = (isset($value[1]) ? $value[1] : '');
			if (count($value) > 2) {
				$params = array_slice($value, 2);
			} else {
				$params = array();
			}
		} else {
			$controller = '';
			$method = '';
			$params = '';
		}
		$return = array(
			'controller' => $controller,
			'method' => $method,
			'params' => $params
		);
		return $return;
	}
}
