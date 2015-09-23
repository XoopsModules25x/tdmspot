<?php
/**
 * ****************************************************************************
 *  - TDMPicture By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.tdmxoops.net)
 *
 * Cette licence, contient des limitations!!!
 *
 * 1. Vous devez posséder une permission d'exécuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' étudier,
 * 3. Vous ne devez pas le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la liberté de l'améliorer et de rendre publiques les modifications
 *
 * @license     TDMFR PRO license
 * @author		TDMFR ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */

include '../../../include/cp_header.php'; 
include_once(XOOPS_ROOT_PATH."/class/xoopsformloader.php");
include_once XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->getVar("dirname").'/include/common.php';
include_once XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar("dirname")."/class/tree.php";
include_once XOOPS_ROOT_PATH.'/class/pagenav.php';

$cat_handler =& xoops_getModuleHandler('tdmspot_cat', 'TDMSpot');

$myts =& MyTextSanitizer::getInstance();
$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'list';

//compte les cats
$numcat = $cat_handler->getCount();
//compte les cats en attente

 switch($op) {
  
    //sauv  
 case "save_cat":
 
		if (!$GLOBALS['xoopsSecurity']->check()) {
        redirect_header('cat.php', 3, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
		}
		if (isset($_REQUEST['id'])) {
        $obj =& $cat_handler->get($_REQUEST['id']);
		} else {
        $obj =& $cat_handler->create();
		}   
	
	//upload	
	include_once XOOPS_ROOT_PATH.'/class/uploader.php';	
	$uploaddir = XOOPS_ROOT_PATH . "/modules/".$xoopsModule->dirname()."/upload/cat/";
	$mimetype = explode('|',$xoopsModuleConfig['tdmspot_mimetype']);
    $uploader = new XoopsMediaUploader($uploaddir, $mimetype, $xoopsModuleConfig['tdmspot_mimemax']);

		if ($uploader->fetchMedia($_POST['xoops_upload_file'][0])) {
		$uploader->fetchMedia($_POST['xoops_upload_file'][0]);
		if (!$uploader->upload()) {
		$errors = $uploader->getErrors();
		redirect_header("javascript:history.go(-1)",3, $errors);
		} else {
		$obj->setVar('img', $uploader->getSavedFileName());
		}
		} else {
		$obj->setVar('img', $_REQUEST['img']);
		}
	//
		$obj->setVar('pid', $_REQUEST['pid']);
		$obj->setVar('title', $_REQUEST['title']);
		//$obj->setVar('text', $_REQUEST['text']);
		$obj->setVar('weight', $_REQUEST['weight']);
		$obj->setVar('display', $_REQUEST['display']);

		if ($cat_handler->insert($obj)) {
	 
	//permission
	$perm_id = isset($_REQUEST['id']) ? $_REQUEST['id'] : $obj->getVar('id');
	$gperm_handler = &xoops_gethandler('groupperm');
	$criteria = new CriteriaCompo();
	$criteria->add(new Criteria('gperm_itemid', $perm_id, '='));
	$criteria->add(new Criteria('gperm_modid', $xoopsModule->getVar('mid'),'='));
	$criteria->add(new Criteria('gperm_name', 'tdmspot_catview', '='));
	$gperm_handler->deleteAll($criteria);

	if(isset($_POST['groups_view'])) {
		foreach($_POST['groups_view'] as $onegroup_id) {
			$gperm_handler->addRight('tdmspot_catview', $perm_id, $onegroup_id, $xoopsModule->getVar('mid'));
		}
	}
	
        redirect_header('cat.php', 2, _AM_SPOT_BASEOK);
		}
		//include_once('../include/forms.php');
		echo $obj->getHtmlErrors();
		$form =& $obj->getForm();
		$form->display();
    break;
	
	 case "edit": 
	  xoops_cp_header();
if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php"))	{
TDMSpot_adminmenu(1, _AM_SPOT_MANAGE_CAT);
} else {
include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.admin.php';
loadModuleAdminMenu (1, _AM_SPOT_MANAGE_CAT);
}

//menu
echo '<div class="CPbigTitle" style="background-image: url(../images/decos/cat.png); background-repeat: no-repeat; background-position: left; padding-left: 60px; padding-top:20px; padding-bottom:15px;"><h3><strong>'._AM_SPOT_MANAGE_CAT.'</strong></h3>';
echo '</div><br />';

    $obj = $cat_handler->get($_REQUEST['id']);
    $form = $obj->getForm();
    $form->display();
    break;

    break;
	
 case "delete":
	$obj =& $cat_handler->get($_REQUEST['id']);
	
    if (isset($_REQUEST['ok']) && $_REQUEST['ok'] == 1) {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('cat.php', 2, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
        }
		
	//supprimer les enfant de la base et leur dossier
	$arr = $cat_handler->getall();
	$mytree = new XoopsObjectTree($arr, 'id', 'pid');
	$treechild = $mytree->getAllChild($obj->getVar('id'));
	foreach($treechild as $child) {
	$ret =& $cat_handler->get($child->getVar('id'));
	$cat_handler->delete($ret);	
    } 
	
	//supprime le cat	
     if ($cat_handler->delete($obj)) {
        redirect_header('cat.php', 2, _AM_SPOT_BASEOK);
       } else {
           echo $obj->getHtmlErrors();
        }
    } else {
	 xoops_cp_header();
        xoops_confirm(array('ok' => 1, 'id' => $_REQUEST['id'], 'op' => 'delete'), $_SERVER['REQUEST_URI'], sprintf(_AM_SPOT_BASESUREDELCAT, $obj->getVar('title')));
    }
    break;
	
 	case "update":
		$obj = $cat_handler->get($_REQUEST['id']);
		$obj->setVar('display', 1);
		if ($cat_handler->insert($obj)) {
         redirect_header('cat.php', 2, _AM_SPOT_BASEOK);
        }
	break;
	
 case "list": 
  default:
 xoops_cp_header();
if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php"))	{
TDMSpot_adminmenu(1, _AM_SPOT_MANAGE_CAT);
} else {
include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.admin.php';
loadModuleAdminMenu (1, _AM_SPOT_MANAGE_CAT);
}

