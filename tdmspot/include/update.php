<?php
/**
 * ****************************************************************************
 *  - TDMSpot By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.)
 *
 * Cette licence, contient des limitations
 *
 * 1. Vous devez poss�der une permission d'ex�cuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' �tudier ni l'adapter � vos besoins,
 * 3. Vous ne devez le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la libert� de l'am�liorer ni de rendre publiques les modifications
 *
 * @license     TDMFR GNU public license
 * @author      TDMFR ; TEAM DEV MODULE
 *
 * ****************************************************************************
 */
if (!defined('XOOPS_ROOT_PATH')) {
    exit;
}

function xoops_module_update_TDMSpot(&$xoopsModule, $oldVersion = null)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser, $xoopsModule;

    $moduleDirName = basename(dirname(__DIR__));

    $moduleHandler =& xoops_getHandler('module');
    $module        = $moduleHandler->getByDirname($moduleDirName);

    if ($oldVersion < 102) {
        $xoopsDB->queryFromFile(XOOPS_ROOT_PATH . '/modules/TDMSpot/sql/mysql1.01.sql');
    }

    if ($oldversion < 210) {
        // remove old html template files
        $templateDirectory = XOOPS_ROOT_PATH . '/modules/' . $module->getVar('dirname', 'n') . '/templates/';
        $template_list     = array_diff(scandir($templateDirectory), array('..', '.'));
        foreach ($template_list as $k => $v) {
            $fileinfo = new SplFileInfo($templateDirectory . $v);
            if ($fileinfo->getExtension() === 'html' && $fileinfo->getFilename() !== 'index.html') {
                @unlink($templateDirectory . $v);
            }
        }

        xoops_load('xoopsfile');

        //remove /images directory
        $imagesDirectory = XOOPS_ROOT_PATH . '/modules/' . $module->getVar('dirname', 'n') . '/images/';
        $folderHandler = XoopsFile::getHandler('folder', $imagesDirectory);
        $folderHandler->delete($imagesDirectory);

        //delete .html entries from the tpl table
        $sql = 'DELETE FROM ' . $xoopsDB->prefix("tplfile") . " WHERE `tpl_module` = '" .$module->getVar('dirname', 'n') . "' AND `tpl_file` LIKE '%.html%'";
        $xoopsDB->queryF($sql);
    }


    return true;
}

function FieldExists($fieldname, $table)
{
    global $xoopsDB;
    $result = $xoopsDB->queryF("SHOW COLUMNS FROM $table LIKE '$fieldname'");

    return ($xoopsDB->getRowsNum($result) > 0);
}

function TableExists($tablename)
{
    global $xoopsDB;
    $result = $xoopsDB->queryF("SHOW TABLES LIKE '$tablename'");

    return ($xoopsDB->getRowsNum($result) > 0);
}
