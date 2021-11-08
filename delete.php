<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('ModuleName');
if($module) {
$module->delete();
}
?>
