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
include_once '../../mainfile.php';
include_once $GLOBALS['xoops']->path('class/template.php');
$page_handler =& xoops_getModuleHandler('tdmspot_page', 'TDMSpot');
$item_handler =& xoops_getModuleHandler('tdmspot_item', 'TDMSpot');
$cat_handler  =& xoops_getModuleHandler('tdmspot_cat', 'TDMSpot');

error_reporting(0);
$GLOBALS['xoopsLogger']->activated = false;

if (function_exists('mb_http_output')) {
    mb_http_output('pass');
}

header('Content-Type:text/xml; charset=utf-8');

$tpl = new XoopsTpl();
$tpl->xoops_setCaching(2);
$tpl->xoops_setCacheTime(3600);

if (!$tpl->is_cached('db:spot_rss.tpl')) {
    xoops_load('XoopsLocal');
    $tpl->assign('channel_title', XoopsLocal::convert_encoding(htmlspecialchars($xoopsConfig['sitename'], ENT_QUOTES)));
    $tpl->assign('channel_link', XOOPS_URL . '/');
    $tpl->assign('channel_desc', XoopsLocal::convert_encoding(htmlspecialchars($xoopsConfig['slogan'], ENT_QUOTES)));
    $tpl->assign('channel_lastbuild', formatTimestamp(time(), 'rss'));
    $tpl->assign('channel_webmaster', checkEmail($xoopsConfig['adminmail'], true));
    $tpl->assign('channel_editor', checkEmail($xoopsConfig['adminmail'], true));
    $tpl->assign('channel_category', 'News');
    $tpl->assign('channel_generator', 'XOOPS');
    $tpl->assign('channel_language', _LANGCODE);
    $tpl->assign('image_url', XOOPS_URL . '/images/logo.png');
    $dimention = getimagesize(XOOPS_ROOT_PATH . '/images/logo.png');
    if (empty($dimention[0])) {
        $width = 88;
    } else {
        $width = ($dimention[0] > 144) ? 144 : $dimention[0];
    }
    if (empty($dimention[1])) {
        $height = 31;
    } else {
        $height = ($dimention[1] > 400) ? 400 : $dimention[1];
    }
    $tpl->assign('image_width', $width);
    $tpl->assign('image_height', $height);
    //cherche les news
    $criteria = new CriteriaCompo();
    $criteria->add(new Criteria('display', 1));
    $criteria->add(new Criteria('indate', time(), '<'));
    $criteria->setSort('indate');
    $criteria->setOrder('ASC');
    $item_arr = $item_handler->getall($criteria);
    $tpitem   = array();
    foreach (array_keys($item_arr) as $i) {
        $tpitem['id']    = $item_arr[$i]->getVar('id');
        $tpitem['title'] = $item_arr[$i]->getVar('title');
        $tpitem['cat']   = $item_arr[$i]->getVar('cat');
        //trouve la categorie
        if ($cat =& $cat_handler->get($item_arr[$i]->getVar('cat'))) {
            $tpitem['cat_title'] = $cat->getVar('title');
            $tpitem['cat_id']    = $cat->getVar('id');
        }

        if (strpos($item_arr[$i]->getVar('text'), '{X_BREAK}')) {
            $more           = substr($item_arr[$i]->getVar('text'), strpos($item_arr[$i]->getVar('text'), '{X_BREAK}') + 11);
            $tpitem['text'] = substr($item_arr[$i]->getVar('text'), 0, strpos($item_arr[$i]->getVar('text'), '{X_BREAK}')) . "<a href='./item.php?itemid=" . $tpitem['id'] . "' rel='nofollow'>[...]</a>";
        } else {
            $tpitem['text'] = $item_arr[$i]->getVar('text');
        }

        $tpitem['indate'] = formatTimestamp($item_arr[$i]->getVar("indate"), "m");
        $tpitem['link']   = XOOPS_URL . "/modules/TDMSpot/item.php?itemid=" . $item_arr[$i]->getVar("id");
        $tpitem['guid']   = XOOPS_URL . "/modules/TDMSpot/item.php?itemid=" . $item_arr[$i]->getVar("id");

        $tpl->append('tpitem', $tpitem);
    }
}
$tpl->display('db:spot_rss.tpl');
