<?php
/**
 * ****************************************************************************
 *  - TDMSpot By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.)
 *
 * Cette licence, contient des limitations
 *
 * 1. Vous devez posséder une permission d'exécuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' étudier ni l'adapter à vos besoins,
 * 3. Vous ne devez le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la liberté de l'améliorer ni de rendre publiques les modifications
 *
 * @license     TDMFR GNU public license
 * @author      TDMFR ; TEAM DEV MODULE
 *
 * ****************************************************************************
 */

if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

$modversion['name']                = _MI_TDMSPOT_NAME;
$modversion['version']             = 1.05;
$modversion['description']         = _MI_TDMSPOT_DESC;
$modversion['author']              = 'TDM';
$modversion['author_website_url']  = 'http://www.tdmxoops.net/';
$modversion['author_website_name'] = 'Team Dev Mdodule';
$modversion['credits']             = 'None';
$modversion['help']                = 'page=help';
$modversion['license']             = 'LICENSE FREE';
$modversion['official']            = 1;
$modversion['image']               = 'assets/images/TDMSpot.png';
$modversion['dirname']             = 'TDMSpot';

$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses/moduleadmin';
$modversion['icons16']        = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = 'Frameworks/moduleclasses/icons/32';
//about
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2015/09/21';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.7.2';
$modversion['min_admin']           = '1.1';
$modversion['min_db']              = array(
    'mysql'  => '5.0.7',
    'mysqli' => '5.0.7'
);

$modversion['system_menu'] = 1;

//install
//$modversion['onInstall'] = 'include/install.php';

//update
$modversion['onUpdate'] = 'include/update.php';

//about
$modversion['module_website_url']  = 'http://www.tdmxoops.net';
$modversion['module_website_name'] = 'TDM';

$modversion['release']       = '2008-03-04';
$modversion['module_status'] = 'Release';

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Search
$modversion['hasSearch']      = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'tdmspot_search';

// Notification
$modversion['hasNotification'] = 0;

// Comments
$modversion['hasComments']          = 1;
$modversion['comments']['itemName'] = 'itemid';
$modversion['comments']['pageName'] = 'item.php';
// Comment callback functions
$modversion['comments']['callbackFile']        = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'tdmspot_comments_approve';
$modversion['comments']['callback']['update']  = 'tdmspot_comments_update';

// Database
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][0]        = 'tdmspot_newblocks';
$modversion['tables'][1]        = 'tdmspot_page';
$modversion['tables'][2]        = 'tdmspot_cat';
$modversion['tables'][3]        = 'tdmspot_item';
$modversion['tables'][4]        = 'tdmspot_vote';

$modversion['templates'][1]['file']        = 'spot_index.tpl';
$modversion['templates'][1]['description'] = 'index';
$modversion['templates'][2]['file']        = 'spot_top.tpl';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file']        = 'spot_bottom.tpl';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file']        = 'spot_item.tpl';
$modversion['templates'][4]['description'] = 'Item';
$modversion['templates'][5]['file']        = 'spot_viewcat.tpl';
$modversion['templates'][5]['description'] = 'viewcat';
$modversion['templates'][6]['file']        = 'spot_viewitem.tpl';
$modversion['templates'][6]['description'] = 'viewitem';
$modversion['templates'][7]['file']        = 'spot_rss.tpl';
$modversion['templates'][7]['description'] = 'rss';
//config
$i                                       = 1;
$modversion['config'][$i]['name']        = 'tdmspot_seo';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_SEO';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_SEO_DESC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '0';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_seo_title';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_SEO_TITLE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'publication';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_seo_cat';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_SEO_CAT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'categorie';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_seo_item';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_SEO_ITEM';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'article';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_mimemax';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_MIMEMAX';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10485760';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_mimetype';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_MIMETYPE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'application/x-compress|application/x-compressed|application/x-compressed|application/x-zip-compressed|application/zip|multipart/x-zip|image/png|text/xml|application/xml|application/msword|audio/wav|audio/x-wav|application/gnutar|application/x-compressed|application/x-tar|application/x-shockwave-flash|application/vnd.ms-powerpoint|application/mspowerpoint|image/png|application/pro_eng|video/mpeg|audio/mpeg3|audio/x-mpeg-3|video/mpeg|video/x-mpeg|video/quicktime|image/jpeg|image/pjpeg|image/jpeg|image/pjpeg|application/x-gzip|multipart/x-gzip|image/bmp|image/x-windows-bmp|application/x-troff-msvideo|video/avi|video/msvideo|video/x-msvideo|';
++$i;
include_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
$modversion['config'][$i]['name']        = 'tdmspot_editor';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_EDITOR';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'dhtmltextarea';
$modversion['config'][$i]['options']     = XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . '/class/xoopseditor');
$modversion['config'][$i]['category']    = 'global';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_name';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_NAMES';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '1';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_present';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_PRESENT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '1';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_nextprev';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_NEXTPREV';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '1';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_img';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_IMG';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '1';
++$i;
//version 1.5
$modversion['config'][$i]['name']        = 'tdmspot_cat_display';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_CAT_DISPLAY';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'texte';
$modversion['config'][$i]['options']     = array(_MI_TDMSPOT_CAT_DISPLAY_NONE    => 'none',
                                                 _MI_TDMSPOT_CAT_DISPLAY_SUB     => 'sub',
                                                 _MI_TDMSPOT_CAT_DISPLAY_SUBIMG  => 'subimg',
                                                 _MI_TDMSPOT_CAT_DISPLAY_TEXT    => 'text',
                                                 _MI_TDMSPOT_CAT_DISPLAY_TEXTIMG => 'textimg',
                                                 _MI_TDMSPOT_CAT_DISPLAY_IMG     => 'img'
);
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_cat_cel';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_CAT_CEL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 2;
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_cat_souscel';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_CAT_SOUSCEL';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10;
++$i;
//
$modversion['config'][$i]['name']        = 'tdmspot_cat_width';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_CAT_WIDTH';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '80';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_cat_height';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_CAT_HEIGHT';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '80';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_page';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_PAGES';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_blindate';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLINDATE';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_FORNULL';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_blcounts';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLCOUNTS';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_FORNULL';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_blhits';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLHITS';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_FORNULL';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_blsimil';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLSIMIL';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_FORNULL';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_blposter';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLPOSTER';
$modversion['config'][$i]['description'] = '_MI_TDMSPOT_FORNULL';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '10';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_bltitle';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_BLTITLE';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = '150';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_description';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_DESCRIPTION';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '';
++$i;
$modversion['config'][$i]['name']        = 'tdmspot_keywords';
$modversion['config'][$i]['title']       = '_MI_TDMSPOT_KEYWORDS';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '';
++$i;

// Blocks
//*************************************************************
$i                                       = 1;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_TITLE;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'title|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_DATE;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'date|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_HITS;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'hits|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_COUNTS;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'counts|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_COMMENT;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'comments|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
$modversion['blocks'][$i]['file']        = 'tdmspot_minitable.php';
$modversion['blocks'][$i]['name']        = _MI_TDMSPOT_BLOCK_RAND;
$modversion['blocks'][$i]['description'] = '';
$modversion['blocks'][$i]['show_func']   = 'b_tdmspot';
$modversion['blocks'][$i]['edit_func']   = 'b_tdmspot_edit';
$modversion['blocks'][$i]['options']     = 'rand|5|25|0';
$modversion['blocks'][$i]['template']    = 'tdmspot_minitable.tpl';
++$i;
