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
define('_AM_TDMSPOT_ADD', 'Ajouter');
define('_AM_TDMSPOT_INDATE', 'Date');
define("_AM_TDMSPOT_INDATE_DESC", "cet article ne sera affiché que a partir de cette date");
define("_AM_TDMSPOT_INDATE_TIME", "Date et Heure de votre serveur <b>%s</b>");
define('_AM_TDMSPOT_UPDATE', 'Modifier');
define('_AM_TDMSPOT_EDITER', 'Editer');
define('_AM_TDMSPOT_DELETE', 'Supprimer');
define('_AM_TDMSPOT_BASESURE', 'ATTENTION: Etes-vous sûr de vouloir supprimer?');
define('_AM_TDMSPOT_BASESUREDEL', "ATTENTION: Etes-vous sûr de vouloir supprimer : <b><span style='color : Red'> %s </span></b> ?");
define("_AM_TDMSPOT_BASESUREDELCAT", "ATTENTION: Etes-vous sûr de vouloir supprimer : <b><span style='color : Red'> %s </span></b>, les enfants de la catégorie seront supprimés mais les fichiers ne seront pas effacés");
define('_AM_TDMSPOT_BASEOK', 'Base de donnée mise à jour');
define('_AM_TDMSPOT_PAGEERROR', 'Erreur: vous devez créer une page');
define('_AM_TDMSPOT_CATERROR', 'Erreur: vous devez créer une catégorie');

define('_AM_TDMSPOT_OPTIONDESC', "l'option par défaut et celle du block d'origine vous pouvez modifier les options en éditant ce block aprés enregistrement");

define('_AM_TDMSPOT_PAGEDESC', "Gérer ici votre page index, une page peut afficher plusieurs Blocks et plusieurs Articles définie par leur catégorie et limité par le champ \"limite\". Vous pouvez naviguer entre les pages par plusieurs effets les réglages se trouvent dans les préférences du module.");

