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

include '../../../include/cp_header.php';
include_once(XOOPS_ROOT_PATH . "/class/xoopsformloader.php");
include_once(XOOPS_ROOT_PATH . "/class/tree.php");
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
include_once '../include/functions.php';

xoops_cp_header();
//apelle du menu admin
//if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php")) {
//Adminmenu(0, _AM_TDMSPOT_MANAGE_INDEX);
//} else {
//include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.admin.php';
//loadModuleAdminMenu (0, _AM_TDMSPOT_MANAGE_INDEX);
//}

//load class
$item_handler  =& xoops_getModuleHandler('tdmspot_item', 'TDMSpot');
$cat_handler   =& xoops_getModuleHandler('tdmspot_cat', 'TDMSpot');
$page_handler  =& xoops_getModuleHandler('tdmspot_page', 'TDMSpot');
$block_handler =& xoops_getModuleHandler('tdmspot_newblocks', 'TDMSpot');

//compte les items
$numitem = $item_handler->getCount();
//compte les items en attente
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('display', 0));
$item_waiting = $item_handler->getCount($criteria);
//compte les item en attente
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('indate', time()), '>');
$item_time = $item_handler->getCount($criteria);
//compte les categorie
$numcat = $cat_handler->getCount();
//compte les categorie en attente
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('display', 0));
$cat_waiting = $cat_handler->getCount($criteria);
//compte les pages
$numpage = $page_handler->getCount();
//compte les blocks
$numblock = $block_handler->getCount();

if (!in_array('mod_rewrite', @apache_get_modules())) {
    $veriffile = '<span style="color: red;"><img src="./../assets/images/off.gif">mod_rewrite ERROR</a></span>';
} else {
    $veriffile = '<span style="color: green;"><img src="./../assets/images/on.gif" >mod_rewrite OK</span>';
}

if (phpversion() >= 5) {
    include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->dirname() . '/class/menu.php';

    //showIndex();
    $menu = new TDMSoundMenu();
    $menu->addItem('item', 'item.php', '../assets/images/decos/index.png', _AM_TDMSPOT_MANAGE_ITEM);
    $menu->addItem('cat', 'cat.php', '../assets/images/decos/cat.png', _AM_TDMSPOT_MANAGE_CAT);
    $menu->addItem('page', 'page.php', '../assets/images/decos/page.png', _AM_TDMSPOT_MANAGE_PAGE);
    $menu->addItem('artiste', 'block.php', '../assets/images/decos/block.png', _AM_TDMSPOT_MANAGE_BLOCK);
    $menu->addItem('about', 'about.php', '../assets/images/decos/about.png', _AM_TDMSPOT_MANAGE_ABOUT);
    $menu->addItem('update', '../../system/admin.php?fct=modulesadmin&op=update&module=' . $xoopsModule->getVar('name'), '../assets/images/decos/update.png', _AM_TDMSPOT_MANAGE_UPDATE);
    $menu->addItem('import', 'import.php', '../assets/images/decos/import.png', _AM_TDMSPOT_MANAGE_IMPORT);
    $menu->addItem('permissions', 'permissions.php', '../assets/images/decos/permissions.png', _AM_TDMSPOT_MANAGE_PERM);

    echo $menu->getCSS();
}
echo '<div class="CPbigTitle" style="background-image: url(../assets/images/decos/index.png); background-repeat: no-repeat; background-position: left; padding-left: 60px; padding-top:20px; padding-bottom:15px;">
        <h3><strong>' . _AM_TDMSPOT_MANAGE_INDEX . '</strong></h3>
    </div><br /><table width="100%" border="0" cellspacing="10" cellpadding="4">
  <tr>';
if (phpversion() >= 5) {
    echo '<td valign="top">
  ' . $menu->render() . '</td>';
} else {
    echo '<div class="errorMsg" style="text-align: left;">no menu</div>';
}
echo '<td valign="top" width="60%">

   <fieldset><legend class="CPmediumTitle">' . _AM_TDMSPOT_MANAGE_ITEM . '</legend>
        <br/>';
printf(_AM_TDMSPOT_THEREARE_ITEM, $numitem);
echo '<br /><br/>';
printf(_AM_TDMSPOT_THEREARE_ITEM_WAITING, $item_waiting);
echo '<br /><br />';
printf(_AM_TDMSPOT_THEREARE_ITEM_TIME, $item_time);
echo '<br /><br />
    </fieldset><br /><br />

       <fieldset><legend class="CPmediumTitle">' . _AM_TDMSPOT_MANAGE_CAT . '</legend>
        <br/>';
printf(_AM_TDMSPOT_THEREARE_CAT, $numcat);
echo '<br /><br />';
printf(_AM_TDMSPOT_THEREARE_CAT_WAITING, $cat_waiting);
echo '<br /><br />
    </fieldset><br /><br />



 <fieldset><legend class="CPmediumTitle">' . _AM_TDMSPOT_MANAGE_PAGE . '</legend>
        <br/>';
printf(_AM_TDMSPOT_THEREARE_PAGE, $numpage);
echo '<br /><br />
    </fieldset><br /><br />

     <fieldset><legend class="CPmediumTitle">' . _AM_TDMSPOT_MANAGE_BLOCK . '</legend>
        <br/>';
printf(_AM_TDMSPOT_THEREARE_BLOCK, $numblock);
echo '<br /><br />
    </fieldset><br /> <br />

     <fieldset><legend class="CPmediumTitle">Appache</legend>
        <br/>';
echo $veriffile;
echo '<br /><br />
    </fieldset><br /> <br />

    </td></tr></table>';
xoops_cp_footer();
