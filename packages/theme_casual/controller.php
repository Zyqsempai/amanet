<?php   defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeCasualPackage extends Package {

	protected $pkgHandle = 'theme_casual';
	protected $appVersionRequired = '5.6.2.1';
	protected $pkgVersion = '1.0';

	public function getPackageName() {
		return t("Casual Theme");
	}

	public function getPackageDescription() {
		return t('Installs the Casual theme');
	}

	public function install() {
		Loader::model('collection_types');
		$pkg = parent::install();
		PageTheme::add('casual', $pkg);
		$pagetypearray = array(
			array("left_sidebar", "Left Sidebar"),
			array("right_sidebar", "Right Sidebar"),
			array("full", "One Column"),
			array("three_column", "Three Column Layout")
		);
		foreach ($pagetypearray as $value) {
			$pageType = CollectionType::getByHandle($value[0]);
			if(!$pageType) {
		    $pkg = Package::getByHandle('casual');
		    $newPageType = CollectionType::add(array('ctHandle'=>$value[0], 'ctName'=>t($value[1])), $pkg);
			}else {
			    $newPageType = $pageType;
			}
		}
	}
}
