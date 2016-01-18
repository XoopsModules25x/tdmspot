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

//formulaire
define('_AM_TDMSPOT_ADD', 'Add');
define('_AM_TDMSPOT_INDATE', 'Date');
define('_AM_TDMSPOT_INDATE_DESC', 'this article will only be displayed from that date');
define('_AM_TDMSPOT_INDATE_TIME', 'Date and Time of your server <b>%s</b>');
define('_AM_TDMSPOT_UPDATE', 'Update');
define('_AM_TDMSPOT_EDITER', 'Edit');
define('_AM_TDMSPOT_DELETE', 'Delete');
define('_AM_TDMSPOT_BASESURE', 'WARNING: Are you sure you want to delete?');
define('_AM_TDMSPOT_BASESUREDEL', "WARNING: Are you sure you want to delete: <b><span style='color : Red'> %s </span></b> ?");
define('_AM_TDMSPOT_BASESUREDELCAT', "WARNING: Are you sure you want to delete: <b><span style='color : Red'> %s </span></b>, the children of the category will be deleted but the files will not be deleted");
define('_AM_TDMSPOT_BASEOK', 'Database update');
define('_AM_TDMSPOT_PAGEERROR', 'Error: You must create a page');
define('_AM_TDMSPOT_CATERROR', 'Error: You must create a category');

define('_AM_TDMSPOT_OPTIONDESC', 'the default option and that of the original block you can change options by editing this block after recording');

define('_AM_TDMSPOT_PAGEDESC', 'Manage here your index page, a page can display multiple Blocks and several items defined by their class and limited by the "limit". You can navigate between pages by several effects settings are in the preferences of the module. ');