include_once XOOPS_ROOT_PATH."/modules/".$xoopsModule->getVar("dirname")."/class/tree.php";
//menu
echo '<div class="CPbigTitle" style="background-image: url(../images/decos/cat.png); background-repeat: no-repeat; background-position: left; padding-left: 60px; padding-top:20px; padding-bottom:15px;"><h3><strong>'._AM_SPOT_MANAGE_CAT.'</strong></h3>';
echo '</div><br />';
	//Parameters	
	$criteria = new CriteriaCompo();
	$limit = 10;
	if (isset($_REQUEST['start'])) {
	$criteria->setStart($_REQUEST['start']);
	$start = $_REQUEST['start'];
	} else {
	$criteria->setStart(0);
	$start = 0;
	}
	
	
	$criteria->setLimit($limit);
	$criteria->setOrder('ASC');
	$assoc_cat = $cat_handler->getAll($criteria);
	$numrows = $cat_handler->getCount();
	
	//nav
	if ( $numrows > $limit ) {
	$pagenav = new XoopsPageNav($numrows, $limit, $start, 'start', 'op=list');
	$pagenav = $pagenav->renderNav(2);
	} else {
	$pagenav = '';
	}
		//Affichage du tableau des catégories
		if ($numrows>0) {
			echo '<table width="100%" cellspacing="1" class="outer">';
			echo '<tr>';			
			echo '<th align="center" width="70%">'._AM_SPOT_TITLE.'</th>';
			echo '<th align="center" width="10%">'._AM_SPOT_IMG.'</th>';
			echo '<th align="center" width="5%">'._AM_SPOT_WEIGHT.'</th>';
			echo '<th align="center" width="5%">'._AM_SPOT_VISIBLE.'</th>';
			echo '<th align="center" width="10%">'._AM_SPOT_ACTION.'</th>';
			echo '</tr>';
			$class = 'odd';
			$mytree = new TDMObjectTree($assoc_cat, 'id', 'pid');            
            $category_ArrayTree = $mytree->makeArrayTree('','<img src="'.TDMSPOT_IMAGES_URL.'/decos/arrow.gif">');
			foreach (array_keys($category_ArrayTree) as $i) {
		    //foreach($arr as $c) {
			$class = ($class == 'even') ? 'odd' : 'even';
			$cat_id = $assoc_cat[$i]->getVar('id');
			$cat_pid = $assoc_cat[$i]->getVar('pid');
			$cat_title = $assoc_cat[$i]->getVar('title');
			
			$display = $assoc_cat[$i]->getVar('display') == 1 ? "<img src='".TDMSPOT_IMAGES_URL."/on.gif' border='0'>" : "<a href='cat.php?op=update&id=".$cat_id."'><img alt='"._AM_SPOT_UPDATE."' title='"._AM_SPOT_UPDATE."' src='".TDMSPOT_IMAGES_URL."/off.gif' border='0'></a>";

			//on test l'existance de l'image
			$img = $assoc_cat[$i]->getVar("img") ? $assoc_cat[$i]->getVar("img") : 'blank.gif';
			$imgpath = TDMSPOT_UPLOAD_PATH . "/cat/".$img;
			if (file_exists($imgpath)) {
			$cat_img = TDMSPOT_UPLOAD_URL. "/cat/".$assoc_cat[$i]->getVar("img");
			} else {
			$cat_img = TDMSPOT_UPLOAD_URL. "/cat/blank.gif";
			}
			
 				echo '<tr class="'.$class.'">';				
				echo '<td align="left" width="70%">'.$category_ArrayTree[$i].$cat_title.'</td>';
				echo '<td align="center" width="10%"><img src="'.$cat_img.'" alt="" title="" height="60"></td>';
				echo '<td align="center" width="5%">'.$assoc_cat[$i]->getVar('weight').'</td>';
				echo '<td align="center" width="5%">'.$display.'</td>';
				echo '<td align="center" width="10%">';
				echo '<a href="cat.php?op=edit&id='.$cat_id.'"><img src="'.TDMSPOT_IMAGES_URL.'/edit_mini.gif" border="0" alt="'._AM_SPOT_EDITER.'" title="'._AM_SPOT_EDITER.'"></a>';
				echo '<a href="cat.php?op=delete&id='.$cat_id.'"><img src="'.TDMSPOT_IMAGES_URL.'/delete_mini.gif" border="0" alt="'._AM_SPOT_DELETE.'" title="'._AM_SPOT_DELETE.'"></a>';
				echo '</td>';
				echo '</tr>';
			 }
			 echo '</table><br /><br />';
			 echo '<div align=right>'.$pagenav.'</div><br />';
		}
		// Affichage du formulaire de cr?ation de cat?gories
    	$obj =& $cat_handler->create();
    	$form = $obj->getForm();
    	$form->display();
    break;
	
  }
xoops_cp_footer();
?>