define('_AM_TDMSPOT_MANAGE_INDEX', 'Index du module');
define('_AM_TDMSPOT_MANAGE_PAGE', 'Gestion des pages');
define('_AM_TDMSPOT_MANAGE_ITEM', 'Gestion des articles');
define("_AM_TDMSPOT_THEREARE_PAGE", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> pages dans la Base de donnée");
define('_AM_TDMSPOT_MANAGE_BLOCK', 'Gestion des blocs');
define('_AM_TDMSPOT_MANAGE_CAT', 'Gestion des catégories');
define("_AM_TDMSPOT_THEREARE_BLOCK", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> bocks dans la Base de donnée");
define("_AM_TDMSPOT_THEREARE_CAT", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> catégorie(s) dans la Base de donnée");
define("_AM_TDMSPOT_THEREARE_ITEM", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> article(s) dans la Base de donnée");
define("_AM_TDMSPOT_THEREARE_ITEM_WAITING", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> article(s) en attente dans la Base de donnée");
define("_AM_TDMSPOT_THEREARE_ITEM_TIME", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> article(s) programmes dans la Base de donnée");
define("_AM_TDMSPOT_THEREARE_CAT_WAITING", "Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> catégorie(s) en attente dans la Base de donnée");

define('_AM_TDMSPOT_MANAGE_PLUG', 'Gestion du pluging');
define('_AM_TDMSPOT_MANAGE_PLUGERROR', 'Veuillez copier le fichier "xoops_plugins/function.xoSpot.php" dans Racine de votre site "/class/smarty/xoops_plugins/"');
define('_AM_TDMSPOT_MANAGE_PLUGOK', 'Pluging installé');
define('_AM_TDMSPOT_MANAGE_UPDATE', 'Mise a jour');
define('_AM_TDMSPOT_MANAGE_ABOUT', 'A propos');
define('_AM_TDMSPOT_MANAGE_HELP', 'Aide');

define('_AM_TDMSPOT_TITLE', 'Titre');
define('_AM_TDMSPOT_BLOCK', 'Block a afficher');
define('_AM_TDMSPOT_PAGE', 'Page');
define('_AM_TDMSPOT_OPTION', 'Options disponible');
define('_AM_TDMSPOT_NOOPTION', 'Aucune option disponible');

define('_AM_TDMSPOT_CENTER', 'Afficher');

define('_AM_TDMSPOT_CENTERCCOLUMN', 'Haut Centre');
define('_AM_TDMSPOT_CENTERLCOLUMN', 'Haut Gauche');
define('_AM_TDMSPOT_CENTERRCOLUMN', 'Haut Droite');

define('_AM_TDMSPOT_BOTTOMCCOLUMN', 'Bas Centre');
define('_AM_TDMSPOT_BOTTOMLCOLUMN', 'Bas Gauche');
define('_AM_TDMSPOT_BOTTOMRCOLUMN', 'Bas Droite');

define('_AM_TDMSPOT_MORPHOCENTERCCOLUMN', 'Mor.pho - Haut Centre');
define('_AM_TDMSPOT_MORPHOCENTERLCOLUMN', 'Mor.pho - Haut Gauche');
define('_AM_TDMSPOT_MORPHOCENTERRCOLUMN', 'Mor.pho - Haut Droite');

define('_AM_TDMSPOT_MORPHOBOTTOMCCOLUMN', 'Mor.pho - Bas Centre');
define('_AM_TDMSPOT_MORPHOBOTTOMLCOLUMN', 'Mor.pho - Bas Gauche');
define('_AM_TDMSPOT_MORPHOBOTTOMRCOLUMN', 'Mor.pho - Bas Droite');

define('_AM_TDMSPOT_ALL', 'tous');
define('_AM_TDMSPOT_WEIGHT', 'Poids');
define('_AM_TDMSPOT_SEARCH', 'Recherche');
define('_AM_TDMSPOT_ID', 'ID');
define('_AM_TDMSPOT_VISIBLE', 'Visible');
define('_AM_TDMSPOT_FREE', 'Volante');
define('_AM_TDMSPOT_FREEDESC', 'Page Volante ? Afficher le menu gr&#234;ce au pluging <{xospot}> ou copier le lien afficher dans l\'admin et les bocks de la page appelée ce glisseront dans le contenue en cours');
define('_AM_TDMSPOT_ACTION', 'Action');
define('_AM_TDMSPOT_PARENT', 'Parent');
define('_AM_TDMSPOT_CATEGORY', 'Catégorie');
define('_AM_TDMSPOT_LIMIT', 'Limite');
define('_AM_TDMSPOT_TEXT', 'Texte');
define('_AM_TDMSPOT_IMG', 'Image');
define('_AM_TDMSPOT_PATH', 'Fichier présent dans %s');
define('_AM_TDMSPOT_UPLOAD', 'Charger');
define('_AM_TDMSPOT_FILE', 'Fichier');
define("_AM_TDMSPOT_TEXT_DESC", "Balises utiles : <br />
{X_BREAK} : définis la grandeur de la description courte.<br />
{X_NAME} : affichera le nom de l'utilisateur.<br />
{X_UNAME} : affichera le pseudo de l'utilisateur.<br />
{X_UEMAIL} : affichera l'email de l'utilisateur.<br />
{X_ADMINMAIL} : affichera l'email de l'admin.<br />
{X_SITENAME} : affichera le nom de votre site.<br />
{X_SITEURL} : affichera l'url de votre site.<br /><br />
{X_PAGE: montitre} : affichera un sommaire");

//plug.php
define('_AM_TDMSPOT_PLUGDEF', 'Page par defaut');
define('_AM_TDMSPOT_PLUGNONE', 'AUCUN');
define('_AM_TDMSPOT_PLUGPAGE', 'Page affich&#233;s');
define('_AM_TDMSPOT_PLUGDISPLAY', 'Afficher');
define('_AM_TDMSPOT_PLUGALL', 'TOUT');
define('_AM_TDMSPOT_PLUGTEXT', 'Texte');
define('_AM_TDMSPOT_PLUGTABS', 'Tabs');
define('_AM_TDMSPOT_PLUGSELECT', 'Select');
define('_AM_TDMSPOT_PLUG_DESC', 'Utiliser ce code dans vos templates ou votre th&#233;me pour afficher les blocks');
define('_AM_TDMSPOT_PLUGSTYLE', 'Style');

//permission
define('_AM_TDMSPOT_MANAGE_PERM', 'Gestion des permissions');
define('_AM_TDMSPOT_PERM_2', 'Permissions d\'afficher');
define("_AM_TDMSPOT_PERM_4", "Proposer");
define("_AM_TDMSPOT_PERM_8", "Proposer sans validation");
define("_AM_TDMSPOT_PERM_16", "Exporter pdf/print");
define("_AM_TDMSPOT_PERM_32", "Peux voter");
define("_AM_TDMSPOT_PERM_64", "Social bar (Addthis)");
define("_AM_TDMSPOT_PERM_128", "Boutton RSS");
define("_AM_TDMSPOT_PERM_256", "Peux télécharger");

//About (about.php)
define("_AM_ABOUT_RELEASEDATE", "Release Date");
define("_AM_ABOUT_AUTHOR", "Author");
define("_AM_ABOUT_CREDITS", "Cr&#233;dits");
define("_AM_ABOUT_README", "General Info");
define("_AM_ABOUT_MANUAL", "Help");
define("_AM_ABOUT_LICENSE", "License");
define("_AM_ABOUT_MODULE_STATUS", "Status");
define("_AM_ABOUT_WEBSITE", "Web Site");
define("_AM_ABOUT_AUTHOR_NAME", "Author Name");
define("_AM_ABOUT_AUTHOR_WORD", "Author Word");
define("_AM_ABOUT_CHANGELOG", "Change Log");
define("_AM_ABOUT_MODULE_INFO", "Module Info");
define("_AM_ABOUT_AUTHOR_INFO", "Author Info");
define("_AM_ABOUT_DISCLAIMER", "Disclaimer");
define("_AM_ABOUT_DISCLAIMER_TEXT", "GPL Licensed - No Warranty");

//1.02
define('_AM_TDMSPOT_MANAGE_IMPORT', 'Gestion des importations');
define("_AM_TDMSPOT_IMPORT", "Importer");
define("_AM_TDMSPOT_IMPORT_NONE", "Non installé");
define("_AM_TDMSPOT_IMPORT_NEWS", "Module News");
define("_AM_TDMSPOT_IMPORT_SMARTSECTION", "Module Smartsection");
define("_AM_TDMSPOT_IMPORT_WFSECTION", "Module Wfsection");
define("_AM_TDMSPOT_IMPORT_XFSECTION", "Module Xfsection");
define("_AM_TDMSPOT_IMPORTDESC", "Attention lancer toujours l'importation avant de créer une catégorie ou un article, de plus vous perdrez les votes et les fichiers attacher à l'article.");
//1.04
define("_AM_TDMSPOT_IMPORT_INDISPLAY", "Importer et affiché");
define("_AM_TDMSPOT_IMPORT_OUTDISPLAY", "Importer et masqué");
define('_AM_TDMSPOT_BASEERROR', 'Erreur: Vos Modifications ne sont pas enregistrer');