define('_AM_TDMSPOT_MANAGE_INDEX', 'Module Index');
define('_AM_TDMSPOT_MANAGE_PAGE', 'Manage pages');
define('_AM_TDMSPOT_MANAGE_ITEM', 'Manage Items ');
define("_AM_TDMSPOT_THEREARE_PAGE", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> Pages in the Database");
define('_AM_TDMSPOT_MANAGE_BLOCK', 'Block management');
define('_AM_TDMSPOT_MANAGE_CAT', 'Category management');
define("_AM_TDMSPOT_THEREARE_BLOCK", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> Blocks in the Database");
define("_AM_TDMSPOT_THEREARE_CAT", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> Categories in the Database");
define("_AM_TDMSPOT_THEREARE_ITEM", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> article(s) Items in the Database");
define("_AM_TDMSPOT_THEREARE_ITEM_WAITING", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> Articles waiting  in the Database");
define("_AM_TDMSPOT_THEREARE_ITEM_TIME", "There are <span style='color: #ff0000; font-weight: bold'>%s</span> articles  in the Database");
define("_AM_TDMSPOT_THEREARE_CAT_WAITING", "There are <span style='color: #ff0000; font-weight: bold'>%s</span>  Categories waiting in the Database");

define('_AM_TDMSPOT_MANAGE_PLUG', 'Plugin Management');
define('_AM_TDMSPOT_MANAGE_PLUGERROR', 'Copy the file "xoops_plugins/function.xoSpot.php" to your Root folder: "/class/smarty/xoops_plugins/"');
define('_AM_TDMSPOT_MANAGE_PLUGOK', 'Installed Plugins ');
define('_AM_TDMSPOT_MANAGE_UPDATE', 'Update');
define('_AM_TDMSPOT_MANAGE_ABOUT', 'About');
define('_AM_TDMSPOT_MANAGE_HELP', 'Help');

define('_AM_TDMSPOT_TITLE', 'Title');
define('_AM_TDMSPOT_BLOCK', 'Display Blocks');
define('_AM_TDMSPOT_PAGE', 'Page');
define('_AM_TDMSPOT_OPTION', 'Available Options');
define('_AM_TDMSPOT_NOOPTION', 'No Options');

define('_AM_TDMSPOT_CENTER', 'Show');

define('_AM_TDMSPOT_CENTERCCOLUMN', 'Top Center');
define('_AM_TDMSPOT_CENTERLCOLUMN', 'Top Left');
define('_AM_TDMSPOT_CENTERRCOLUMN', 'Top Right');

define('_AM_TDMSPOT_BOTTOMCCOLUMN', 'Bottom Center');
define('_AM_TDMSPOT_BOTTOMLCOLUMN', 'Bottom Left');
define('_AM_TDMSPOT_BOTTOMRCOLUMN', 'Bottom Right');

define('_AM_TDMSPOT_MORPHOCENTERCCOLUMN', 'Mor.pho - Top Center');
define('_AM_TDMSPOT_MORPHOCENTERLCOLUMN', 'Mor.pho - Top Left');
define('_AM_TDMSPOT_MORPHOCENTERRCOLUMN', 'Mor.pho - Top Right');

define('_AM_TDMSPOT_MORPHOBOTTOMCCOLUMN', 'Mor.pho - Bottom Center');
define('_AM_TDMSPOT_MORPHOBOTTOMLCOLUMN', 'Mor.pho - Bottom Left');
define('_AM_TDMSPOT_MORPHOBOTTOMRCOLUMN', 'Mor.pho - Bottom Right');

define('_AM_TDMSPOT_ALL', 'All');
define('_AM_TDMSPOT_WEIGHT', 'Weight');
define('_AM_TDMSPOT_SEARCH', 'Search');
define('_AM_TDMSPOT_ID', 'ID');
define('_AM_TDMSPOT_VISIBLE', 'Visible');
define('_AM_TDMSPOT_FREE', 'Free');
define('_AM_TDMSPOT_FREEDESC', 'Page Volante ? Afficher le menu gr&#234;ce au pluging <{xospot}> ou copier le lien afficher dans l\'admin et les bocks de la page appelée ce glisseront dans le contenue en cours');
define('_AM_TDMSPOT_ACTION', 'Action');
define('_AM_TDMSPOT_PARENT', 'Parent');
define('_AM_TDMSPOT_CATEGORY', 'Category');
define('_AM_TDMSPOT_LIMIT', 'Limit');
define('_AM_TDMSPOT_TEXT', 'Text');
define('_AM_TDMSPOT_IMG', 'Image');
define('_AM_TDMSPOT_PATH', 'File in path %s');
define('_AM_TDMSPOT_UPLOAD', 'Upload');
define('_AM_TDMSPOT_FILE', 'File');
define('_AM_TDMSPOT_TEXT_DESC', 'Useful Tags: <br />
{X_BREAK}: set the size of the short description.<br />
{X_NAME}: will display the name of the user.<br />
{X_UNAME}: will display the name of the user.<br />
{X_UEMAIL}: will display the email of the user.<br />
{X_ADMINMAIL}: will display the email admin.<br />
{X_SITENAME}: will display the name of your site.<br />
{X_SITEURL}: will display the URL of your site.<br /><br />
{X_PAGE: montitre}: display a summary');

//plug.php
define('_AM_TDMSPOT_PLUGDEF', 'Default page');
define('_AM_TDMSPOT_PLUGNONE', 'No');
define('_AM_TDMSPOT_PLUGPAGE', 'Page displyed');
define('_AM_TDMSPOT_PLUGDISPLAY', 'Show');
define('_AM_TDMSPOT_PLUGALL', 'ALL');
define('_AM_TDMSPOT_PLUGTEXT', 'Text');
define('_AM_TDMSPOT_PLUGTABS', 'Tabs');
define('_AM_TDMSPOT_PLUGSELECT', 'Select');
define('_AM_TDMSPOT_PLUG_DESC', 'Use this code in your template or theme to display the blocks');
define('_AM_TDMSPOT_PLUGSTYLE', 'Style');

//permission
define('_AM_TDMSPOT_MANAGE_PERM', 'Manage permissions');
define('_AM_TDMSPOT_PERM_2', 'Permissions View');
define('_AM_TDMSPOT_PERM_4', 'Offer');
define('_AM_TDMSPOT_PERM_8', 'without validation Offer');
define('_AM_TDMSPOT_PERM_16', 'Export PDF/Print');
define('_AM_TDMSPOT_PERM_32', 'Can Vote');
define('_AM_TDMSPOT_PERM_64', 'Social bar (AddThis)');
define('_AM_TDMSPOT_PERM_128', 'RSS Button');
define('_AM_TDMSPOT_PERM_256', 'Can Download');

//About (about.php)
define('_AM_ABOUT_RELEASEDATE', 'Release Date');
define('_AM_ABOUT_AUTHOR', 'Author');
define('_AM_ABOUT_CREDITS', 'Credits');
define('_AM_ABOUT_README', 'General Info');
define('_AM_ABOUT_MANUAL', 'Help');
define('_AM_ABOUT_LICENSE', 'License');
define('_AM_ABOUT_MODULE_STATUS', 'Status');
define('_AM_ABOUT_WEBSITE', 'Web Site');
define('_AM_ABOUT_AUTHOR_NAME', 'Author Name');
define('_AM_ABOUT_AUTHOR_WORD', 'Author Word');
define('_AM_ABOUT_CHANGELOG', 'Change Log');
define('_AM_ABOUT_MODULE_INFO', 'Module Info');
define('_AM_ABOUT_AUTHOR_INFO', 'Author Info');
define('_AM_ABOUT_DISCLAIMER', 'Disclaimer');
define('_AM_ABOUT_DISCLAIMER_TEXT', 'GPL Licensed - No Warranty');

//1.02
define('_AM_TDMSPOT_MANAGE_IMPORT', 'Import Management');
define('_AM_TDMSPOT_IMPORT', 'Import');
define('_AM_TDMSPOT_IMPORT_NONE', 'Not installed');
define('_AM_TDMSPOT_IMPORT_NEWS', 'Module News');
define('_AM_TDMSPOT_IMPORT_SMARTSECTION', 'Module Smartsection');
define('_AM_TDMSPOT_IMPORT_WFSECTION', 'Module Wf-section');
define('_AM_TDMSPOT_IMPORT_XFSECTION', 'Module Xf-section');
define('_AM_TDMSPOT_IMPORTDESC', 'Warning always start importing before creating a category or an item, you will lose more votes and attach files to the article.');
//1.04
define('_AM_TDMSPOT_IMPORT_INDISPLAY', 'Import and Display');
define('_AM_TDMSPOT_IMPORT_OUTDISPLAY', 'Import and Hide');
define('_AM_TDMSPOT_BASEERROR', 'Error: Your changes are not saved');
