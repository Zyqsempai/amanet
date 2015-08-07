<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$ih = Loader::helper("interface/flag", 'multilingual');
$iterator = 0;
?>
<div class="ccm-multilingual-switch-language-flags">
	<div class="ccm-multilingual-switch-language-flags-label"><?php  echo $label?></div>
<?php  foreach($languageSections as $ml) { ?>
	<a href="<?php  echo $action?>?ccmMultilingualChooseLanguage=<?php  echo $ml->getCollectionID()?>&ccmMultilingualCurrentPageID=<?php  echo $cID?>" class="<?php  if ($activeLanguage == $ml->getCollectionID()) { ?>ccm-multilingual-active-flag<?php  } ?>">
<img style="width: 110px;height: 40px;margin-right: 50px" src="<?= $this->getThemePath() ?>/img/button<?php echo $iterator; ?>.png">
    </a>
<?php $iterator++;  } ?>
</div>