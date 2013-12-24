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

		$file = getPath("public/data/locale.json");

		$locale = @file_get_contents( $file );
		return json_decode( $locale, true );

	}
}

}