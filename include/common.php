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

defined('XOOPS_ROOT_PATH') || exit("XOOPS root path not defined");

define("TDMSPOT_DIRNAME", basename(dirname(__DIR__)));
define("TDMSPOT_URL", XOOPS_URL . '/modules/' . TDMSPOT_DIRNAME);
define("TDMSPOT_IMAGES_URL", TDMSPOT_URL . '/assets/images');
define("TDMSPOT_UPLOAD_URL", TDMSPOT_URL . '/upload');
define("TDMSPOT_CAT_URL", TDMSPOT_URL . '/upload/cat');
define("TDMSPOT_ROOT_PATH", XOOPS_ROOT_PATH . '/modules/' . TDMSPOT_DIRNAME);
define("TDMSPOT_UPLOAD_PATH", XOOPS_ROOT_PATH . '/modules/' . TDMSPOT_DIRNAME . '/upload');
define("TDMSPOT_CAT_PATH", XOOPS_ROOT_PATH . '/modules/' . TDMSPOT_DIRNAME . '/upload/cat');

//define option du module
define("TDMSPOT_DISPLAY_CAT", $xoopsModuleConfig['tdmspot_cat_display']);

include_once TDMSPOT_ROOT_PATH . '/include/functions.php';
include_once TDMSPOT_ROOT_PATH . '/include/seo_functions.php';
include_once TDMSPOT_ROOT_PATH . '/include/pagenav.php';
include_once XOOPS_ROOT_PATH . "/class/tree.php";
include_once TDMSPOT_ROOT_PATH . '/class/tree.php';
include_once TDMSPOT_ROOT_PATH . '/class/formselect.php';
