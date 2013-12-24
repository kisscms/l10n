<?php

/**
 * L10n
 * Localisation plugin for KISSCMS
 * Created by Makis Tracend ( @tracend )
 *
 */

if ( !class_exists("L10n") ){

class L10n {

	public function load(){

		// first find the language
		$lang = $this->findLang();
		$locale = @file_get_contents( $lang );
		return json_decode( $locale, true );

	}

	protected function findLang(){
		// variables
		$lang = "";
		$config = explode("-", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
		//if( empty( $lang ) || is_null( $lang ) ) $lang = "en-US";
		$code = $config[0];
		$file = getPath("public/data/language/". $code .".json");
		if( is_file( $file ) ){
			$lang = $file;
		} else {
			// plain english "en-US"...
			$lang = getPath("public/data/language/en.json");
		}
		return $lang;
	}
}

}