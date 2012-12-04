<?php
/*
	@ see http://code.google.com/p/swfobject/wiki/documentation
	@ see http://www.swffix.org/swfobject/generator/
*/

class FlashObjectDOD extends SiteTreeDecorator {

	function extraStatics(){
		return array(
			'db' =>   array(
				"Title" => "Varchar(255)"
			),
			'has_one' => array(
				"FlashFile" => "File"
			),
		);
	}

	protected static $classes_with_flash = array();
		static function set_classes_with_flash($v) {self::$classes_with_flash = $v;}
		static function get_classes_with_flash() {return self::$classes_with_flash;}

	protected static $classes_without_flash = array();
		static function set_classes_without_flash($v) {self::$classes_without_flash = $v;}
		static function get_classes_without_flash() {return self::$classes_without_flash;}

	function updateCMSFields(FieldSet &$fields) {
		if( ! FlashObject::has_external_flash_file()) {
			$show = true;
			if(is_array(self::get_classes_with_flash()) && count(self::get_classes_with_flash())) {
				if(!in_array($this->owner->ClassName, self::get_classes_with_flash())) {
					$show = false;
				}
			}
			if(is_array(self::get_classes_without_flash()) && count(self::get_classes_without_flash())) {
				if(in_array($this->owner->ClassName, self::get_classes_without_flash())) {
					$show = false;
				}
			}
			if($show) {
				$fields->addFieldToTab("Root.Content.FlashObject", new FileIFrameField('FlashFile', 'File'));
				$fields->addFieldToTab("Root.Content.FlashObject", new TextField('Title', 'Title'));
			}
		}
		return $fields;
 }

	public function CreateFlashObject() {
		if($this->owner->FlashFileID) {
			$obj = new FlashObject();
			$flashFile = $this->owner->FlashFile();
			return $obj->CreateFlashObject($this->owner->Title, null, $flashFile->Filename);
		}
		else {
			return new DataObjectSet();
		}
  }

	/*
	legacy function
	*/

	public function FlashObjectData() {
		return $this->CreateFlashObject();
	}

}



