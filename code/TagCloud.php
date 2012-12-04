<?php
/*
*/

class TagCloud extends ViewableData  {

	static $tagCloudItems = array();

	static $elementID = "flashcontent";

	static function addCloudTag($itemName, $style) {
		$tagCloudItems[] = array(
			"itemName" => $itemName,
			"style" => $style
		);
	}

	function init() {
		foreach(self::$tagCloudItems as $itemArray) {
			$cloudString = '<a style=\''.$itemArray["style"].'\'>'.$itemArray["ItemName"].'</a>';
		}
		Requirements::javascript("flash/javascript/swfobjectOlder.js");
		$customJS = '
			var so = new SWFObject("themes/massolution/images/tagcloud.swf", "tagcloud", "400", "300", "7", "");
			so.addParam("wmode", "transparent");
			so.addVariable("tcolor", "0xffffff");
			so.addVariable("tcolor2", "0xacacac");
			so.addVariable("mode", "tags");
			so.addVariable("distr", "true");
			so.addVariable("tspeed", "100");
			so.addVariable("tagcloud", "<tags>'.$cloudString.'</tags>");
			so.write("'.self::$elementID.'");';
		Requirements::customScript($customJS);
		$doSet = new DataObjectSet();
		return $doSet;
	}



}



